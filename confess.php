<?
mysql_connect("localhost","root","password");
mysql_select_db("rgukt");
session_start();
(isset($_SESSION['user']))?$v=1:$v=0;
if(!$v) header("index.php");
?>
<body style="{background-color:#f8f8f8;margin-left:100;margin-right:100;}">
<style>
a
{
    height: auto;
    background-color:black;
    color:white;
 //	   line-height: 2;
    white-space: nowrap;
}
a:hover
{
        background: -moz-linear-gradient(#f8f8f8, black );
}
a:visited
{
	background-color:red;
}
</style>
<div style="{background-color:black;color:white;margin-top:-5;height:100;-moz-border-radius:25;}">
<center><font size=6 color=white>Confessions and Complements Page</font><br><font size=3 color=white>(Dept.of Computer Science and Engineering, RGUKT-Basar)</font></center>
<div style="{background-color:red;margin-top:15;}"><a href="index.php"> SIS Home Page</a> <a href="confess.php?disp=new"> All Confessions</a> <a href="confess.php?disp=profile">Your Profile</a> <a href="logout.php">Sign Out</a></div>
</div>
<hr style="{height:20;background-color:orange;border:2;border-style:double;}"><br>
<?
$disp= $_GET['disp'];
switch($disp)
{
	case "new":
	readAll();
	newFB();break;
	case "profile":
	viewProfile($_SESSION['user']);break;

}
function newFB()
{
	$uname = $_SESSION['user'];
	echo "<title title='Title Page'>Welcome Mr/Mrs. $uname </title>";
	if(!isset($_SESSION['user']))
	{
		header("location:index.php");
	}
	if(array_key_exists('submit',$_POST))
	{
		$from=$_POST['id'];
		$msg = $_POST['message'];
		$ip = $_SERVER['REMOTE_ADDR'];
		$quer = "insert into confess values('$from','$msg','$ip');";
		$s = mysql_query($quer);
		if($s){ header("location:index.php");}
		else echo mysql_error();
	}
	else
	{
	?>
	<fieldset>
	<legend>Post Your Feedback</legend>
	<table align=center>
	<form action="" method=post>
	<tr><td>Your ID: </td><td><input type="text" name="id" value="<? echo $_SESSION['user'];?>" readonly=true><input type=text value="<? echo $_SERVER['REMOTE_ADDR'];?>" readonly=true></td></tr>
	<?}	?>
	<tr><td>Your Message: </td><td><textarea cols=50 rows=5 name="message"></textarea></td></tr>
	<tr><td></td><td><input type=reset><input type=submit value="POST Your Wishes" name=submit></td></tr>
	</form>
	</table>
	</fieldset>
	<?
}
function readAll()
{
	$uname = $_SESSION['user'];
	$x = "select * from confess;";
	$y= mysql_query($x);if(!$y)echo mysql_error();
	while($row=mysql_fetch_array($y))
	{
		echo "<fieldset>";
		//echo "<legend style={color:white;background-color:white;}><b><a href=viewProfile.php?id=".$row['to'].">".$row['to']."</a></b></legend>";	
		echo "<legend style={color:blue;}><b><a href=\"viewProfile.php?id=".$row['id']."\">".$row['id']."</a></b></legend>";			
		echo "<font color=orange style={margin-left:75;}>"."Says: ".$row['message']."</font>";
		echo "</fieldset>";
	}
}
function viewProfile($var)
{
	$id = $_SESSION['user'];
	echo "<title>Mr/Mrs. $id - Profile </title>";
	$db=mysql_connect("localhost","root","password");
	if(!$db) echo mysql_error();
	mysql_select_db("rgukt");
	$q1= "select * from studetails where uname=\"$id\";";
	$q2=mysql_query($q1);
	while($row=mysql_fetch_array($q2))
	{
	?>
	<style>
	#const1
	{
		//margin-left:25;
		color:white;
		background-color:maroon;
		//-moz-border-radius:35;
		text-align:left;
	}
	#tab
	{
		margin:50 0 50;
		width:450;
		border:4px;
		border-style:outset;
		border-radius:25;
		-moz-border-radius:5;
		//background-color:orange;
		color:black;
		font-weight:bold;
	}
	</style>
	<center>
	<table id="tab" BORDER=0.8>
	<tr align="center"><th align="center"><font align="center" color=green><? echo $row['uname'];?>'s Details</th><th width=600></th></tr>
	<tr><td id="const1">Name:</td><td width="600"><b><p style={text-transform:uppercase;color:blue;width:600;}><?php echo $row['last']." ".$row['first'];?></p></b></td></tr>
	<tr><td id="const1">Father Name:</td><td><b><p style={text-transform:uppercase}><?php echo $row['father'];?></b></td></tr>
	<tr><td id="const1">Department:</td><td><b><p style={text-transform:uppercase}>Department of Computer Science</b></td></tr>
	<tr><td id="const1">Gender:</td><td></td></tr>
	<tr><td id="const1">Date of Birth:</td><td><?php echo $row['dob'];?></td></tr>
	<tr><td id="const1">Email:</td><td>-Not Available-</td></tr>
	<tr><td id="const1">Phone:</td><td>-Not Available-</td></tr>
	<tr><td id="const1">Class:</td><td>312</td></tr>
	</table>
	</center>
		<?php
		}
}
?>
<br>
<div style="{background-color:black;color:white;height:60;vertical-align:middle;}" align = center><br>Department of Computer Science and Engineering</div>

