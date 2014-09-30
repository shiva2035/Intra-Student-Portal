<?
session_start();
require_once('test.php');
include("head.php");
if(array_key_exists('submit',$_POST))
{
	mysql_connect('localhost','root','password')or die("Not Connected to MySQL Server because ".mysql_error());
	mysql_select_db("rgukt");
	$block=$_POST['block'];
	$class=$_POST['class'];
	$class=$block."_".$class;
	$dept=$_POST['dept'];
	$present=$_POST['present'];
	$absent=$_POST['absent'];
	$total=$_POST['total'];
	$absent_id=$_POST['absent_id'];
	$q1="insert into attendance values('$class','$dept',$present,$absent,$total,'$absent_id')";
	$q2=mysql_query($q1) or die(mysql_error());
	echo "<center><font color=green>Your class room attendance is submitted successfully";
}
else
{?>
<h2><center><font color=green><b><u>Attendance Portal</u></font></center></h2>
<form method="post" action="">
<table align=center>	
	<tr><td>Class</td><td>
	<select name="block"><option value=null>Select Academic Block</option><option value="ABI">AB-I</option><option value="ABII">AB-II</option></select>
	<select name="class">
	<option value="null">Select Ur Class</option>
	<?php for($j=1;$j<=314;$j++)
	{
		if(($j >=1 && $j <= 14)||($j >= 101 && $j <= 114)||($j >= 201 && $j <= 214)||($j >= 301 && $j <= 314)) 
		{
			if($j>=1&&$j<10)echo "<option>00".$j."</option>";else if($j>=10&&$j<=14)echo "<option>0".$j."</option>";else echo "<option>".$j."</option>";
		}
	}
		?>
	</select>
	</td></tr>
	<tr><td>Department</td><td><select name="dept">
	<option value="null">Select Ur Dept</option>
	<?
	$dep=array("CSE","CIVIL","CHEM","ECE","MME","MECH");
	for($i=0;$i<6;$i++)
	{
		echo "<option value=$dep[$i]>$dep[$i]</option>";
	}	
	?>
	</select></td></tr>
	<tr><td>No of Presents</td><td><input type=text name="present"></td></tr>
	<tr><td>No of Absentees</td><td><input type=text name="absent"></td></tr>
	<tr><td>Total Strength</td><td><input type=text name="total"></td></tr>
	<tr><td>Absent ID's</td><td><input type=text name="absent_id"></td></tr>
	<tr><td><input type="reset" value="reset"></td><td><input type=submit name="submit"></td></tr>
</table>
</form>
<?
}
	echo "<br>";
	include('view_attendence.php');
	echo "<br>";
include("template.php");
?>
