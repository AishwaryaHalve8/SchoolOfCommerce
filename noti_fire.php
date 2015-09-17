<?php
$hostname_localhost ="localhost";
$database_localhost ="soc";
$username_localhost ="root";
$password_localhost ="";
$localhost = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost)
or
trigger_error(mysql_error(),E_USER_ERROR);
 
 
$subject = $_POST['subject'];
date_default_timezone_set('Asia/Calcutta');
$link = $_POST['link'];
$date = date('m/d/Y h:i:s a', time());
$des=$_POST['des'];
$name=$_POST['name'];
$query_search = "INSERT INTO notification (description, link, topic, username,date) VALUES ('$_POST[des]','$_POST[link]','$_POST[subject]','$_POST[name]','$date')";
$query_exec = mysqli_query($localhost, $query_search);
if ($query_exec) {
    echo "New notification created successfully";
} else {
    echo "Error: " . $query_search . "<br>" . mysqli_error($localhost);
}