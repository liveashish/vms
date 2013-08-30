<?php 
session_start();
if(!isset($_SESSION['login_user'])){
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
    <title>Make Order</title>
    
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
    <li><a href="index.php" class="glyphicons dashboard"><i></i> Quick Admin</a></li>
    <li class="divider"></li>
    <li>Make Order</li>
</ul>

<h3>Search</h3>
<div class="innerLR">

    <div class="row-fluid">
        <div class="span12">
        
            <div class="widget widget-tabs">
                <div class="widget-head">
                    <ul>
                        
                        <li><a href="#search-users" data-toggle="tab">Search Item</a></li>
                        <li><a href="#search-media" data-toggle="tab">Order Status</a></li>
                        
                    </ul>
                </div>
                <div class="widget-body">
                    <div class="tab-content">
                    
                        
                        <div class="tab-pane" id="search-media">
                            
                        </div>




                        
                        <div class="tab-pane active" id="search-users">
                                          <div class="widget widget-heading-simple widget-body-simple text-right">
                                <form name="task" action="" method="post" class="form-search">
                                    <input type="text" name="itemcode" class="input-large" placeholder="Type Item code here .. " />
                                    <button type="submit" type="submit" name="submit" class="btn btn-inverse">Search</button>
                                </form>

                            </div>
                            <div class="widget widget-heading-simple widget-body-white margin-none">
                                <div class="widget-body">
                                    <h5 class="text-uppercase strong">Search results</h5>
                                    <hr class="separator" />

                                    
                                <?php
                                if(isset($_POST['submit'])){
                                include("../../php_includes/db_config.php");
                                $itemcode=$_POST['itemcode'];
                                $_SESSION['itemcode']=$itemcode;

                                $search_craft=mysql_query("SELECT craft_type from item where item_code='$itemcode' ");
                                while($row_cat=mysql_fetch_array($search_craft)){
                                $item_cat=$row_cat['craft_type'];
                                }
                                
                                $vendor_query=mysql_query("SELECT distinct vendorname from vendor_details, item where (vendor_details.vendor_cat='$item_cat')");
                                echo '<form name="order" action="action.php" method="post">';

                                echo    '   <table class="table table-vertical-center">
                                        <thead>
                                            <tr>
                                                <th class="center">Photo</th>
                                                <th class="center">Item Code</th>
                                                <th class="center">Name</th>
                                                <th class="center">Dimensions</th>
                                                <th class="center">Price</th>
                                                <th class="center">Availability</th>
                                                <th class="center">Assign Vendor</th>
                                                <th class="center">Order Quantity</th>
                                                <th class="center">Delivery</th>
                                                <th class="center">Order</th>
                                            </tr>
                                        </thead>';
                                    echo    '<tbody>';
                                        $search_item=mysql_query("SELECT * from item where item_code='$itemcode'LIMIT 1") or die("Error");
                                        while($row=mysql_fetch_array($search_item)){

                                        echo'   <tr>
                                                <td class="center"><a href="#myModal" data-toggle="modal" class="btn btn-primary"><img src="'.$row['item_image'].'" height="40px" width="40px"></img></a></td>
                                                <td class="strong center">'.$row['item_code'].'</td>
                                                <td class="center">'.$row['item_name'].'</td>
                                                <td class="center"><span class="btn btn-inverse" data-toggle="popover" data-title="Dimensions" data-content="'.$row['length'].'- L | '.$row['breadth'].'-B |'.$row['width'].'-W | '.$row['height'].'-H " data-placement="top">Click</span></td>
                                                <td class="center"><strong>INR</strong>'.$row['price'].'</td>
                                                <td class="center"><span class="label label-success">'.$row['availstock'].'</span></td>
                                                <td class="center"><select name="assign_vendor"><option value="default">--Select a vendor--</option>';
                                                        while($vendor_row=mysql_fetch_array($vendor_query)){
                                                            echo '<option value="';
                                                            $vname=$vendor_row['vendorname'];
                                                            echo $vname.'">'; 
                                                            echo $vname.'</option>';
                                                            
                                                            
                                                        }
            
                                                 echo '</select></td>
 
                                                <td class="center"><input type="text" name="stockorder"></td>
                                                 <td><input type="date" name="delivery"></td>
                                                 <td class="center"><input type="submit" class="btn btn-block btn-primary" name="order"></td>

                                                 


                                                 
                                            </tr>
                                            
                                        </tbody>
                                      </table>
                                    </form>';
                                
                                    
                                    
                                              
                                           echo '<div class="modal hide fade" id="myModal">
                                                          <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h3>'.$row['item_name'].'</h3>
                                                             
                                                          </div>
                                                          <div class="modal-body">
                                                            <p><img src="'.$row['item_image'].'"></img></p>
                                                          </div>
                                                          <div class="modal-footer">
                                                            
                                                          </div>
                                              </div> ';
}}?>
                                    <hr class="separator" />
                                    <div class="pagination margin-none">
                                        <ul>
                                            <li class="disabled"><a href="#">&lt;</a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">&gt;</a></li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                        





                    </div>
                </div>
            </div>
            
        </div>
        
    </div>  
</div>  
    
        
        </div>
        <!-- // Content END -->
        <?php include("footer.php"); ?>
       
    </div>
    <!-- // Main Container Fluid END -->
    

<!-- Themer -->
<div id="themer" class="collapse">
    <div class="wrapper">
        <span class="close2">&times; close</span>
        <h4>Themer <span>color options</span></h4>
        <ul>
            <li>Theme: <select id="themer-theme" class="pull-right"></select><div class="clearfix"></div></li>
            <li>Primary Color: <input type="text" data-type="minicolors" data-default="#ffffff" data-slider="hue" data-textfield="false" data-position="left" id="themer-primary-cp" /><div class="clearfix"></div></li>
            <li>
                <span class="link" id="themer-custom-reset">reset theme</span>
                <span class="pull-right"><label>advanced <input type="checkbox" value="1" id="themer-advanced-toggle" /></label></span>
            </li>
        </ul>
        <div id="themer-getcode" class="hide">
            <hr class="separator" />
            <button class="btn btn-primary btn-small pull-right btn-icon glyphicons download" id="themer-getcode-less"><i></i>Get LESS</button>
            <button class="btn btn-inverse btn-small pull-right btn-icon glyphicons download" id="themer-getcode-css"><i></i>Get CSS</button>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- // Themer END -->

    <!-- JQuery -->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    
    <!-- Code Beautify -->
    <script src="../common/theme/scripts/plugins/other/js-beautify/beautify.js"></script>
    <script src="../common/theme/scripts/plugins/other/js-beautify/beautify-html.js"></script>
    
    <!-- PrettyPhoto -->
    <script src="../common/theme/scripts/plugins/gallery/prettyphoto/js/jquery.prettyPhoto.js"></script>
    
    <!-- Global -->
    <script>
    var basePath = '',
        commonPath = '../common/';
    </script>
    
    <!-- JQueryUI -->
    <script src="../common/theme/scripts/plugins/system/jquery-ui/js/jquery-ui-1.9.2.custom.min.js"></script>
    
    <!-- JQueryUI Touch Punch -->
    <!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
    <script src="../common/theme/scripts/plugins/system/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    
    
    <!-- Modernizr -->
    <script src="../common/theme/scripts/plugins/system/modernizr.js"></script>
    
    <!-- Bootstrap -->
    <script src="../common/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- SlimScroll Plugin -->
    <script src="../common/theme/scripts/plugins/other/jquery-slimScroll/jquery.slimscroll.min.js"></script>
    
    <!-- Common Demo Script -->
    <script src="../common/theme/scripts/demo/common.js?1372280968"></script>
    
    <!-- Holder Plugin -->
    <script src="../common/theme/scripts/plugins/other/holder/holder.js"></script>
    <script>
        Holder.add_theme("dark", {background:"#000", foreground:"#aaa", size:9});
        Holder.add_theme("white", {background:"#fff", foreground:"#c9c9c9", size:9});
    </script>
    
    <!-- Uniform Forms Plugin -->
    <script src="../common/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js"></script>

    <!-- Bootstrap Extended -->
    <script src="../common/bootstrap/extend/bootstrap-select/bootstrap-select.js"></script>
    <script src="../common/bootstrap/extend/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
    <script src="../common/bootstrap/extend/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"></script>
    <script src="../common/bootstrap/extend/jasny-fileupload/js/bootstrap-fileupload.js"></script>
    <script src="../common/bootstrap/extend/bootbox.js"></script>
    <script src="../common/bootstrap/extend/bootstrap-wysihtml5/js/wysihtml5-0.3.0_rc2.min.js"></script>
    <script src="../common/bootstrap/extend/bootstrap-wysihtml5/js/bootstrap-wysihtml5-0.0.2.js"></script>
    
    <!-- Google Code Prettify -->
    <script src="../common/theme/scripts/plugins/other/google-code-prettify/prettify.js"></script>
    
    <!-- Gritter Notifications Plugin -->
    <script src="../common/theme/scripts/plugins/notifications/Gritter/js/jquery.gritter.min.js"></script>
    
    <!-- Notyfy Notifications Plugin -->
    <script src="../common/theme/scripts/plugins/notifications/notyfy/jquery.notyfy.js"></script>
    
    <!-- MiniColors Plugin -->
    <script src="../common/theme/scripts/plugins/color/jquery-miniColors/jquery.miniColors.js"></script>
    
    <!-- DateTimePicker Plugin -->
    <script src="../common/theme/scripts/plugins/forms/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Cookie Plugin -->
    <script src="../common/theme/scripts/plugins/system/jquery.cookie.js"></script>
    
    <!-- Colors -->
    <script>
    var primaryColor = '#4a8bc2',
        dangerColor = '#b55151',
        successColor = '#609450',
        warningColor = '#ab7a4b',
        inverseColor = '#45484d';
    </script>
    
    <!-- Themer -->
    <script>
    var themerPrimaryColor = primaryColor;
    </script>
    <script src="../common/theme/scripts/demo/themer.js"></script>
    
    <!-- Twitter Feed -->
    <script src="../common/theme/scripts/demo/twitter.js"></script>
    
    <!-- Easy-pie Plugin -->
    <script src="../common/theme/scripts/plugins/charts/easy-pie/jquery.easy-pie-chart.js"></script>
    
    <!-- Sparkline Charts Plugin -->
    <script src="../common/theme/scripts/plugins/charts/sparkline/jquery.sparkline.min.js"></script>
    
    <!-- Ba-Resize Plugin -->
    <script src="../common/theme/scripts/plugins/other/jquery.ba-resize.js"></script>
    
    
    
</body>
</html>