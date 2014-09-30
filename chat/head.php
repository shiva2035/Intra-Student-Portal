<title>::RGUKT-BASAR::</title>
<link rel="icon" href="images/rgu.png" type="image/x-icon" />
<link rel="stylesheet" href="style2.css" type="text/css">
<style type = 'text/css'>
body{
margin:50 25 25;
	background-color:palegreen;
}
a:link{
	text-decoration:none;
	opacity:0.6;
}
a:hover{
	text-decoration:none;
	background-color:330000;
	-moz-border-radius:14px;
	-webkit-border-radius:14px;
	-border-radius:14px;
	padding:3px;
	text-shadow:1px 1px 1px black;
	

}
table{
	margin-left:-10px;
	marign-right:-10px;
	margin-top:-10px;
	
	background-color:663300;
	border:1px solid 663300;
	-moz-border-radius:14px;
	-webkit-border-radius:14px;
	-border-radius:14px;
	-moz-box-shadow:5px 6px 7px black;
	
	
	width:101.3%;
	height:90px;
}
#tr{
	color:white;
//	margin-left:810px;
//	margin-bottom:-10px;
	
}
#td{
	color:white;
//	margin-right:390px;
}
#f{
	color:white;
//	margin-left:-390px;
}
#s{
//	margin-left:-315px;
	color:white;
}
#a{
//	margin-left:-200px;
	color:white;
}
#log{
	background-color:663300;
	margin-top:20px;
	margin-left:950px;
	width:30%;
	height:34%;
	padding:-1px 5px;
	-moz-box-shadow:40px 50px 5px 330000;
}
#text{
	
	text-align:center;
	font-weight:bold;
	font-family:Helvetica, Arial, sans-serif;
}
#input{
	
	border:none;
	-moz-border-radius:14px;
	-webkit-border-radius:14px;
	-border-radius:14px;
	padding:3px 5px;

	
	}
#in{
	margin-top:40px;
	margin-left:50px;
}
.in{
	margin-left:50px;
	
	}
.ln{
	
	margin-left:120px;
	border:none;
	-moz-border-radius:14px;
	-webkit-border-radius:14px;
	-border-radius:14px;
	padding:3px 18px;
}
.l{
	margin-left:-150px;
	border:none;
	-moz-border-radius:14px;
	-webkit-border-radius:14px;
	-border-radius:14px;
	padding:3px 18px;
	}

}
#hlink:link
{
background-color:red;
}
#hlink:hover
{
background-color:white;
}
#hlink:active
{
background-color:black;
}
#header
{
align:center;
margin-top:-5;
text-align:right;
vertical-align:bottom;
background-color:996600;
color:white;
width:100%;
height:50;
border-radius:15;
-moz-border-radius:15;
}
#search
{
float:right;
background-image:url("images/head.jpg");
height:20;
margin-bottom:20;
margin-top:5;
}
</style>
<sctipt text/javascript></script>
<body onload="time()">
<div id="header">
<ul id="menu">
	<li><a href="http://10.9.20.163/312/home.php" id="hlink">Home</a></li>
	<li><a href="http://10.9.20.163/312/academics.php" id="hlink">Academics</a></li>
	<li><a href="http://10.9.20.163/312/upload.php" id="hlink">File Sharing</a></li>
	<li><a href="http://10.9.20.163/312/stuinfo.php" id="hlink">StudInfo</a></li>
	<li>
		<a>Extra</a>
		<ul>
			<li><a href="http://10.9.20.163/312/notice.php" id="hlink">Notices</a></li>
			<li><a href="http://10.9.20.163/312/spot.php" id="hlink">Spotlights</a></li>
			<li><a href="http://10.9.20.163/312/academics.php" id="hlink">Results</a></li>
			<li><a href="http://10.9.20.163/312/vote.php" id="hlink">Survey</a></li>
			<li><a href="http://10.9.20.163/312/forum.php" id="hlink">Forum</a></li>
		</ul>
	</li>
	<li>
		<a href="intramail">Intra Mail</a>
		<ul>
		<li><a href="http://10.9.20.163/312/intramail/inbox.php" id="hlink">Inbox</a></li>
		<li><a href="http://10.9.20.163/312/intramail/outbox.php" id="hlink">Outbox</a></li>
		<li><a href="http://10.9.20.163/312/intramail/trash.php" id="hlink">Trash</a></li>
		<li><a href="http://10.9.20.163/312/intramail/draftbox.php" id="hlink">Draft</a></li>
		<li><a href="http://10.9.20.163/312/intramail/mailsettings.php" id="hlink">Mail Settings</a></li>
		</ul>
	</li>
<?php if(isset($_SESSION['user'])){?>	<li>
<a href="stuinfo.php">Welcome Mr.<?echo $_SESSION['user'];?></a>
	<ul>
		<li><a href="http://10.9.20.163/312/stuinfo.php" id="hlink">About User</a></li>
		<li><a href="http://10.9.20.163/312/update_profile.php" id="hlink">Update Profile</a></li>
		<li><a href="http://10.9.20.163/312/logout.php" id="hlink">Logout</a></li>
	</ul>
	</li>



	<?}
else{?>
	<li>
		<a>Other</a>
		<ul>
			<li><a href="login.php" id="hlink">Login</a></li>
			<li><a href="register.php" id="hlink">Registratin</a></li>
		</ul>
	</li><?}?>
	<div id="search"><form action="search.php" method="post">
<script type="text/javascript">
</script>
<b><input type="text" name="inputtext" value="Search here" onfocus="if(this.value=='Search here'){this.value=''}" onblur="if(this.value=='') {this.value='Search here'}"><input type="submit" value="SEARCH" name="search"></b><br/>
</b></form></div>
</ul></div>
</body>
