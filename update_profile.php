<?php
session_start();
include('head.php');
require_once('test.php');
$db=mysql_connect("localhost","root","password");
if(!$db)
{
echo mysql_error();
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
margin-left:25;
color:blue;
//background-color:pink;
text-align:left;

}
#tab
{
margin:50 0 50;
width:450;
border-radius:25;
-moz-border-radius:5;
background-color:CCFFCC;
}
</style>
<?if(!array_key_exists("hide",$_POST)){?>
<center>
<table id="tab">
<form action="" method="post">
<tr><td id="const1">User name:</td><td><b><?php echo $row['uname'];?></b></td></tr>
<tr><td id="const1">Father Name:</td><td><b><?php echo $row['father'];?></b></td></tr>
<tr><td id="const1">Mother Name:</td><td><b><?php echo $row['mother'];?></b></td></tr>
<tr><td id="const1">First Name:</td><td><input type="text" value="<?php echo $row['first'];?>" name="cfirst"></td></tr>
<tr><td id="const1">Last Name:</td><td><input type="text" value="<?php echo $row['last'];?>" name="clast"></td></tr>
<tr><td id="const1">Department:</td><td><input type="text" value="<?php echo $row['dept'];?>" name="cdept"></td></tr>
<tr><td id="const1">Date of Birth:</td><td><input type="text" value="<?php echo $row['dob'];?>" name="cdob"></td></tr>
<tr><td id="const1">Gender:</td><td><input type="text" value="<?php echo $row['sex'];?>" name="csex"></td></tr>
<tr><td id="const1">Social Status:</td><td><input type="text" value="<?php echo $row['ss'];?>" name="css"></td></tr>
<tr><td id="const1">Address1(Village):</td><td><input type="text" value="<?php echo $row['a1'];?>" name="ca1"></td></tr>
<tr><td id="const1">Address2(Mandal):</td><td><input type="text" value="<?php echo $row['a2'];?>" name="ca2"></td></tr>
<tr><td id="const1">Address1(District):</td><td><input type="text" value="<?php echo $row['a3'];?>" name="ca3"></td></tr>
<tr><td id="const1">Email:</td><td><input type="text" value="<?php echo $row['email'];?>" name="cemail"></td></tr>
<tr><td id="const1">Phone:</td><td><input type="text" value="<?php echo $row['phone'];?>" name="cphone"></td></tr>
<tr><td id="const1">Class:</td><td><input type="text" value="<?php echo $row['class'];?>" name="cclass"></td></tr>
<tr><td id="const1">Hostel:</td><td><input type="text" value="<?php echo $row['hostel'];?>" name="chostel"></td></tr>
<input type="hidden" name="hide">
<tr><td><input type="reset" value="RESET"></td><td><input type="submit" value="Update"></td></tr>
</form></table>
</center>
<?php
}
if(array_key_exists("hide",$_POST))
{
$cfirst=$_POST['cfirst'];
$clast=$_POST['clast'];
$cdept=$_POST['cdept'];
$cdob=$_POST['cdob'];
$csex=$_POST['csex'];
$css=$_POST['css'];
$ca1=$_POST['ca1'];
$ca2=$_POST['ca2'];
$ca3=$_POST['ca3'];
$cemail=$_POST['cemail'];
$cphone=$_POST['cphone'];
$cclass=$_POST['cclass'];
$chostel=$_POST['chostel'];
$updt="UPDATE  `rgukt`.`studetails` SET  `first` =  '$cfirst',`last` =  '$clast',`dept` =  '$cdept',`dob` =  '$cdob',`sex` =  '$csex',`ss` =  '$css',`a1` =  '$ca1',`a2` =  '$ca2',`a3` =  '$ca3',`email` =  '$cemail',`phone` =  '$cphone',`class` =  '$cclass',`hostel` =  '$chostel' WHERE  `studetails`.`uname` =  '$uname';";
$rest=mysql_query($updt);
if(!$rest)
{echo "Error".mysql_error();}
else{echo "<center><b><br>Your Profile is Updated Successfully</b></br><b><br>Do You want to update your Profile-Face Photo. <a href=\"update_profile_face.php\">Click-Here</a></br></center>";}
}
}
include('template.php');
?>
