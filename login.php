<?php
session_start();
if(array_key_exists("submit",$_POST))
{
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	mysql_select_db("rgukt");
	$submit=$_POST['submit'];
	setcookie("uname",$uname);
	require_once('member_check.php');
}
else
{
	if(!isset($_SESSION['user']))
	{
		include("head.php");
	?>
	<style>
	#login-form
	{
		//border:2.5px;
		//padding:2;
		float:right;
		//margin-left:820px;
		margin-top:-250px;
		position-relative:none;
		background-color:#FF6633;
		color:white;
		width:350;
		text-shadow:1px 1px 1px;
		-moz-border-radius:25;
	}
	#login-form td
	{
		width:350;
	}
	#home1
	{
		//border:2px;
		//border-style:solid;
		border-color:skyblue;
		width:200;
		height:200;
		margin-top:30;
		margin-right:390;
		//-moz-box-shadow: 0px 0px 5px red;
	}
	#in-btn1
	{
		background-color:white;
		border:none;
		width:80;
		color:black;
		text-transform:uppercase;
	}
	#in-btn1:hover
	{
		background-color:green;
		border:none;
		width:80;
		color:black;
		text-transform:uppercase;
	}
	#in-btn2
	{
		background-color:IndianRed;
		border:none;
		width:80;
		text-transform:uppercase;
		color:white;
	}
	#in-btn2:hover
	{
		background-color:green;
		border:none;
		width:80;
		text-transform:uppercase;
		color:white;
	}
	#input
	{
		background-color:LightCyan;
		border:none;
		-moz-border-radius:5;
		//width:80;
		//text-transform:lowercase;
		color:black;
		font-family:aerial;
		font-style:bold;
	}
	#leg
	{
		color:white;
		background-color:black;
		width:200;
		-moz-border-radius:5;
	}
	</style>
<?php
{
?><br>
<div id="home1">
<div id="updates"><legend><p id="leg"><b>Latest Updates</b></p></legend>
<marquee direction="up" onmouseover="stop()"onmouseout="start()" title="Latest Updates and Hilights">
<?
	mysql_connect('localhost','root','password')or die("Not Connected to MySQL Server because ".mysql_error());
	mysql_select_db("rgukt");
	$q1="select * from notice order by date";
	$q2=mysql_query($q1)or die(mysql_error());
	echo "<div id=\"menus\"><ul>";
	while($row=mysql_fetch_array($q2))
	{
		echo "<li><a href=\"viewCircular.php?circular=".$row['cid']."\">".$row['title']."</a>,".$row['time']."</li>";
	}
	echo "</ul></div>";
?>
</marquee></div>
</div>
<form action="" method="post">
<br>
<table id="login-form">
<th></th><th></th>
<tr><td style="{background-image:url(images/rgu.png);background-position:center center;background-repeat:no-repeat;}"></td><td><font face="sans-serif" color="white" size="8pt">RGUKTB</font><hr></td></tr>
<tr><td>Username </td><td><input type="text" name="uname" id="input"></td></tr>
<tr><td>Password </td><td><input type="password" name="pass" id="input"></td></tr>
<tr><td></td><td><input type="reset" value="Reset" id="in-btn1">&nbsp;&nbsp;<input type="submit" value="submit" name="submit" id="in-btn2"></td></tr>
<tr><td></td><td><a href="register.php" id="in-link">Register/Sign-Up Here </a></td></tr>
<tr><td></td><td><a href="forgot.php" id="in-link">Forgot Password </a></td></tr>
<tr><td>   </td></tr><tr><td>   </td></tr><tr><td>   </td></tr><tr><td></td></tr>
</form>
</table>
<br></br>
</body>
</html>
<?php
}
}
else
	{
		require_once('head.php');
	}

}
include('template.php');
?>
