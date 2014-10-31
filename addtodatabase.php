<?php
$longi = $_GET['longi'];
$lat = $_GET['lat'];
$date = time();
require_once 'login.php';
$db_server = mysql_connect($hostname, $username, $password) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());
$query = "INSERT INTO locations VALUES($lat,'',$longi, $date)";
mysql_query($query);
mysql_close();
?>
