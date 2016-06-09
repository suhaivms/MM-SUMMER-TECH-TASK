<?php 
error_reporting(1);
$con = mysqli_connect("localhost","root","") or die(mysql_error());
mysqli_select_db("news",$con) or die(mysql_error());
?>