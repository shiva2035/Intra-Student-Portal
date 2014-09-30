<?php
//session_start();
$uname=$_SESSION['user'];
if(!$_SESSION['user'] || !$_SESSION['pass'])
{
	require_once('logout.php');
	session_destroy();
	header('location:unauth.php');
}
?>
