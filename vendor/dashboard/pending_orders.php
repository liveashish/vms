<?php 
session_start();
if(!isset($_SESSION['login_vendor'])){
    header("location:../login/");
}
error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 fluid top-full"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 fluid top-full sticky-top"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 fluid top-full sticky-top"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8 fluid top-full sticky-top"> <![endif]-->
<!--[if !IE]><!--><html class="fluid top-full sticky-top"><!-- <![endif]-->
<head>
    <title>Pending Orders</title>
    
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
		
                    
                      <div class="row-fluid">
                            
<div class="widget widget-tabs">
                 <div class="widget-body">
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
                            $order_query="SELECT * FROM `order` WHERE ((`assign_vendor`='".$name."') AND (`status`='".$inc."' OR `status`='".$rev."'))";
                            $run_sql=mysql_query($order_query);
                            echo    '

                             
                      <table class="dynamicTable tableTools table table-striped table-bordered table-condensed table-white">
                         <thead>
                          <tr>
                            <th>Item Code</th>
                            <th>Item Name</th>
                            <th>Image</th>
                           <th>Dimension</th>
                            <th>Price</th>
                            <th>Ordered</th>
                            <th>In Stock</th>
                            <th>Delivery Date</th>
			    <th>Expected Del. date</th>
			    <th>Comment</th>
                            <th>Order Time</th>
                            <th>Review Order</th>
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
                                        <td>
				
					
					
					<a href="'.$row_order['item_pic'].'" target="_blank"><img src="'.$row_order['item_pic'].'" height="40px" width="40px"></img></a></td>
                                        <td>'.$row_order['length'].'- L <br> '.$row_order['breadth'].'-B <br>'.$row_order['width'].'-W <br> '.$row_order['height'].'-H </td>
					
                                        
                                        <td>'.$row_order['price'].'</td>
                                        <td>'.$row_order['order_quant'].'</td>
                                  <td><form action="" method="post">
                                  <input type="text" name="instock" style="width:40px;">
                                  </td>
                                  <td>'.$row_order['delivery'].'</td>
				  <td><input type="date" name="expdate" style="width:100px;></td>
				  <td><input type="text" name="comment"></td>
				  <td><input type="text" name="comment"></td>
                                  <td>'.$row_order['order_time'].'</td>
                                  <td><input type="submit" name="update" value="Update"></form></td>
                                  <td><form action="" method="get"><input type="checkbox" name="complete" value="complete">Order Completed <input type="submit" name="order_complete" value="Confirm"></form></td>';
                                        
                            }

                            echo '</tr>';
                            echo ' </tbody>';
                            echo '</table>';
                            if(isset($_POST['instock']) or isset($_POST['expdate']) or isset($_POST['comment'])){
                                $vendor_stock=$_POST['instock'];
				$expdate=$_POST['expdate'];
				$comment=$_POST['comment'];
                              
                              $review_query=mysql_query("UPDATE `order` SET `vendor_stock`='".$vendor_stock."', `expdate`='".$expdate."', `comment`='".$comment."', `status`='".$rev."' WHERE `order_id`='".$order_id."'") or die("Error in query");
                              
                            }
                            if(isset($_GET['complete']) && isset($_GET['order_complete'])){
                              $complete_query=mysql_query("UPDATE `order` SET `status`='".$compl."' where `order_id`='".$order_id."'") or die("Error in query");
                              header("location:index.php");
                            }
                            ?>
                          

                          </div>
</div><!--widgrt body-->

                            </div>
			    
			    
			    
			    <div class="modal hide fade" id="myModal">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				  <h3>Modal header</h3>
							      </div>
				<div class="modal-body">
				  <p>One fine body ...</p>
				</div>
				<div class="modal-footer">
				  <a href="#" class="btn btn-default">Close</a>
				  <a href="#" class="btn btn-primary">Save changes</a>
				</div>
			      </div>
			    
			    
			    <!--widget body>
                            
                            
                            
                            

                       </div>
                </div>



</div>     <!--content end-->
 <?php include("footer.php"); ?>

</div>     <!--container end-->




</body>
</html>