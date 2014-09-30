<?php
	session_start();
	include('head.php');
	if(!array_key_exists("save",$_POST)){
?>
<style>
#body
{
	align:center;
	margin-left:350;
	margn-right:100;
	width:500;
}
</style>
<div id="body">
<?//if(!array_key_exists("save",$_POST)){?>
<style>
.tabl
{
	background-color:pink;
	background-image:url("images/bg.gif");
	border:1px;
	align:center;
	-moz-border-radius:5;
	border-style:inset;
	color:blue;
	font-size:16pt
	margin:left:200;
	margin:right:200;
}
	#in-btn
	{
	background-color:IndianRed;
	border:none;
	width:80;
	text-transform:uppercase;
	color:white;
	}
	#input
	{
	background-color:LightCyan;
	border:none;
	-moz-border-radius:5;
	//width:80;
	text-transform:lowercase;
	color:black;
	font-family:aerial;
	font-style:bold;
	}
</style>
</br>
<center><b><u><font color="orange">Fill the below fields carefully, Once you save the options they cannot be edited.</u></font></center>
<table  class="tabl">
<center><form action="" method="post">
	<tr><td><br></td></tr>
	<tr><th style="background-color:brown;">Essential Information</th></tr>
	<tr><td width="200">ID.No:[Ex:B08XXXX]</td><td><input type="text" name="id"id="input"></td></tr>
	<tr><td>Password:</td><td><input type="password" name="pass1" id="input"></td></tr>
	<tr><td>Password:(again)</td><td><input type="password" name="pass2" id="input"></td></tr>
	<tr><td>First Name:</td><td><input type="text" name="first"id="input"></td></tr>
	<tr><td>Last Name:</td><td><input type="text" name="last"id="input"></td></tr>
	<tr><td>Date of Birth:</td><td><select name="d" id="input"><option>Date</option><?php for($i=1;$i<=31;$i++) if($i<10)echo "<option value=\"0$i\">0$i</option>";else echo "<option value=\"$i\">$i</option>";?></select><select name="m" id="input"><option>Month</option><?php for($i=1;$i<=12;$i++) if($i<10)echo "<option value=\"0$i\">0$i</option>";else echo "<option value=\"$i\">$i</option>";?></select><select name="y" id="input"><option>Year</option><?php for($i=1960;$i<=2012;$i++) echo "<option>$i</option>";?></select></td></tr>
	<tr><td>Gender:(M/F)</td><td><select name="sex" id="input"><option>Select Gender</option><option>Male</option><option>FeMale</option></select></td></tr>
	<tr><td>Department:</td><td><select name="dept"id="input"><option>Select your Branch</option><option>Computer Science(CSE)</option><option>ECE</option><option>Mechanical</option><option>Civil</option><option>Chemical</option><option>Metallurgy</option><option>Engineering-I</option><option>PUC-II</option><option>PUC-I</option></select></td></tr>
	<tr><td>Class Room:[Ex:303]</td><td><select name="cr" id="input"><option>Select your class</option>
	<?php for($j=1;$j<=314;$j++){
	if(($j >=1 && $j <= 14)||($j >= 101 && $j <= 114)||($j >= 201 && $j <= 214)||($j >= 301 && $j <= 314)) 
	{
	?>
	<?php if($j>=1&&$j<10)echo "<option>00".$j."</option>";else if($j>=10&&$j<=14)echo "<option>0".$j."</option>";else echo "<option>".$j."</option>";}}?>
	</select>If your position is faculty or mentor leave this option</td></tr>
	<tr><td>Position:</td><td><select name="position"id="input"><option name="select_pos">Select Your Position</option><option name="student">Student</option><option name="faculty">Faculty</option><option name="mentor">Mentor</option></select></td></tr>
	<tr><th style="background-color:brown;">Optional Information</th></tr>
	<tr><td>Social Status:</td><td><select name="ss" id="input"><option>Select Your CASTE</option><option>BC-A</option><option>BC-B</option><option>BC-C</option><option>BC-D</option><option>BC-E</option><option>ST</option><option>SC</option><option>OC</option><option>Other</option></select></td></tr>
	<tr><td>Address_1:<p1>(Village)</p1></td><td><input type="text" name="a1" id="input"></td></tr>
	<tr><td>Address_2:<p1>(Mandal)</p1></td><td><input type="text" name="a2" id="input"></td></tr>
	<tr><td>Address_3:<p1>(District)</p1></td><td><input type="text" name="a3" id="input"></td></tr>
	<tr><td>E-mail:<p1>[Ex:xx@rgukt.in]</p1></td><td><input type="text" name="email" id="input"></td></tr>
	<tr><td>Phone.No:</td><td><input type="text" name="ph" id="input"></td></tr>
	<tr><td>Hostel Room:[Ex:G88]</td><td><input type="text" name="hr" id="input"></td></tr>
	<tr><td>Father Name:</td><td><input type="text" name="father"id="input"></td></tr>
	<tr><td>Mother Name:</td><td><input type="text" name="mother"id="input"></td></tr>
	<tr><td></td><td><input type="reset" value="RESET" id="in-btn">&nbsp;&nbsp;<input type="submit" value="Register" name="save" id="in-btn"></td></tr>
	</form><tr><td><br/></td></tr></table>
<br>
<?php 
}

