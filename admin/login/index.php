<?php
ob_start();
session_start();
if(isset($_SESSION['username'])){
header("location:../dashboard");
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
  <title>Vendor Management System</title>
  
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
  <link href="../common/theme/css/style-default.css?1372280973" rel="stylesheet" type="text/css" />
  
  
  <!-- LESS.js Library -->
  <script src="../common/theme/scripts/plugins/system/less.min.js"></script>
</head>
<body class="login ">
  
  <!-- Wrapper -->
<div id="login">

  <div class="container">
  
    <div class="wrapper">
    
      <h1 class="glyphicons lock">VMS <i></i></h1>
    
      <!-- Box -->
      <div class="widget widget-heading-simple widget-body-gray">
        
        <div class="widget-body">
        
          <!-- Form -->
          <form method="post" action="">
            <label>Username or Email</label>
            <input type="text" name="username" class="input-block-level" placeholder="Your Username"/> 
            <label>Password <a class="password" href="#">forgot it?</a></label>
            <input type="password" class="input-block-level margin-none" name="password" placeholder="Your Password" />
            <div class="separator bottom"></div> 
            <div class="row-fluid">
              <div class="span8">
                <div class="uniformjs"><label class="checkbox"><input type="checkbox" value="remember-me">Remember me</label></div>
              </div>
              <div class="span4 center">
              <input type="submit" class="btn btn-block btn-inverse" name="submit">
                
              </div>
            </div>
          </form>
          <!-- // Form END -->
              
        </div>
        <div class="widget-footer">
          <p class="glyphicons restart"><i></i>Please enter your username and password ...</p>
        </div>
      </div>
      <!-- // Box END -->
      <!--
      <div class="innerT center">
      
        <a href="signup.html?lang=en&amp;layout_type=fluid&amp;style=style-default&amp;sidebar=false&amp;top_style=full" class="btn btn-icon-stacked btn-block btn-success glyphicons user_add"><i></i><span>Don't have an account?</span><span class="strong">Sign up</span></a>
        
        <p class="innerT">Alternatively</p>
        <a href="index.html?lang=en&amp;layout_type=fluid&amp;style=style-default&amp;sidebar=false&amp;top_style=full" class="btn btn-icon-stacked btn-block btn-facebook glyphicons facebook"><i></i><span>Join using your</span><span class="strong">Facebook Account</span></a>
        <p>or</p>
        <a href="index.html?lang=en&amp;layout_type=fluid&amp;style=style-default&amp;sidebar=false&amp;top_style=full" class="btn btn-icon-stacked btn-block btn-google glyphicons google_plus"><i></i><span>Join using your</span><span class="strong">Google Account</span></a>
        <p>Having troubles? <a href="faq.html?lang=en&amp;layout_type=fluid&amp;style=style-default&amp;sidebar=false&amp;top_style=full">Get Help</a></p>
      </div>
      -->
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
  <script src="../common/theme/scripts/demo/common.js?1372280973"></script>
  
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
 //error_reporting (E_ALL ^ E_NOTICE); 
 if(isset($_POST['submit'])){
     
 

      $username=strtolower(mysql_real_escape_string(trim($_POST['username'])));
      $password=mysql_real_escape_string(trim($_POST['password']));
    
      
      if(!empty($username) && !empty($password)){
        $query="SELECT * FROM adm_details where username='$username' AND password='$password'";
        $result=mysql_query($query);
        
        if(mysql_num_rows($result)==1){
  session_start();
  $_SESSION['last_login']=$last_login;
  $_SESSION['login_user']=$username;
  $sql=mysql_query("UPDATE adm_details SET last_login=NOW() where username='$username'");
  header("location:../dashboard");
                echo '<div id="notify">
      <p>Authentication Successful! :)</p>
     </div>';
     }
     else echo '<div id="notify">
      <p>You made a boo boo! Wrong Username or Password!</p>
     </div>';

} 
else {echo  '<div id="notify">
      <p>We mean to get all the fields to be filled.</p>
     </div>';}   
}    
ob_end_flush();
?>
