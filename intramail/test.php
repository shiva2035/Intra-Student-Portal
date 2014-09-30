<?php
//session_start();
$uname=$_SESSION['user'];
if(isset($_SESSION['user']))
{
	$qr="insert into logged_in values(\"$uname\",\"yes\");";
	$qr2=mysql_query("$qr");
	//if(!$qr2){echo "ERROR: ".mysql_error();}
}
if(!$_SESSION['user'] || !$_SESSION['pass'])
{
	header('location:../unauth.php');
}
?>
