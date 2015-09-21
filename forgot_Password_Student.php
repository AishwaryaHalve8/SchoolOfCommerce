<?php
$hostname_localhost ="localhost";
$database_localhost ="soc";
$username_localhost ="root";
$password_localhost ="";
$localhost = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost)
or
trigger_error(mysql_error(),E_USER_ERROR);

$new_pass=$_POST['npass'];
$reconfirm_pass=$_POST['reconfirm'];
$u_id=$_POST['enroll'];
$u_name=$_POST['u_name'];

if(strcmp($new_pass,$reconfirm_pass)==0)
	{
$query="update admin set password='$reconfirm_pass' where unique_id='$u_id' and user_name='$u_name'";
$query_exec = mysqli_query($localhost, $query);
 
if((mysqli_affected_rows($localhost))==1) { 
			 echo "check user id".mysqli_error($localhost).mysqli_affected_rows($localhost); 
					}
			 else 
				 {
   			 echo "done"; 
					}
	}

else
{
echo "reconfirm password has gone wrong. Please check it again";
}


?>