<title>:User's Outbox:</title>
<body bgcolor="skyblue">
<?php
session_start();
require_once('test.php');
include('index.php');
$db=mysql_connect("localhost","root","password");
if(!$db)echo mysql_error();
$select=mysql_select_db("rgukt");
if(!$select)echo mysql_error();
$uname=$_SESSION['user'];
$q1="select * from outbox where uname=\"$uname\" order by time desc;";
$q2=mysql_query("$q1");
if(!$q2)echo mysql_error();
?>
<style>
#table
{
width:1120;
margin:0 0 0 0;
}
#to
{
color:green;
width:150;
background-color:white;
}
#msg
{
background-color:white;
color:green;
border:2;
border-style:double;
}
#time
{
background-color:white;
width:100;
color:green;
}

</style>
<table bgcolor="orange" align="center" id="table"><th>Sent to</th><th>Title</th><th>Time</th></tr>
<?php
while($rr=mysql_fetch_array($q2))
{
?>
<tr>
<td id="to"><b><? echo $rr['to']?></b></td>
<td id="msg"><? echo $rr['subject']; ?></td>
<td id="time"><? echo $rr['time'];?></td>
</tr>
<?php
}
?>

