<?php
	session_start();
	require_once('test.php');
	$uname=$_SESSION['user'];
	include('head.php');
	$db=mysql_connect("localhost","root","password");
	if(!$db)
	{
		echo mysql_error();
	}
	$rr=scandir("profile-face");
	foreach($rr as $value)
	{
		if($value=="$uname".".jpg")
		{
	?>
<style>
#img
{
	width:80;
	height:80;
	border:1.5px;
	border-style:solid;
}
#img:hover
{
	width:320;
	height:240;
}
</style>
<?php
		}
	}
	mysql_select_db("rgukt");
	$uname=$_SESSION['user'];
	$q1="select * from studetails where uname=\"$uname\";";
	$q2=mysql_query($q1);
	while($row=mysql_fetch_array($q2))
	{
	?>
<style>
#const1
{
	color:white;
	background-color:maroon;
	text-align:left;
}
#const2
{
	color:green;
	background-color:#f8f8f8;
	text-align:left;
}
#tab
{
	margin:50 0 50;
	width:800;
	border:3px;
	border-style:groove;
	border-radius:25;
	-moz-border-radius:5;
	background-color:white;
	color:black;
	font-weight:bold;
}
</style>
<center>
<div align="center" style="{margin-top:25;margin-bottom:-48;margin-left:175;margin-right:175;background-color:orange;color:white;}"><b>Student's Details</b></div>
<table id="tab" BORDER=0.8>
<tr><td id="const1">Student Full Name:</td><td style="{width:500;background-color:green;color:white;}"><b><p style={text-transform:uppercase}><?php echo $row['first']."  ";?> <?php echo $row['last'];?></p></b></td><td><img src="profile-face/<?php echo $_SESSION['user']; ?>.jpg" id="img"></td></tr>
<tr><td id="const1">University ID:</td><td id="const2"><b><p style={text-transform:uppercase}><?php echo $row['uname'];?></b></td></tr>
<tr><td id="const1">Father Name:</td><td id="const2"><b><p style={text-transform:uppercase}><?php echo $row['father'];?></b></td></tr>
<tr><td id="const1">Mother Name:</td><td id="const2"><b><p style={text-transform:uppercase}><?php echo $row['mother'];?></b></td></tr>
<tr><td id="const1">Department:</td><td id="const2"><?php echo $row['dept'];?></td></tr>
<tr><td id="const1">Date of Birth:</td><td id="const2"><?php echo $row['dob'];?></td></tr>
<tr><td id="const1">Gender:</td><td id="const2"><p><?php echo $row['sex'];?></p></td></tr>
<tr><td id="const1">Social Status:</td><td id="const2"><?php echo $row['ss'];?></td></tr>
<tr><td id="const1">Class Room:</td><td id="const2"><?php echo $row['class'];?></td></tr>
<td id="const1">Hostel Room:</td><td id="const2"><?php echo $row['hostel'];?></td>
<tr><td id= "const1">Permanent Address:</td><td id="const2"><p>Village: <?php echo $row['a1'];?>, Mandal:<?php echo $row['a2'];?>,Dist:<?php echo $row['a3'];?> .</p></td></tr>
<tr><td id="const1">e-Mail ID:</td><td id="const2"><?php echo $row['email'];?></td></tr>
<tr><td id="const1">Phone Number:</td><td id="const2"><?php echo $row['phone'];?></td></tr>

</table>
</center>
	<?php
	}
	include('template.php');
	?>
