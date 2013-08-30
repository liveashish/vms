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
	<li><a href="#" class="glyphicons dashboard"><i></i> Quick Admin</a></li>
	<li class="divider"></li>
	<li>Dashboard</li>
	<li class="pull-right hidden-phone"><a href="" class="glyphicons shield">Get Help<i></i></a></li>
	<li class="pull-right hidden-phone divider"></li>
	<li class="pull-right hidden-phone"><a href="" class="glyphicons adjust_alt">Filter<i></i></a></li>
</ul>

<h2>Dashboard <span> Vendor Management System</span></h2>
<div class="innerLR">

	<div class="row-fluid">
		 <div class="icons">
              <div class="span4" style="text-align: center;text-transform: uppercase;font-weight: bold;">
                 <i class="icon-shopping-cart" style="font-size: 120px;"></i>
                 <h3 style="font-weight: bolder;"><a href="createtask.php">Make Order</a></h3>
              </div>

              <div class="span4" style="text-align: center;text-transform: uppercase;font-weight: bold;">
                 <i class="icon-list-ul" style="font-size: 120px;"></i>
                 <h3 style="font-weight: bolder;"><a href="createitem.php">Add Items</a></h3>
              </div>


              <div class="span4" style="text-align: center;text-transform: uppercase;font-weight: bold;">
                 <i class="icon-user" style="font-size: 120px;"></i>
                 <h3 style="font-weight: bolder;"><a href="createvendor.php">Add Vendor</a></h3>
              </div>
          

          </div>
       </div>



        <div class="row-fluid" style="margin-top:20px;">
		 <div class="icons">
              <div class="span4" style="text-align: center;text-transform: uppercase;font-weight: bold;">
                 <i class="icon-truck" style="font-size: 120px;"></i>
                 <h3 style="font-weight: bolder;"><a href="createtask.php">Track Order</a></h3>
              </div>

              <div class="span4" style="text-align: center;text-transform: uppercase;font-weight: bold;">
                 <i class="icon-barcode" style="font-size: 120px;"></i>
                 <h3 style="font-weight: bolder;"><a href="barcode">Print Barcode</a></h3>
              </div>


              <div class="span4" style="text-align: center;text-transform: uppercase;font-weight: bold;">
                 <i class="icon-print" style="font-size: 120px;"></i>
                 <h3 style="font-weight: bolder;"><a href="report.php">Report</a></h3>
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

	<!-- Modal Gallery -->
	<div id="modal-gallery" class="modal modal-gallery hide fade hidden-print" tabindex="-1">
	    <div class="modal-header">
	        <a class="close" data-dismiss="modal">&times;</a>
	        <h3 class="modal-title"></h3>
	    </div>
	    <div class="modal-body"><div class="modal-image"></div></div>
	    <div class="modal-footer">
	        <a class="btn btn-primary modal-next">Next <i class="icon-arrow-right icon-white"></i></a>
	        <a class="btn btn-info modal-prev"><i class="icon-arrow-left icon-white"></i> Previous</a>
	        <a class="btn btn-success modal-play modal-slideshow" data-slideshow="5000"><i class="icon-play icon-white"></i> Slideshow</a>
	        <a class="btn modal-download" target="_blank"><i class="icon-download"></i> Download</a>
	    </div>
	</div>
	<!-- // Modal Gallery END -->
	
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
	<script src="../common/theme/scripts/demo/common.js?1372280934"></script>
	
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
	
	<!-- Dashboard Demo Script -->
	<script src="../common/theme/scripts/demo/index.js?1372280934"></script>
	
	
	<!-- Google JSAPI -->
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		
	<!--  Flot Charts Plugin -->
	<script src="../common/theme/scripts/plugins/charts/flot/jquery.flot.js"></script>
	<script src="../common/theme/scripts/plugins/charts/flot/jquery.flot.pie.js"></script>
	<script src="../common/theme/scripts/plugins/charts/flot/jquery.flot.tooltip.js"></script>
	<script src="../common/theme/scripts/plugins/charts/flot/jquery.flot.selection.js"></script>
	<script src="../common/theme/scripts/plugins/charts/flot/jquery.flot.resize.js"></script>
	<script src="../common/theme/scripts/plugins/charts/flot/jquery.flot.orderBars.js"></script>
	
	<!-- Charts Helper Demo Script -->
	<script src="../common/theme/scripts/demo/charts.helper.js?1372280934"></script>
	
	
	<!-- Bootstrap Image Gallery -->
	<script src="http://blueimp.github.com/JavaScript-Load-Image/load-image.min.js"></script>
	<script src="../common/bootstrap/extend/bootstrap-image-gallery/js/bootstrap-image-gallery.min.js" type="text/javascript"></script>

</body>
</html>