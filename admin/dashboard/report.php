<?php
session_start();
if(!isset($_SESSION['login_user'])){
	header("location:../login/");
}
include("../../php_includes/db_config.php");
?>



<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 fluid top-full"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 fluid top-full sticky-top"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 fluid top-full sticky-top"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8 fluid top-full sticky-top"> <![endif]-->
<!--[if !IE]><!--><html class="fluid top-full sticky-top"><!-- <![endif]-->
<head>
  <title>Print Report</title>
  
   <?php include("head_elements.php"); ?>
   <link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="stylesheet" type="text/css" href="css/table.css" />
<script type="text/javascript" src="js/jquery-latest.js"></script>
<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
<script type="text/javascript" src="js/autofill.js"></script>

<script language="JavaScript">
function Check(chk)
{ 
if(document.myform.Check_ctr.checked==true)
{
for (var i = 0; i < chk.length; i++)
{
chk[i].checked = true ;
}
}
else
{
for (i = 0; i < chk.length; i++)
chk[i].checked = false ;
}
}
</script>

<script language="javascript">
function download()
{
  window.location='report.xls';
}
</script>


<script>
$('.dynamicTable.colVis').dataTable({
  "sPaginationType": "bootstrap",
  "sDom": "<'row-fluid'<'span3'f><'span3'l><'span6'C>r>t<'row-fluid'<'span6'i><'span6'p>>",
  "oLanguage": {
    "sLengthMenu": "_MENU_ per page"
  }
});
</script>
<script language="javascript">
$(document).ready(function() { 
    // call the tablesorter plugin 
    $("table").tablesorter({ 
        // sort on the first column and third column, order asc 
        sortList: [[0,0],[2,0]] 
    }); 
});
   
</script>


</head>










<body>






  <div class="container-fluid fluid menu-left">
    
        
        <!-- Content -->
        <div id="content">
              <?php include("topnav.php"); ?>
              
              <ul class="breadcrumb">
              <li>You are here</li>
              <li><a href="#" class="glyphicons dashboard"><i></i> Quick Admin</a></li>
              <li class="divider"></li>
              <li>Print Report</li>
              <li class="pull-right hidden-phone"><a href="" class="glyphicons shield">Get Help<i></i></a></li>
              <li class="pull-right hidden-phone divider"></li>
              <li class="pull-right hidden-phone"><a href="" class="glyphicons adjust_alt">Filter<i></i></a></li>
            </ul>

            <h3><a href="report.xls" onClick="download();"><img src="img/preview.png" alt="" /></a></h3>

               
 <div class="innerLR">

  <!-- Widget -->
  <div class="widget widget-heading-simple widget-body-gray">

    <div class="widget-body">
    
      <!-- Table -->
      <table class="dynamicTable tableTools table table-striped table-bordered table-condensed table-white tablesorter" id="report">
      
        <!-- Table heading -->
        <thead>
          <tr>
            <th>Item Code</th>
            <th>Item Name</th>
	    <th>Image</th>
            <th>Vendor Name</th>
            <th>Length</th>
            <th>Breadth</th>
            <th>Height</th>
            <th>Width</th>
            <th>Price</th>
            <th>In Stock</th>
            <th>Ordered Stock</th>
            <th>Delivery</th>
	    <th>Exp Del date</th>
	    <th>Comment</th>
          </tr>
        </thead>
        <!-- // Table heading END -->
        
        <!-- Table body -->
        <tbody>
        
          
           <?php
          include("../../php_includes/db_config.php");
          $stock_query=mysql_query("SELECT `availstock` from item");
          while($stock_res=mysql_fetch_array($stock_query)){
              $stock= $stock_res['availstock'];
          }
          $qrys=mysql_query("SELECT * from `order`") or die("Error querying");
          while($result=mysql_fetch_array($qrys))
            {
            echo '<tr>
              <td>'.$result['item_code'].'</td>
              <td>'.$result['item_name'].'</td>
	      <td><img src="'.$result['item_pic'].'" height="40px" width="40px"></td>
              <td>'.$result['assign_vendor'].'</td>
              <td>'.$result['length'].'</td>
              <td>'.$result['breadth'].'</td>
              <td>'.$result['width'].'</td>
              <td>'.$result['height'].'</td>
              <td>'.$result['price'].'</td>
              <td>'.$stock.'</td>
              <td>'.$result['order_quant'].'</td>
              <td>'.$result['delivery'].'</td>
	      <td>'.$result['expdate'].'</td>
	      <td>'.$result['comment'].'</td>
            </tr>';
            }
            ?>
          
          
        </tbody>
        <!-- // Table body END -->
        
      </table>
      <!-- // Table END -->
     
      
    </div>
  </div>



 </div>





    </div>
</div><!--container fluid-->















<?php
error_reporting (E_ALL ^ E_NOTICE);
include("../../php_includes/db_config.php");

require_once("excelwriter.class.php");

$excel=new ExcelWriter("report.xls");
if($excel==false)	
echo $excel->error;
$myArr=array("");
$myArr=array("Indian Craftsmanship Vendor-Item-Stock Report");
$excel->writeLine($myArr);
$myArr=array("");
$excel->writeLine($myArr);
$myArr=array("Item Code","Item Name","Vendor Assigned","Length","Breadth","Width","Height","Price","Instock","Ordered Stock","Delivery Date");
$excel->writeLine($myArr);


$qry=mysql_query("select * from `order`") or die("Error querying");
if($qry!=false)
{
	$i=0;
	while($res=mysql_fetch_array($qry))
	{
		$myArr=array($res['id'],$res['item_code'],$res['item_name'],$res['assign_vendor'],$res['length'],$res['breadth'],$res['width'],$res['height'],$res['price'],$stock,$res['order_quant'], $res['delivery']);
		$excel->writeLine($myArr);
		$i++;
	}
}
?>



</body>
</html>
