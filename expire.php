<?php
//session_start();
$uname=$_SESSION['user'];
mysql_connect("localhost","root","password");
mysql_select_db("rgukt")or die("Database not selected");
require_once('logout.php');
?>
