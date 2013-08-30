<?php 
session_start();
if(!isset($_SESSION['login_user'])){
  header("location:../login/");
}
//error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 fluid top-full"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 fluid top-full sticky-top"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 fluid top-full sticky-top"> <![endif]-->
<!--[if gt IE 8]> <html class="ie gt-ie8 fluid top-full sticky-top"> <![endif]-->
<!--[if !IE]><!--><html class="fluid top-full sticky-top"><!-- <![endif]-->
<head>
  <title>Add Product</title>
  
   <?php include("head_elements.php"); ?>
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
<body class="">
  
    <!-- Main Container Fluid -->
  <div class="container-fluid fluid menu-left">
    
        
    <!-- Content -->
    <div id="content">
    
        <?php include("topnav.php"); ?>
        
  <ul class="breadcrumb">
  <li>You are here</li>
  <li><a href="#" class="glyphicons dashboard"><i></i> Quick Admin</a></li>
  <li class="divider"></li>
  <li>Add product</li>
</ul>

<!-- Heading -->
<div class="heading-buttons">
  <h3>Add product <span>VMS</span></h3>
  <div class="buttons pull-right">
    <a href="index.php" class="btn btn-default btn-icon glyphicons left_arrow"><i></i> Back to Dashboard</a>
  </div>
  <div class="clearfix"></div>
</div>
<div class="separator bottom"></div>
<!-- // Heading END -->

<div class="innerLR">

  

         <form name="createitem" method="post" action="" enctype="multipart/form-data">




         <div class="widget widget-heading-simple widget-body-white">
    
    <div class="widget-body">
    
      

       <div class="row-fluid">

      <div class="span4">
              <label for="inputTitle">Title</label>
              <input type="text" id="inputTitle" name="itemname" class="span8" value="" placeholder="Enter product title">
              <div class="separator"></div>
            </div>


            <div class="span4">
              <label for="inputTitle">Code</label>
              <input type="text" id="inputTitle" class="span8" name="itemcode" value="" placeholder="Enter product code">
              <div class="separator"></div>
            </div>



            <div class="span4">
                 <label for="inputTitle">Select a photo(2 MB Max.)</label>
                      <div class="fileupload fileupload-new margin-none" data-provides="fileupload"><input type="hidden"><input type="hidden">
              <div class="input-append">
              
                <div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div><span class="btn btn-default btn-file"><span class="fileupload-new">Select file</span><span class="fileupload-exists">Change</span><input type="file" name="itempic" class="margin-none"></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
              </div>
          </div>  
            
          </div>


       </div> <!--row fluid end-->




        <div class="row-fluid">

         <div class="span4">
              <label for="inputTitle">Length</label>
              <input type="text" id="inputTitle" name="itemlength" class="span8" value="" placeholder="Enter product Length">
              <div class="separator"></div>
            </div>

          <div class="span4">
              <label for="inputTitle">Width</label>
              <input type="text" id="inputTitle" name="itemwidth" class="span8" value="" placeholder="Enter product Width">
              <div class="separator"></div>
            </div>


           <div class="span4">
              <label for="inputTitle">Breadth</label>
              <input type="text" id="inputTitle" name="itembreadth" class="span8" value="" placeholder="Enter product Breadth">
              <div class="separator"></div>
            </div>



        </div> <!--row fluid end-->

   


           <div class="row-fluid">


            <div class="span4">
              <label for="inputTitle">Height</label>
              <input type="text" id="inputTitle" name="itemheight" class="span8" value="" placeholder="Enter product Height">
              <div class="separator"></div>
            </div>




            <div class="input-prepend input-append span4">
            <label for="inputTitle">Price</label>
          
            <span class="add-on">₹</span>
              <input id="appendedPrependedInput" type="text" name="itemprice" placeholder="Enter Price">
            <span class="add-on">.00</span>
                                        </div>

          

             <div class="span4">
             <label for="inputTitle">Stock Position</label>
                    <div class="uniformjs collapse in span4">
                    <label class="radio">
                      <span class=""><div class="radio" id="uniform-undefined"><span><input type="radio" class="radio" name="itemstock" value="1" style="opacity: 0;"></span></div></span>Available
                    </label><br>
                    <label class="radio">
                     <span class="checked"><div class="radio" id="uniform-undefined"><span><input type="radio" class="radio" name="itemstock" value="0" style="opacity: 0;"></span></div></span>Not Avialable
                    
                    
                  </label></div>
              </div>


           </div> <!--row fluid end-->






             <div class="row-fluid">
             
               <div class="span4">
                 <div class="input-prepend input-append span8">
                <label for="inputTitle">Available Stock</label>
              
                <input type="text" id="inputTitle" class="span12" name="availstock" value="" placeholder="Enter Available Stock">
                                            </div>
                </div>



               <div class="span4">
                 <div class="input-prepend input-append span8">


                    <label for="inputTitle">Craft Type</label>
                  
                    <select name="crafttype">
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
                      </div>
                 </div>

           </div> <!--row fluid end-->













             
    </div>
  </div>


              <!-- Bottom buttons -->
              <div class="heading-buttons">
                <div class="buttons pull-right" style="margin: 0;">
                  
                  <input class="btn btn-primary btn-icon glyphicons ok_2" type="submit" name="submit" value="Create Item">

                  
                </div>
                <div class="clearfix"></div>
              </div>
              <!-- // Bottom buttons END -->

  </form>

  
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
  <script src="../common/theme/scripts/demo/common.js?1372280984"></script>
  
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
<?php
include("../../php_includes/db_config.php");

