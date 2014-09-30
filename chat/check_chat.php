<?php
session_start();
//include('index.php');
if(!isset($_SESSION['user']))header('location:index.html');
$uname=$_SESSION['user'];
mysql_connect("localhost","root","password")or die("no database connected");;
mysql_select_db('temp_chat')or die("no table connected");
		$time=mysql_query("select CURTIME()");
		$tm=mysql_result($time,0,0);
		$tmt=$tm[0].$tm[1].$tm[3].$tm[4].$tm[6].$tm[7];
$q2="select * from acc where `to`=\"$uname\";";
//	$tl=($rr['time']+005000);
$q3=mysql_query("$q2");
if(!$q3)echo mysql_error();
while($rr=mysql_fetch_array($q3))
{
	echo $rr['from']." wants to chat with you now".$rr['message'];
if(array_key_exists('accept',$_POST))
{
$s1="delete from acc where `from` = \"".$rr['from']."\"";
$s2=mysql_query($s1);
if(!$s2)echo mysql_error();
header('location:chatboxindi.php');
}
}

?>
