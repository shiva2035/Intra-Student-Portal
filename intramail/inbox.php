<title>:User's Inbox:</title>
<body bgcolor="gray">
<?php
	session_start();
	include('index.php');
	require_once('test.php');
	$db=mysql_connect("localhost","root","password");
	if(!$db)echo mysql_error();
	$select=mysql_select_db("rgukt");
	if(!$select)echo mysql_error();
	$uname=$_SESSION['user'];
	$q3="select * from inbox where uname=\"$uname\" order by time desc;";
	$q4=mysql_query("$q3");
	if(!$q4)echo mysql_error();
?>
<style>
	#table
	{
		margin:0 0 0 0;
		width:1120;
	}
	#from
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
<script>
function read()
{
alert("The message is$rr['message']");
}
</script>
<table bgcolor="orange" align="center" id="table"><th>Recieved From</th><th>Title</th><th>Time</th></tr>
<?php
while($rr=mysql_fetch_array($q4))
{
?>
<tr>
<td id="from"><b><? echo $rr['from']?></b></td>
<td id="msg"><a href="javascript:read()" id="mail"><? echo $rr['subject']; ?></a></td>
<td id="time"><? echo $rr['time'];?></td>
</tr>
<?php

}

?>
</table>
<br/><br/>
