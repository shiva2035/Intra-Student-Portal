<?php
session_start();
$uname=$_SESSION['user'];

$logout=session_destroy();
if($logout)
{
mysql_connect("localhost","root","password");
mysql_select_db("rgukt");
$qu="delete from logged_in where uname=\"$uname\"";
$qu2=mysql_query("$qu");
if(!$qu2){echo mysql_error();}
header("location:login.php");
}
?>
