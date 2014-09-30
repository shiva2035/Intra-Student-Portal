<?
include('head.php');
if(!array_key_exists('submit',$_POST)){?>
<title>::System Details::</title>
<style>
#d2
{
margin-left:350;
//border:2;
text-align:center;
//border-style:double;
//border-color:red;
width:350;
height:50;
color:white;
background: -moz-linear-gradient(#990000,  #99FF66);
font-size:18;
}
#d3
{
margin-left:350;
border:1px;
text-align:left;
border-top:0;
border-style:solid;
border-color:green;
width:350;
color:green;
//background: -moz-linear-gradient(#990000,  #99FF66);
}
</style>
<br><br>
<div id="d2"><br>Submit Your System Details<br><br></div>
<form action="" method="post">
<table id="d3"><tr></tr>
<tr><td>Your Name:</td><td><input type="text" name="name"></td></tr>
<tr><td>Your ID:</td><td><input type="text" name="id"></td></tr>
<tr><td>System Serial No:</td><td><input type="text" name="ssl"></td></tr>
<tr><td>Battery Serial No:</td><td><input type="text" name="bsl"></td></tr>
<tr><td>Adaptor Serial No:</td><td><input type="text" name="asl"></td></tr>
<tr><td>Your IP Address:</td><td><input type="text" name="ip"></td></tr>
<tr><td></td><td><input type="reset" value="RESET"><input type="submit" name="submit" value="SUBMIT"></td></tr>
</table>
</form>
<?php
}

if(array_key_exists('submit',$_POST))
{
$name=$_POST['name'];
$id=$_POST['id'];
$ssl=$_POST['ssl'];
$bsl=$_POST['bsl'];
$asl=$_POST['asl'];
$ip=$_POST['ip'];
if($name==NULL||$ssl==NULL||$bsl==NULL||$asl==NULL||$ip==NULL)header('index.html');
$con=mysql_connect("localhost","root","password");
if(!$con)echo mysql_error();
mysql_select_db("rgukt")or die("No Database selected");
$q1="insert into sysdet values(\"$name\",\"$id\",\"$ssl\",\"$bsl\",\"$asl\",\"$ip\");";
$q2=mysql_query("$q1");
if(!$q2)echo mysql_error();
header('location:see_res.php');
}
include('template.php');
?>
