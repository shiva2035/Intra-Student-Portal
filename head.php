<?
$time=mysql_query("select CURTIME()");
$tm=mysql_result($time,0,0);
$tmt=$tm[0].$tm[1].$tm[3].$tm[4].$tm[6].$tm[7];
echo "<font color=\"red\">Time : ".$tm[0].$tm[1].$tm[2].$tm[3].$tm[4].$tm[5].$tm[6].$tm[7].", Date:".date('d-M-Y')."</font>";
?>
<title>::RGUKT-BASAR::</title>
<link rel="icon" href="images/rgu.png" type="image/x-icon" />
<link rel="stylesheet" href="style2.css" type="text/css">
<style type = 'text/css'>
body
{
	margin:50 100 100;
	background-color:#F8F8F8;
}
#header
{
	align:center;
	margin-top:-15;
	//margin-top:-5;
	text-align:right;
	vertical-align:bottom;
	background-color:black;
	color:white;
	width:100%;
	height:40;
}
#header1
{
	//align:center;
	margin-top:-95;
	font-size:16pt;
	font-style:bolder;
	font-family:Georgia;
	text-align:center;
	vertical-align:bottom;
	background-image:url("images/head.jpg");
	color:brown;
	width:100%;
	height:120;
	//border-radius:15;
	//-moz-border-radius:15;
}
#search
{
	float:right;
	margin-top:-70;
}
#search_input
{
	background-color:#f8f8f8;
	background-image:url('images/mini_google.png');
	background-repeat:no-repeat;
	background-position:top right;
}
#search_button
{
	background-color:brown;
	color:white;
	text-shadow:1px 1px green;
	border-style:none;
	width:75px;
	height:23px;
}
</style>
<sctipt text/javascript></script>
<div id="header1">
<h4>International Institute of Information Technology(APIIIT)-Basar<br/>Dept.of Computer Science</h4><br>
</div>
<div id="header">
	<ul id="menu">
	<li><a href="index.php" id="hlink">Home</a></li>
	<!--<li><a href="academics.php" id="hlink">Academics</a></li>--->
	<li><a>Academics</a>
		<ul>
			<li><a href="academics.php" id="hlink">Results</a></li>
			<li><a href="attendence.php" id="hlink">Attendance</a></li>
			<li><a href="" id="hlink">Exams Time Tables</a></li>
		</ul>
	</li>
	<li><a href="upload.php" id="hlink">File Sharing</a></li>
	<li><a href="stuinfo.php" id="hlink">StudInfo</a></li>
	<li><a href="forum.php" id="hlink">Forums</a></li>
	<li><a>Other</a>
		<ul>
			<li><a href="sysdet.php" id="hlink">System Details</a></li>
			<li><a href="notice.php" id="hlink">Circulars</a></li>
			<li><a href="vote.php" id="hlink">Survey</a></li>
		</ul>
	</li>
	<li><a>Intra Mail</a>
		<ul>
			<li><a href="intramail/inbox.php" id="hlink">Inbox</a></li>
			<li><a href="intramail/outbox.php" id="hlink">Outbox</a></li>
			<li><a href="intramail/trash.php" id="hlink">Trash</a></li>
			<li><a href="intramail/draftbox.php" id="hlink">Draft</a></li>
			<li><a href="intramail/mailsettings.php" id="hlink">Mail Settings</a></li>
			<li><a href="chat/index.php" id="hlink">Chat Box</a></li>
		</ul>
	</li>
	<?php if(isset($_SESSION['user'])){?>	
	<li><a href="stuinfo.php">Welcome Mr.<?echo $_SESSION['user'];?></a>
		<ul>
			<li><a href="stuinfo.php" id="hlink">About User</a></li>
			<li><a href="update_profile.php" id="hlink">Update Profile</a></li>
			<li><a href="logout.php" id="hlink">Logout</a></li>
		</ul>
	</li>
	<?}
	else{?>
	<li><a>Other</a>
		<ul>
			<li><a href="login.php" id="hlink">Login</a></li>
			<li><a href="register.php" id="hlink">Registration</a></li>
		</ul>
	</li>
	<?}?>
	<div id="search"><form action="search.php" method="post"><input type="text" name="inputtext" value="Search here" onfocus="if(this.value=='Search here'){this.value=''}" onblur="if(this.value=='') {this.value='Search here'}" id="search_input">&nbsp;&nbsp;<input type="submit" value="SEARCH" name="search" id="search_button"></b><br/></form></div>
	</ul>
</div>
