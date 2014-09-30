<?php 
session_start();
//include('index.php');
if(!(isset($_SESSION['user'])))header('location:index.html');
if(array_key_exists('chatuser',$_POST))
{
$uname1=$_SESSION['user'];
$uname2=$_POST['chatuser'];
$time=time('i:h:s');
$form="<form action=\"check_chat.php\" method=\"post\"><input type=\"submit\" value=\"accept-invitation\" name=\"accept\"></form>";
$q1=mysql_connect("localhost","root","password");if(!$q1)echo mysql_error();
$q2="create database temp_chat";
$q3=mysql_query("$q2");if(!$q3)/*//echo mysql_error();*/mysql_select_db("temp_chat");
$q4="create table acc(to varchar(100),message varchar(100),from varchar(100),time varchar(10))";
$q5=mysql_query("$q4");

$time=mysql_query("select CURTIME()");
$tm=mysql_result($time,0,0);
$tmt=$tm[0].$tm[1].$tm[3].$tm[4].$tm[6].$tm[7];


$q6="insert into acc values('$uname2','$form','$uname1','$tmt');";
$q7=mysql_query("$q6");if(!$q6)echo mysql_error();
if(!$q5)echo mysql_error();
}
echo "<b><center>Your Request Sent to user. Please wait Until he accepts your request!";
//require_once('check_chat.php');
if(!isset($_SESSION['user']))header('location:index.html');
$uname1=$_SESSION['user'];
$uname2=$_POST['chatuser'];
//echo $uname2;
$chtflnm1="chat/".$uname2.$uname1.".dat";
$chtflnm2="chat/".$uname1.$uname2.".dat";

$finalfl="";
if(file_exists($chtflnm1))
$finalfl=$chtflnm1;

if(file_exists($chtflnm2))
$finalfl=$chtflnm2;

if((!file_exists($chtflnm1)) && (!file_exists($chtflnm2)))
$finalfl=$chtflnm1;
fopen($finalfl,"a+");
$_SESSION["chatfile"]=$finalfl;
header('location:chatboxindi.php');
?>
