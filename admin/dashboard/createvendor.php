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
    <title>Add Vendor</title>
    
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
    
    <!-- Bootstrap -->
    <link href="../common/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../common/bootstrap/css/responsive.css" rel="stylesheet" type="text/css" />
    
    <!-- Glyphicons Font Icons -->
    <link href="../common/theme/fonts/glyphicons/css/glyphicons.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="../common/theme/fonts/font-awesome/css/font-awesome.min.css">
    <!--[if IE 7]><link rel="stylesheet" href="../common/theme/fonts/font-awesome/css/font-awesome-ie7.min.css"><![endif]-->
    
    <!-- Uniform Pretty Checkboxes -->
    <link href="../common/theme/scripts/plugins/forms/pixelmatrix-uniform/css/uniform.default.css" rel="stylesheet" />
    
    <!-- PrettyPhoto -->
    <link href="../common/theme/scripts/plugins/gallery/prettyphoto/css/prettyPhoto.css" rel="stylesheet" />
    
    <!-- Main Theme Stylesheet :: CSS -->
    <link href="../common/theme/css/style-default.css?1372280974" rel="stylesheet" type="text/css" />
    
    
    <!-- LESS.js Library -->
    <script src="../common/theme/scripts/plugins/system/less.min.js"></script>
    <script>
		$(document).ready(function(){
		  setTimeout(function(){
		  $("div#notify").fadeOut("slow", function () {
		  $("div#notify").remove();
			  });

		}, 5000);
		 });
 
     </script>
     <style>
        #notify{
		width: 100%;
        position: fixed;
		bottom: 0px;
		z-index: 1000;
		background-color: #4a8bc2;
		color: #1c1c1c;
        
		
		}
		
		#notify p{
		width: 1000px;
                margin: auto;
                padding: 10px;
                text-align: center;
                font-size: 15px;
                color: #fff;
		}
     </style>
</head>
<body class="login ">
    
    <!-- Wrapper -->
<div id="login">

    <div class="wrapper signup">
        
            <h1 class="glyphicons user_add">Add Vendor <i></i></h1>
        
            <!-- Box -->
            <div class="widget widget-heading-simple">
                
                <div class="widget-head" style="margin-bottom:10px;">
                    <h3 class="heading">Create Vendor Account</h3>
                    
                </div>
                <div class="widget-body">
        
                    <!-- Form -->
                    <form method="post" name="vendor" action="" method="post" enctype="multipart/form-data">
                    
                    <!-- Row -->
                    <div class="row-fluid row-merge">
                    
                        <!-- Column -->
                        <div class="span6">
                            <div class="innerR">
                                <label class="strong">Vendor Name</label>
                                <input type="text" name="vendorname" class="input-block-level" placeholder="vendor username"/>
                                <label class="strong" >Vendor id</label>
                                <input type="text" name="vendorcode" class="input-block-level" placeholder="vendor id"/>
                                <label class="strong">Password</label>
                                <input type="password" class="input-block-level" name="password" placeholder="Your Password"/>
                                <label class="strong">Confirm Password</label>
                                <input type="password" class="input-block-level" name="repass" placeholder="Confirm Password"/>
                            </div>
                        </div>
                        <!-- // Column END -->
                        
                        <!-- Column -->
                        <div class="span6">
                            <div class="innerL">
                                 <label class="strong">Category</label>
                                 <select name="vendorcat">
                        <option value="default">--Select Craft Type--</option>
                        <option value="1">Paper Machie</option>
                        <option value="2">Carpet & Rugs</option>
                        <option value="3">Shawl, Stole & Jackets</option>
                        <option value="4">Bedsheet, Pillow Cover & Bed Cover
</option>
                        <option value="5">Garments</option>
                        <option value="6">Wallnut Wood Box
</option>
                        <option value="7">Kashmiri Furniture</option>
                        <option value="8">Silverware</option>
                        <option value="9">Gold Platted Utensil
</option>
                        <option value="10">Leather Products</option>
                        <option value="11">Bronzeware</option>
                        <option value="12">Brassware</option>
                        <option value="13">Glassware</option>
                        <option value="14">Marble Crafts</option>
                        <option value="15">Wooden Crafts</option>
                        <option value="16">Sarees</option>
                        <option value="17">Silver Filegree</option>
                        <option value="18">Dokra</option>
                        <option value="19">Stone Work</option>
                        <option value="20">Chandanwood Craft</option>
                    </select>
                                <label class="strong">Email</label>
                                <input type="text" name="email" class="input-block-level" placeholder="Your Email Address"/>
                                <label class="strong">Confirm Email</label>
                                <input type="text" name="email" class="input-block-level" placeholder="Confirm Your Email Address"/>
                                <input type="submit" name="submit" class="btn btn-icon-stacked btn-block btn-success" value="Create Account" />
                                
                                

                            </div>

                        </div>
                        <!-- // Column END -->
                        
                    </div>
                    <!-- // Row END -->
                    
                    </form>
                    <!-- // Form END -->
           
        
                </div>
                <!-- // Box END -->
                <span style="float:right;margin-top:30px;"><a href="index.php" class="btn btn-default btn-icon glyphicons left_arrow"><i></i>Back to Dashborad</a></span>
            </div>
            
    </div>
    
</div>
<!-- // Wrapper END --> 

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
    
    
    <!-- Modernizr -->
    <script src="../common/theme/scripts/plugins/system/modernizr.js"></script>
    
    <!-- Bootstrap -->
    <script src="../common/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- SlimScroll Plugin -->
    <script src="../common/theme/scripts/plugins/other/jquery-slimScroll/jquery.slimscroll.min.js"></script>
    
    <!-- Common Demo Script -->
    <script src="../common/theme/scripts/demo/common.js?1372280974"></script>
    
    <!-- Holder Plugin -->
    <script src="../common/theme/scripts/plugins/other/holder/holder.js"></script>
    <script>
        Holder.add_theme("dark", {background:"#000", foreground:"#aaa", size:9});
        Holder.add_theme("white", {background:"#fff", foreground:"#c9c9c9", size:9});
    </script>
    
    <!-- Uniform Forms Plugin -->
    <script src="../common/theme/scripts/plugins/forms/pixelmatrix-uniform/jquery.uniform.min.js"></script>

    
    
</body>
</html>

<?php
include("../../php_includes/db_config.php");
$vendorname=$_POST["vendorname"];
$vendorcode="ven-".$_POST["vendorcode"];
$vendoremail=$_POST["email"];
$vendorcat=$_POST['vendorcat'];
$password=$_POST["password"];
$repass=$_POST["repass"];
$add_query=mysql_query("SELECT * from vendor_details WHERE vendorcode='$vendorcode'");
if(isset($_POST["submit"]) && ($password==$repass)){
    
    if(mysql_num_rows($add_query) ==0){
    $sql=mysql_query("INSERT into vendor_details(vendor_id, vendorname, vendorcode, vendoremail, vendorpass, lastlogin, rating, vendor_cat, achievement) values('','$vendorname', '$vendorcode', '$vendoremail', SHA('$password'), '', '', '$vendorcat','')") or die("Error query");
    echo '<div id="notify"><p>Vendor Added</p></div>';
    }
    else echo '<div id="notify"><p>Code has been used.</p></div>';
}
elseif(isset($_POST['submit'])){
    echo '<div id="notify"><p>Please fill all the fields properly!</p></div>';
}
 
 
?>