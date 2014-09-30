<body>
<title>.::Composing Mail::.</title>
<?php
session_start();
$uname=$_SESSION['user'];
include('index.php');
require_once('test.php');
function send($to,$sub,$msg)
{
	$con=mysql_connect("localhost","root","password");
	if(!$con)echo mysql_error();
}
if(array_key_exists('send',$_POST))
{
	$send=$_POST['send'];
	$to=$_POST['to'];
	$sub=$_POST['subject'];
	$msg=$_POST['message'];
	$tm=date('H:i:s');
	send('$to','$sub','$msg');
	mysql_select_db("rgukt");
	$q1="insert into inbox values(\"$to\",\"$sub\",\"$msg\",\"$uname\",\"$tm\")";
	$q2=mysql_query("$q1");
	if(!$q2)echo mysql_error();
	$q3="insert into outbox values(\"$uname\",\"$sub\",\"$msg\",\"$to\",\"$tm\");";
	$q4=mysql_query("$q3");
	if(!$q3)echo mysql_error();
	if($q4&&$q2)echo "<b>Your message is delivered Successfully</b>";
	else echo "<b>Unable to process your message</b>";
}
else{
?>
<style>
#table
{
width:800;
}
</style>
<form action="" method="post">
<table id="table">
<tr id="tab"><td>To:</td><td><input type="text" name="to" width="400"></td></tr>
<tr id="tab"><td>Subject:</td><td><input type="text" name="subject" width="400"></td></tr>
<tr id="tab"><td>Message:</td><td><textarea name="message" rows="10" cols="100"></textarea></td></tr>
<tr id="tab"><td></td><td><input type="submit"value="Send" name="send"></td></tr>
<table></form>
<?php
}
?>
</body>
<div>
<?//include('template.php');?></div>
