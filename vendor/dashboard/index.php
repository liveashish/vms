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

<h2>Dashboard <span> Vendor Management System</span></h2>

                <div class="innerLR">

                  <h3 style="margin-bottom: 80px;text-align:center;">Welcome, <?php echo $name; ?></h3>
                    
                      <div class="row-fluid">
                         <div class="icons">
                              <div class="span4" style="text-align: center;text-transform: uppercase;font-weight: bold;">
                                 <div class="orders" style="position: relative;">
                                    <i class="icon-shopping-cart" style="font-size: 150px;"></i>
                                    <a href="totalorders.php" style="display: block;width: 50px;height: 50px;border-radius: 50px;-moz-border-radius: 100px;-webkit-border-radius: 100px;-khtml-border-radius: 100px;font-size: 20px;color: #FFF;line-height: 50px;text-align: center;background: #1377AF;border: 5px solid #f0f0f0;position: absolute;top: 0;right: 30%;">
					<?php
				    $inc="incomplete";
                            $compl="complete";
                            $rev="reviewed";
                            $total_order_query="SELECT * FROM `order` WHERE ((`assign_vendor`='".$name."') AND (`status`='".$inc."' OR `status`='".$rev."' OR `status`='".$compl."'))";
                            $run_sql=mysql_query($total_order_query);
                            echo mysql_num_rows($run_sql);?>
				    </a>
                                 </div>
                                
                                 <h3 style="font-weight: bolder;"><a href="totalorders.php">Total Orders</a></h3>
                              </div>
                                 
                              </div>

                              <div class="span4" style="text-align: center;text-transform: uppercase;font-weight: bold;">
                                <div class="orders" style="position: relative;">
                                    <i class="icon-tasks" style="font-size: 150px;"></i>
                                    <a href="pending_orders.php" style="display: block;width: 50px;height: 50px;border-radius: 50px;-moz-border-radius: 100px;-webkit-border-radius: 100px;-khtml-border-radius: 100px;font-size: 20px;color: #FFF;line-height: 50px;text-align: center;background: #1377AF;border: 5px solid #f0f0f0;position: absolute;top: 0;right: 30%;">
				    <?php
				     $pending_order_query="SELECT * FROM `order` WHERE ((`assign_vendor`='".$name."') AND (`status`='".$inc."' OR `status`='".$rev."'))";
                            $run_sql_pen=mysql_query($pending_order_query);
                            echo mysql_num_rows($run_sql_pen);
				    ?>
				    </a>
                                 </div>
                                 <h3 style="font-weight: bolder;"><a href="pending_orders.php">Pending Orders</a></h3>
                              </div>


                              <div class="span4" style="text-align: center;text-transform: uppercase;font-weight: bold;">
                                 <div class="orders" style="position: relative;">
                                    <i class="icon-check" style="font-size: 150px;"></i>
                                    <a href="completed_orders.php" style="display: block;width: 50px;height: 50px;border-radius: 50px;-moz-border-radius: 100px;-webkit-border-radius: 100px;-khtml-border-radius: 100px;font-size: 20px;color: #FFF;line-height: 50px;text-align: center;background: #1377AF;border: 5px solid #f0f0f0;position: absolute;top: 0;right: 30%;">
				    <?php
				     $completed_order_query="SELECT * FROM `order` WHERE ((`assign_vendor`='".$name."') AND (`status`='".$compl."'))";
                            $run_sql_comp=mysql_query($completed_order_query);
                            echo mysql_num_rows($run_sql_comp);
				    ?></a>
                                 </div>
                                 <h3 style="font-weight: bolder;"><a href="completed_orders.php">Orders Completed</a></h3>
                              </div>
                          

                          </div>

                            

                        <div class="row-fluid" style="margin-top:120px;text;align:center;">
                             <div class="span4" style="float:right;">
                              <h4>Last Login : <?php echo $last_login; ?></h4>
                             </div>
                        </div>


                       </div>
                </div>



</div>     <!--content end-->
 <?php include("footer.php"); ?>

</div>     <!--container end-->




</body>
</html>