<?php
$hostname_localhost ="localhost";
$database_localhost ="soc";
$username_localhost ="root";
$password_localhost ="";
$localhost = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost)
or
trigger_error(mysql_error(),E_USER_ERROR);

$new_email_id=$_POST['email_id'];
$name=$_POST['name'];


$query="update admin set email_id='$new_email_id' where user_name='$name'";
$query_exec = mysqli_query($localhost, $query);
 
if((mysqli_affected_rows($localhost))<0) { 
			echo mysqli_error($localhost);
				  
					}
			 else 
				 {
				echo "done";
   			  	}
	




?>