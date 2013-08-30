<?php
session_start();
if(!isset($_SESSION['login_vendor'])){
	header("location:../login/");
}

?>


<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 fluid top-full"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 fluid top-full sticky-top"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 fluid top-full sticky-top"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8 fluid top-full sticky-top"> <![endif]-->
<!--[if !IE]><!--><html class="fluid top-full sticky-top"><!-- <![endif]-->
<head>
    <title>Dashboard-VMS</title>

      <?php include("head_elements.php"); ?>
    
</head>
<body class="">
    
        <!-- Main Container Fluid -->
    <div class="container-fluid fluid menu-left">
        
               
        <!-- Content -->
        <div id="content">
        
                <?php include("topnav.php"); ?>
                
    <ul class="breadcrumb">
    <li>You are here</li>
    <li><a href="#" class="glyphicons dashboard"><i></i>Vendor</a></li>
    <li class="divider"></li>
    <li>Dashboard</li>
    <li class="pull-right hidden-phone"><a href="" class="glyphicons shield">Get Help<i></i></a></li>
    <li class="pull-right hidden-phone divider"></li>
    <li class="pull-right hidden-phone"><a href="" class="glyphicons adjust_alt">Filter<i></i></a></li>
</ul>



                <div class="innerLR">

                 <div class="widget-body">
                    
                      <div class="row-fluid">
                            

                            <?php

                            $vendorcode=$_SESSION['login_vendor'];
                            include("../../php_includes/db_config.php");
                            $sql=mysql_query("SELECT * FROM `vendor_details` WHERE `vendorcode`='$vendorcode'");
                            $row=mysql_fetch_array($sql);
                            $name=$row['vendorname'];

                            echo '<h3 style="margin-bottom:20px;font-size:20px;margin-top:20px;"></h3>';
                            $inc="incomplete";
                            $compl="complete";
                            $rev="reviewed";
                            $order_query="SELECT * FROM `order` WHERE ((`assign_vendor`='".$name."') AND (`status`='".$inc."' OR `status`='".$rev."' OR `status`='".$compl."'))";
                            $run_sql=mysql_query($order_query);
                            
                            echo    '

                             
                      <table class="dynamicTable tableTools table table-striped table-bordered table-condensed table-white">
                         <thead>
                          <tr>
                            <th>Item Code</th>
                            <th>Item Name</th>
                            <th>Image</th>
                            <th>Length</th>
                            <th>Breadth</th>
                            <th>Width</th>
                            <th>Height</th>
                            <th>Price</th>
                            <th>Ordered</th>
                            
                            <th>Delivery Date</th>
                            
                            <th>Status</th>
                            
                          </tr>
                        </thead>
                        <tbody>';
                            while($row_order=mysql_fetch_array($run_sql)){
                              $order_id=$row_order['order_id'];
                              echo    '

                              

                                  <tr>
                                        <td>'.$row_order['item_code'].'</td>
                                        <td>'.$row_order['item_name'].'</td>
                                        <td><a href="'.$row_order['item_pic'].'" target="_blank"><img src="'.$row_order['item_pic'].'" height="40px" width="40px"></img></a></td>
                                        <td>'.$row_order['length'].'</td>
                                        <td>'.$row_order['breadth'].'</td>
                                        <td>'.$row_order['width'].'</td>
                                        <td>'.$row_order['height'].'</td>
                                        
                                        <td>'.$row_order['price'].'</td>
                                        <td>'.$row_order['order_quant'].'</td>
                                  
                                  <td>'.$row_order['delivery'].'</td>';
                                  
                                  if($row_order['status']=="reviewed"){
                                  echo '<td style="text-align: center;"><i class="icon-warning-sign" style="color: rgb(21, 112, 226); font-size: 30px;/* text-align: center;*/"></i></td>';}
                                   elseif($row_order['status']=="incomplete"){
                                  echo '<td style="text-align: center;"><i class="icon-remove-sign" style="color: rgb(255, 37, 27); font-size: 30px;/* text-align: center;*/"></i></td>';}
				   elseif($row_order['status']=="complete"){
                                  echo '<td style="text-align: center;"><i class="icon-ok-sign" style="color: rgb(12, 163, 37); font-size: 30px;/* text-align: center;*/"></i></td>';} 
                                   
                            }

                            echo '</tr>';
                            echo ' </tbody>';
                            echo '</table>';
                            
                            
                            ?>
                          

                          </div>

                            </div><!--widget body>

                       </div>
                </div>



</div>     <!--content end-->
 <?php include("footer.php"); ?>

</div>     <!--container end-->




</body>
</html>