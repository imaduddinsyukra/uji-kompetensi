<?php
$host="localhost";
$user="root";
$pass="";
$database="uk";

$conn =mysql_connect($host, $user, $pass, $database);
mysql_select_db($database,$conn);
?>