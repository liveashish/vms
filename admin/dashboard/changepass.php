<?php
ob_start();
session_start();
error_reporting(E_ALL ^ E_NOTICE);
if(!isset($_SESSION['login_user'])){
header("location:../login");
 }
include("../../php_includes/db_config.php");
?>

<form id="changekey" action="" method="post" name="changekey" style="width:600px;margin:auto;">
				    <table>
					 <tr>
					 
						
						<td id="text">Enter the old Password</td>
						<td><input type="password" name="oldkey" /></td>
					   
					 </tr>	
						 
					  <tr>
					        <td id="text">Enter the new Password</td>
					        <td><input type="password" name="newkey1" /></td>
					 </tr>
					  
					 <tr>
						
						 <td id="text">Re-type the new Password</td>
						 <td><input type="password" name="newkey2"/></td>
						 
					 </tr>
					
					
					   <tr><td></td><td>
						<input type="submit" name="changekey" value="Change">
							 </td>
					 </tr>
						
						
						</table>
						</form>


<?php
$user_session=$_SESSION['login_user'];
$new=$_POST['newkey1'];
$oldkey=$_POST['oldkey'];
$newkey1=$_POST['newkey1'];
$newkey2=$_POST['newkey2'];

if(isset($_POST['changekey']))
   {
		if(!empty($oldkey) && !empty($newkey1) && !empty($newkey2))
				   {
							$sql="SELECT password FROM adm_details where username='$user_session'";
							$result=mysql_query($sql) or die("Error in query");
							$row=mysql_fetch_assoc($result);
							$oldkeydb=$row['password'];
							echo "2";
							if ($oldkey==$oldkeydb)
							   {
								if ($newkey1==$newkey2)
								   {
									$sql1 = mysql_query("UPDATE adm_details SET password='$newkey1' WHERE username='$user_session'");
									echo '<p>Your password has been changed.</p><br/>';
									echo '<p>Your new password is ' .$new.'</p>';
								   }//newkey
								 else if($newkey1!=$newkey2)
								   {
									echo '<p>Re-type your passwords correctly.</p>';
							       }
							   }  
							   
							  else{
								 echo '<p>Wrong input in the key fields. Check again!</p>';
								 }
					}
		 else 
		 {echo 'Kindly fill all the fields.';}//!empty
    }
    ob_flush();
						?>