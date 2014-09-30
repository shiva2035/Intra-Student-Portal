<?php
session_start();
require_once('test.php');
include("head.php");
?>
<style>
#wt
{
background-color:orange;
color:black;
font-size:15;
}
#selection
{
	background-color:blue;
	font-style:bolder;
	color:white;
	font-size:15;
}
#mt
{
background-color:green;
font-style:bolder;
color:white;
font-size:15;
}
#tab
{
align:center;
border-radius:8;
-border-radius:8;
-moz-border-radius:8;
background-color:pink;
border-color:red;
border:3;
border-style:double;
}
#tab2
{
border-radius:20;
-border-radius:20;
-moz-border-radius:20;
background-color:green;
border-style:double;
border-color:blue;
}
#th
{
text-align:center
font-size:20pt;
width:100;
color:green;
background-color:orange;
}
#sl
{
border-radius:46;
-border-radius:45;
-moz-border-radius:45;
background-color:orange;
text-align:center;
color:white;
font-size:20pt;
}
#code
{
text-align:center;
color:green;
font-size:18pt;
background-color:lightgreen;
}
#sun_name
{
border-radius:4;
-border-radius:4;
-moz-border-radius:4;
background-color:violet;
font-size:16pt;
}
#marks
{
border-radius:6;
-border-radius:6;
-moz-border-radius:6;
background-color:brown;
color:white;
text-align:center;
font-size:20pt;
}
#td1
{
color:white;
width:150;
text-align:left;
font-size:14pt;
background-color:green;
border-radius:6;
-border-radius:6;
-moz-border-radius:6;
}
#td2
{
text-transform:uppercase;
font-style:bolder;
color:blue;
width:450;
background-color:white;
}
#thead
{
background-color:green;
color:white;
text-transform:uppercase;
text-align:center;
font-size:20pt;
}

</style>
<html>
<form action="" method="post">
<p align="center" id="p">Enter your ID.No:<input type="text" name="id">
<select name="selection" id="selection">
<option value="0" id="selection">Select Exam</option>
<option value="wt1" id="wt">Weekend-Test1</option>
<option value="wt2" id="wt">Weekend-Test2</option>
<option value="wt3" id="wt">Weekend-Test3</option>
<option value="wt4" id="wt">Weekend-Test4</option>
<option value="wt5" id="wt">Weekend-Test5</option>
<option value="wt6" id="wt">Weekend-Test6</option>
<option value="wt7" id="wt">Weekend-Test7</option>
<option value="wt8" id="wt">Weekend-Test8</option>
<option value="wt9" id="wt">Weekend-Test9</option>
<option value="mt1" id="mt">Monthly-Test1</option>
<option value="mt2" id="mt">Monthly-Test2</option>
<option value="mt3" id="mt">Monthly-Test3</option>
<option value="est"  id="est">End Semester Test</option>
</select>
<input type="submit" name="submit" value="Get Your Results">
</form>
</html>
<?php
//$submit=$_POST['submit'];
$db=mysql_connect("localhost","root","password");
if(!$db)
{
	echo "Database not connected, because".mysql_error();
}
else
{
if(array_key_exists("submit",$_POST))
{
$id=$_POST['id'];
$selection=$_POST['selection'];
$id=$_POST['id'];
mysql_select_db("rgukt");
$q3="select * from studetails natural join $selection  where uname=\"$id\";";
$res=mysql_query("$q3");
	if(!$res){echo "<br/><br><blink>Enter the Valid ID No</blink><br>".mysql_error();}
while($row=mysql_fetch_array($res))
{
?>
	<p align="center" style="{background-color:green;color:white;}"><b>Student Details</b></p>
	<table   bgcolor="pink" align="center" id="tab">
	<tr><td width="120" id="td1">  Student ID</td><td width="200" id="td2"><?php echo $row['uname'];?></td><td width="120" id="td1">  Name</td><td width="200" id="td2"> <?php echo $row['first']."  ".$row['last'];?></td></tr>
	<tr><td width="120" id="td1">  Father Name</td><td width="200" id="td2"> <?php echo $row['father'];?></td><td id="td1">  Department</td><td id="td2"><?php echo $row['dept'];?></td></tr>
	<tr><td width="120" id="td1">  Date of Birth</td><td width="200" id="td2"><?php echo $row['dob'];?></td><td id="td1">  Class</td><td id="td2"><?php echo $row['class'];?></td></tr>
	</table>
<p align="center" style="{background-color:green;color:white;}"><b>Student Marks Record</b></p>
<table align="center" id="tab2">
<tr><th></th><th></th><th align="center" id="thead"><?php echo "Test :".$selection; ?></th><th></th></tr>
<tr id="th"><th>Sl.No</th><th>Course Code</th><th width="300">Subject Name </th><th width="100"> Marks </th></tr>
<tr><td id="sl">1</td><td id="code">MA2101</td><td id="sun_name">Maths-II Descrete Structures</td><td id="marks"><?php echo $row['sub1'];?></td></tr>
<tr><td id="sl">2</td><td id="code">CS2102</td><td id="sun_name">Design of Algorithms </td><td id="marks"><?php echo $row['sub2'];?></td></tr>
<tr><td id="sl">3</td><td id="code">EC2101</td><td id="sun_name">Introduction to Electronics </td><td id="marks"><?php echo $row['sub3'];?></td></tr>
<tr><td id="sl">4</td><td id="code">EC2102</td><td id="sun_name">Network Theory</td><td id="marks"><?php echo $row['sub4'];?></td></tr>
<tr><td id="sl">5</td><td id="code">CS2701</td><td id="sun_name">Design of Algorithms Lab </td><td id="marks"><?php echo $row['sub5'];?></td></tr>
<tr><td id="sl">6</td><td id="code">EC2701</td><td id="sun_name">Introduction to Electronics Lab</td><td id="marks"><?php echo $row['sub6'];?></td></tr>
<tr><td id="sl">7</td><td id="code">EC2702</td><td id="sun_name">Network Theory Lab </td><td id="marks"><?php echo $row['sub7'];?></td></tr>
<tr><td id="sl">8</td><td id="code">HS2101</td><td id="sun_name">Human Values </td><td id="marks"><?php echo $row['sub8'];?></td></tr>
<tr id="sun_name1"><td id="sl">9</td><td id="code"> - </td><td id="sun_name">Total Marks</td><td id="marks"><?php echo $row['sub1']+$row['sub2']+$row['sub3']+$row['sub4']+$row['sub5']+$row['sub6']+$row['sub7']+$row['sub8'];?></td></tr>
</table>
<br/>
<center>
<?php
}
}
}
include("template.php");
?>
