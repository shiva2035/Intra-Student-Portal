<?
require_once('test.php');
?>
<title>.::Intra Mail(RGUKT)::.</title>
<body bgcolor="gray">
<style>
#menu
{
	list-style:none;
	color:red;
	background-color:orange;
	float:left;
	height:600;
	width:200;
}
#menu a
{
	background-image:url("more-btn.jpg");
	color:white;
	font-weight:bold;
	align:center;
}
#menu a:hover
{
	border-style:double;
	list-style:none;
	color:green;
	background-color:white;
}
#head
{
	align:center;
}
</style>
<div id="head"><img src="logo2.png" width="1320" height="100" style={margin-bottom:5;}></div>
<div id="menu">
	<table><tr></tr>	<tr></tr>	<tr></tr>
	<tr><td><a href="../index.php">Home Page</a></td></tr>
	<tr><td><a href="compose.php">Compose Mail</a></td></tr>
	<tr><td><a href="inbox.php">Inbox</a></td></tr>
	<tr><td><a href="outbox.php">Sent Items</a></td></tr>
	<tr><td><a href="draftbox.php">Drafts</a></td></tr>
	<tr><td><a href="trash.php">Trash</a></td></tr>
</table>
</div>
