<style>
#body
{
margin-top:10;
margin-bottom:20;
background-image:url("images/bg.gif");
background-color:orange;
}
</style>
<?php
//session_start();
//require_once('test.php');
//include("head.php");
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
//border-radius:8;
//-border-radius:8;
//-moz-border-radius:8;
background-color:orange;
//border-color:red;
border:3;
border-style:double;
}
#tab2
{
border-radius:20;
-border-radius:20;
//-moz-border-radius:20;
background-color:green;
border-style:double;
border-color:blue;
}
#th
{
//border-radius:6;
//-border-radius:6;
//-moz-border-radius:6;
text-align:center
font-size:20pt;
width:100;
color:green;
background-color:orange;
}
#sl
{
//border-radius:46;
//-border-radius:45;
//-moz-border-radius:45;
background-color:orange;
text-align:center;
color:white;
font-size:20pt;
}
#code
{
//border-radius:6;
//-border-radius:6;
//-moz-border-radius:6;
text-align:center;
color:green;
font-size:18pt;
background-color:lightgreen;
}
#sun_name
{
//border-radius:4;
//-border-radius:4;
//-moz-border-radius:4;
background-color:violet;
font-size:16pt;
}
#marks
{
//border-radius:6;
//-border-radius:6;
//-moz-border-radius:6;
background-color:brown;
color:white;
text-align:center;
font-size:20pt;
}
#td1
{
color:white;
//width:150;
text-align:left;
font-size:14pt;
background-color:green;
//border-radius:6;
//-border-radius:6;
//-moz-border-radius:6;
}
#td2
{
//border-radius:6;
//-border-radius:6;
//-moz-border-radius:6;
text-align:center;
text-transform:uppercase;
font-style:bolder;
color:white;
width:250;
background-color:black;
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
<div id="body">
<br><br>
<p align="center">Only CSE Results available</p>
<form action="" method="post">
<p align="center" id="p">Enter your ID.No:<input type="text" name="id">
<select name="selection" id="selection">
<option value="0" id="selection">Select Exam</option>
<option value="est" id="wt">Weekend-Test1</option>
<option value="est" id="wt">Weekend-Test2</option>
<option value="est" id="wt">Weekend-Test3</option>
<option value="est" id="wt">Weekend-Test4</option>
<option value="est" id="wt">Weekend-Test5</option>
<option value="est" id="wt">Weekend-Test6</option>
<option value="est" id="wt">Weekend-Test7</option>
<option value="est" id="wt">Weekend-Test8</option>
<option value="est" id="wt">Weekend-Test9</option>
<option value="est" id="mt">Monthly-Test1</option>
<option value="est" id="mt">Monthly-Test2</option>
<option value="est" id="mt">Monthly-Test3</option>
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
$q3="select * from stud natural join $selection  where id=\"$id\";";
$res=mysql_query("$q3");
if(!$res){echo "<br/><br><blink>Enter the Valid ID No</blink><br>".mysql_error();}
while($row=mysql_fetch_array($res))
{
?>
<br/><br/>
	<p align="left" style="color:white;background-color:maroon;width:250;-moz-border-radius: 0pt 15px 15px 0pt;"><b>Student Details</b></p>
	<table   bgcolor="pink" align="center" id="tab">
	<tr><td width="120" id="td1">  Student ID</td><td width="200" id="td2"><?php echo $row['id'];?></td><td width="120" id="td1">  Name</td><td width="200" id="td2"> <?php echo $row['first']."  ".$row['last'];?></td></tr>
	<tr><td width="120" id="td1">  Father Name</td><td width="200" id="td2"> <?php echo $row['father'];?></td><td id="td1">  Department</td><td id="td2"><?php echo "CSE";?></td></tr>
	</table>
<p align="left" style="color:white;background-color:maroon;width:250;-moz-border-radius: 0pt 15px 15px 0pt;"><b>Student Marks Record</b></p>
<table align="center" id="tab2">
<tr><th></th><th></th><th align="center" id="thead"><?php echo "Test :".$selection; ?></th><th></th></tr>
<tr id="th"><th>Sl.No</th><th>Course Code</th><th width="300">Subject Name </th><th width="100"> Grade </th><th>Credits Earned</th></tr>
<tr><td id="sl">1</td><td id="code">MA2101</td><td id="sun_name">Descrete Structures</td><td id="marks"><?php echo $row['ds'];?></td><td id="code">
<?switch($row['ds'])
{
case 'Ex':echo "40";$s=40;break;
case 'A':echo "36";$s=36;break;
case 'B':echo "32";$s=32;break;
case 'C':echo "28";$s=28;break;
case 'D':echo "24";$s=24;break;
case 'R':echo "0";$s=0;break;
default:echo "-";break;
}?></td></td></tr>
<tr><td id="sl">2</td><td id="code">CS2102</td><td id="sun_name">Design of Algorithms </td><td id="marks"><?php echo $row['doa'];?></td><td id="code"><?
switch($row['doa'])
{
case 'Ex':echo "40";$d=40;break;
case 'A':echo "36";$d=36;break;
case 'B':echo "32";$d=32;break;
case 'C':echo "28";$d=28;break;
case 'D':echo "24";$d=24;break;
case 'R':echo "0";$d=0;break;
default:echo "-";break;
}
?>
</td></tr>
<tr><td id="sl">3</td><td id="code">EC2101</td><td id="sun_name">Introduction to Electronics </td><td id="marks"><?php echo $row['ie'];?></td><td id="code">
<?switch($row['ie'])
{
case 'Ex':echo "40";$i=40;break;
case 'A':echo "36";$i=36;break;
case 'B':echo "32";$i=32;break;
case 'C':echo "28";$i=28;break;
case 'D':echo "24";$i=24;break;
case 'R':echo "0";$i=0;break;
default:echo "-";break;
}?></td>
</tr>
<tr><td id="sl">4</td><td id="code">EC2102</td><td id="sun_name">Network Theory</td><td id="marks"><?php echo $row['nt'];?></td><td id="code"><?
switch($row['nt'])
{
case 'Ex':echo "40";$n=40;break;
case 'A':echo "36";$n=36;break;
case 'B':echo "32";$n=32;break;
case 'C':echo "28";$n=28;break;
case 'D':echo "24";$n=24;break;
case 'R':echo "0";$n=0;break;
default:echo "-";break;
}
?></td></tr>
<tr><td id="sl">5</td><td id="code">CS2701</td><td id="sun_name">Design of Algorithms Lab </td><td id="marks"><?php echo $row['doal'];?></td><td id="code"><?
switch($row['doal'])
{
case 'Ex':echo "20";$dl=20;break;
case 'A':echo "18";$dl=18;break;
case 'B':echo "16";$dl=16;break;
case 'C':echo "14";$dl=14;break;
case 'D':echo "12";$dl=12;break;
case 'R':echo "0";$dl=0;break;
default:echo "-";break;
}
?></td></tr>
<tr><td id="sl">6</td><td id="code">EC2701</td><td id="sun_name"> Introduction to Electronics Lab</td><td id="marks"><?php echo $row['iel'];?></td><td id="code"><?
switch($row['iel'])
{
case 'Ex':echo "20";$il=20;break;
case 'A':echo "18";$il=18;break;
case 'B':echo "16";$il=16;break;
case 'C':echo "14";$il=14;break;
case 'D':echo "12";$il=12;break;
case 'R':echo "0";$il=0;break;
default:echo "-";break;
}
?></td></tr>
<tr><td id="sl">7</td><td id="code">EC2702</td><td id="sun_name">Network Theory Lab </td><td id="marks"><?php echo $row['ntl'];?></td><td id="code"><?
switch($row['ntl'])
{
case 'Ex':echo "20";$nl=20;break;
case 'A':echo "18";$nl=18;break;
case 'B':echo "16";$nl=16;break;
case 'C':echo "14";$nl=14;break;
case 'D':echo "12";$nl=12;break;
case 'R':echo "0";$nl=0;break;
default:echo "-";break;
}
?></td></tr>
<tr><td id="sl">8</td><td id="code">HS2101</td><td id="sun_name">Human Values </td><td id="marks"><?php echo "-";?></td><td id="code"></td></tr>
<tr id="th"><td id="sl">9</td><td><center> Total</center></td><td ></td><td></td><td><center><?$total_credits=$s+$d+$i+$n+$dl+$il+$nl;echo $total_credits;?></center></td></tr>
</table>
<p style="text-align:center;width:400;margin-left:400;background-color:green;color:white;">Estimated SGPA:<? $sgpa=($total_credits/220)*10;echo $sgpa;?></p>
<br/>
<center>
<?php
}
}
}
echo "<br></br>";
?>
</div>
<?

//include("template.php");
?>