$datab=mysql_connect("localhost","root","password");//if("$datab")//{echo "Data base Connected";}//else//{echo "<br/>".mysql_error();}
$db=mysql_query("create database rgukt");
$sq=mysql_select_db("rgukt");
if(!$sq){echo "error".mysql_error();}//else{echo "\n<br/>rgukt select";}
$que1=mysql_query("create table studetails(uname varchar(10) primary key,pass1 varchar(20),first varchar(100),last varchar(100),father varchar(50),mother varchar(50),position varchar(20),dept varchar(100),dob date,sex varchar(5),ss varchar(5),a1 varchar(50),a2 varchar(50),a3 varchar(50),email varchar(50),phone varchar(12),class varchar(10),hostel varchar(10))");//if(!$que1){echo "Error".mysql_error();}//else
$sq=mysql_select_db("rgukt");
		if(!$sq){echo "error".mysql_error();}
if(array_key_exists("save",$_POST))
{
$uname = $_POST['id'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$first = $_POST['first'];
$last = $_POST['last'];
$father = $_POST['father'];
$mother = $_POST['mother'];
$position=$_POST['position'];
$dept = $_POST['dept'];
$dob = $_POST['y'].$_POST['m'].$_POST['d'];
$sex = $_POST['sex'];
$ss = $_POST['ss'];
$a1=$_POST['a1'];
$a2=$_POST['a2'];
$a3=$_POST['a3'];
$email=$_POST['email'];
$ph=$_POST['ph'];
$cr=$_POST['cr'];
$hr=$_POST['hr'];
$save=$_POST["save"];
if($uname==''||$pass1==''||$pass2==''||$first==''||$last==''||$father==''||$mother==''||$position==''||$dept==''||$dob==''||$sex==''||$ss==''||$a1==''||$a2==''||$a3==''||$email==''||$ph==''||$cr==''||$hr=='')
{
header("location:register.php");
}
else if($uname==Null||$pass1==NULL||$pass2==NULL||$first==NULL||$last==NULL||$father==NULL||$mother==NULL||$position==NULL||$dept==NULL||$dob==NULL||$sex==NULL||$ss==NULL||$a1==NULL||$a2==NULL||$a3==NULL||$email==NULL||$ph==NULL||$cr==NULL||$hr==NULL)
{
	header("location:register.php");
}
$query="insert into studetails values(\"$uname\",\"$pass1\",\"$first\",\"$last\",\"$father\",\"$mother\",\"$position\",\"$dept\",\"$dob\",\"$sex\",\"$ss\",\"$a1\",\"$a2\",\"$a3\",\"$email\",\"$ph\",\"$cr\",\"$hr\");";

$result=mysql_query("$query");
		if($result)
		{
			header('location:profile_face.php');
		}
		if(!$result)
		{
		echo mysql_error();
		}
			else
			{
				echo "<br/><b>".mysql_error();
			}
$_SESSION['uname']=$_POST['id'];
}
?>
</div>
<?php
	require_once('template.php');
?>
