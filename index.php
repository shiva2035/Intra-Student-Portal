<?php
session_start();
require_once('head.php');
?>
<style>
#menus
{
	list-style:none;
	color:green;
}
#menus a
{
	font-weight:bold;
	align:center;
}
#menus a:hover
{
	border-style:double;
	list-style:none;
	color:green;
	background-color:white;
}

#home
{
	border:4px;
	border-style:groove;
	border-color:skyblue;
	width:200;
	height:200;
	color:black;
}
#home1
{
	border:4px;
	//float:left;
	border-style:groove;
	border-color:skyblue;
	width:300;
	height:200;
	color:black;
}
#updates
{
	width:300;
	height:200;
	margin-top:30;
	//margin-right:390;
	margin-bottom:50;
}
#leg
{
	color:white;
	background-color:orange;
	width:250;
	border:2;
	border-style:solid;
}
nav
{
	background-color:green;
	color:white;
}
nav:active
{
	background-color:green;
	color:white;
}
nav:hover:
{
	background-color:green;
	color:white;
}
nav:visited
{
	background-color:green;
	color:white;
}
</style>
<table border=0.2>
<tr>
<td width = 200><div id="updates"><legend><p id="leg"><b>Latest Updates</b></p></legend>
<marquee direction="up" onmouseover="stop()"onmouseout="start()" title="Latest Updates and Hilights">
<?
	mysql_connect('localhost','root','password')or die("Not Connected to MySQL Server because ".mysql_error());
	mysql_select_db("rgukt");
	$q1="select * from notice order by cid desc";
	$q2=mysql_query($q1)or die(mysql_error());
	echo "<div id=\"menus\"><ul>";
	while($row=mysql_fetch_array($q2))
	{
		$date = date("d",strtotime($row['date']))."/".date("m",strtotime($row['date']))."/".date("y",strtotime($row['date']));
		echo "<li><font size=2><a href=\"viewCircular.php?circular=".$row['cid']."\">".$row['title']."</a></font><br><font size=1.5>".$date.",".$row['time']."</li>";
	}
	echo "</ul></div>";
?>
</marquee></div></td>

<td width = 600><div id="menus"><legend><p id="leg"><b>Quick Links/Archives</b></p></legend>
	<ul style="{background-color:white;}">
	<li> <a href="stuinfo.php">Student Information</a></li>
	<li> <a href="intramail/inbox.php">Inbox</a></li>
	<li> <a href="confess.php?disp=profile">Confessions and Complements</a></li>
	<li> <a href="forum.php">Discussion Forum</a></li>
	<li> <a href="academics.php">Academic Results</a></li>
	<li> <a href="attendence.php">Attendence Report of Total Campus</a></li>
	<li> <a href="upload.php">File Sharing System</a></li>
	<li> <a href="vote.php">Survey</a></li><ul>
</div></td>

<td><div id="updates"><legend><p id="leg"><b>Photo Gallery</b></p></legend>
<marquee direction="left" onmouseover="stop()"onmouseout="start()" title="Latest Updates and Hilights">
<?
	$dir = scandir("profile-face/");
	foreach($dir as $im)
	{
		if(!(is_dir("profile-face/".$im)))
		echo "<img width=200 height=200 src=\"profile-face/$im\"></img>";
	}
?>
</marquee></div></td>

</tr></table>
<br/><br/>
<?require_once('template.php');?>
