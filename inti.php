<?php
$db_name="soc";
$mysql_name="root";
$mysql_pass="";
$server_name="localhost";

$con=mysqli_connect($server_name,$mysql_name,$mysql_pass,$db_name);
if(!$con)
{
	//echo"connection not established".mysqli_connect_error();
}
else
{
	//echo"connection established".mysqli_connect_error();
}



?>