if(isset($_POST["submit"])){
$itemcode=$_POST["itemcode"];
$itemname=$_POST["itemname"];
$itemprice=$_POST["itemprice"]; 
$itemlength=$_POST["itemlength"];
$itemwidth=$_POST["itemwidth"];
$itembreadth=$_POST["itembreadth"];
$itemheight=$_POST["itemheight"];
$crafttype=$_POST["crafttype"];
$itemstock=$_POST["itemstock"];
$availstock=$_POST["availstock"];
$ip=$_SERVER["REMOTE_ADDR"];

$allowedExts=array("jpeg","jpg","png");
$temp=explode(".", $_FILES["itempic"]["name"]);
$extension=end($temp);
if ((($_FILES["itempic"]["type"] == "image/jpeg")
|| ($_FILES["itempic"]["type"] == "image/jpg")
|| ($_FILES["itempic"]["type"] == "image/pjpeg")
|| ($_FILES["itempic"]["type"] == "image/x-png")
|| ($_FILES["itempic"]["type"] == "image/png"))
&& ($_FILES["itempic"]["size"] < 2000000)
&& in_array($extension, $allowedExts))
  {
    if ($_FILES["itempic"]["error"] > 0)
    {
    echo "Error: " . $_FILES["itempic"]["error"] . "<br>";
    }
  else
    {
    
    if (file_exists("upload/" . $_FILES["itempic"]["name"]))
      {
      echo $_FILES["itempic"]["name"] . '<div id="notify"><p>Image File name already exists.</p></div>';
      }
    else
      {
      move_uploaded_file($_FILES["itempic"]["tmp_name"],
      "upload/" . $_FILES["itempic"]["name"]);
      //echo "Stored in: " . "../dashboard/upload/" . $_FILES["itempic"]["name"];
      $image_addr="http://localhost/vms2/admin/dashboard/upload/" . $_FILES["itempic"]["name"];
      //echo $image_addr;
      $sql=mysql_query("INSERT into item(item_id, item_code, item_name, price, length, breadth, width, height, craft_type, stock_position,availstock, item_image, item_barcode) values('','$itemcode','$itemname', '$itemprice','$itemlength','$itemwidth', '$itembreadth','$itemheight', '$crafttype', '$itemstock','$availstock', '$image_addr','')");
      echo '<div id="notify"><p>Item Created.</p></div>';
      }
    }
  }
else
  {
  echo '<div id="notify"><p>Invalid Image File!</p></div>';
  }
}
?>