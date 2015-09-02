<?php
$hostname_localhost ="localhost";
$database_localhost ="soc";
$username_localhost ="root";
$password_localhost ="";
$localhost = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost)
or
trigger_error(mysql_error(),E_USER_ERROR);
 
 
$username = $_POST['login_name'];
$password = $_POST['login_pass'];
$query_search = "select * from admin where user_name = '".$username."' AND password = '".$password. "'";
$query_exec = mysqli_query($localhost, $query_search);
$rows = mysqli_num_rows($query_exec);
//echo $rows;
 if($rows == 0) { 
 echo "No Such User Found"; 
 }
 else  {
    echo "User Found"; 
}
?>
