<?
session_start();
require_once('head.php');
?>
<title><? echo $_GET['id']."'s Profile"?></title>
<?php
	$id = $_GET['id'];
	if($id=="B082035")
	{
		echo "<center><br><br><br><br><b><font color=maroon>Sorry! Shiva Kumar's Details are Not Shared with you</b></center>";
	}
	else
	{
		$db=mysql_connect("localhost","root","password");
		if(!$db) echo mysql_error();
		mysql_select_db("diwali");
		//$uname=$_SESSION['uname'];
		$q1= "select * from `diwali`.`studetails` where id=\"$id\"";
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
<tr align="center"><th align="center"><font align="center" color=green><? echo $row['id'];?>'s Details</th><th width=600></th></tr>
<tr><td id="const1">Name:</td><td width="600"><b><p style={text-transform:uppercase;color:blue;width:600;}><?php echo $row['last_name']." ".$row['first_name'];?></p></b></td></tr>
<tr><td id="const1">Father Name:</td><td><b><p style={text-transform:uppercase}><?php echo $row['father'];?></b></td></tr>
<tr><td id="const1">Department:</td><td><b><p style={text-transform:uppercase}>Department of Computer Science</b></td></tr>
<tr><td id="const1">Gender:</td><td></td></tr>
<tr><td id="const1">Date of Birth:</td><td><?php echo $row['dob'];?></td></tr>
<tr><td id="const1">Address_1(Village):</td><td><?php echo $row['addr'];?></td></tr>
<tr><td id="const1">Email:</td><td>-Not Available-</td></tr>
<tr><td id="const1">Phone:</td><td>-Not Available-</td></tr>
<tr><td id="const1">Class:</td><td>312</td></tr>
</table>
</center>
	<?php
		}
	}
	?>
	<center><a href="index.php">Home Page</a> | <a href="http://10.9.20.226/">10.9.20.226/Home</a>| <a href="logout.php">Sign Out</a> </center>
<?
include("template.php");
?>
