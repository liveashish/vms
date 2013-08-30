<!doctype html>

<html>
<meta charset utf="8">
   <head>
         <style>
            .container{
            	width:960px;
            	margin:0 auto;
            }

            .admin,.vendor{
            	width: 400px;
				float: left;
				text-align: center;
				padding: 20px;
				border: 1px solid #CECECE;
				margin-right: 20px;
				background: rgb(241, 241, 241);
            }
            
            .admin:hover,.vendor:hover{
            	background: rgb(211, 211, 211);
            	border: 1px solid #AFAFAF;
            }
            a{
            	text-decoration: none;
            	color:#555;
            }

             a:hover{
            	
            	color:#666;
            }

            body{
            	font-family: 'Source Sans Pro', sans-serif;
            	color:#555;
            	text-align: center;
            }
         </style>
         <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
   </head>

   <body>
      <div class="container">
      <h1 style="margin-top:120px;margin-bottom:30px;">Welcome to Vendor Managment System</h1>
            <div class="admin">
            <img src="images/admin.png" width="130px">
            <h3><a href="admin/login">Admin Login</a></h3>
            </div>

            <div class="vendor">
            <img src="images/vendor.png" width="130px">
             <h3><a href="vendor/login">Vendor Login</a></h3>
            </div>
      </div>
   </body>
</html>