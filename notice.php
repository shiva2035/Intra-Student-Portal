<?
session_start();
require_once('head.php');
if(!($_SESSION['user']=="admin"))
{
	include("spot.php");
}
else
{
?>
<br><br>
<center>
<form action="" method="post" name="file" enctype="multipart/form-data" id="form">
<table>
<tr><td>Title of Circular:</td><td><input type="text" name="title"></td></tr>
<tr><td>Message:</td><td><textarea rows=10 cols=60 name=msg></textarea></td></tr>
<tr><td>Add Attachment:</td><td><input type="file" name="file"></td></tr>
<tr><td>Type of Circular:</td><td>
<select name="type">
<option value="Null">Select Type of Circular</option>
<option value="Administration">Administration Notice</option>
<option value="Examination">Examination Notice</option>
<option value="Academic Section">Academic Related Notice</option>
<option value="Officer On Special Duty">Other Notice</option>
</select>
</td></tr>
<tr><td></td><td><input type="submit" name="submit"></td></tr>
</table>
</form>

<?
if(array_key_exists('submit',$_POST))
{

	if(file_exists("notices/".$_FILES["file"]["name"]))
	{
		echo "<br><br><br>File already exist</br>";
	}
	else
	{
		move_uploaded_file($_FILES["file"]["tmp_name"],"notices/".$_FILES["file"]["name"]) or die("File Error: ".$_FILES["file"]["error"]);
		echo "<center><br><br><b><u>Flie ".$_FILES["file"]["name"]."<b> is stored in Notices <br/>";
		mysql_connect('localhost','root','password')or die("Not Connected to MySQL Server because ".mysql_error());
		mysql_select_db("rgukt");

		$todayh = getdate(); //monday week begin reconvert
		$d = $todayh['mday'];
		$m = $todayh['mon'];
		$y = $todayh['year'];
		$date= "$y-$m-$d"; 

		$time=mysql_query("select CURTIME()");
		$tm=mysql_result($time,0,0);
		$tmt=$tm[0].$tm[1].$tm[3].$tm[4].$tm[6].$tm[7];

		$dates=date('h:i A', strtotime($tmt));

		$title=$_POST['title'];
		$msg= $_POST['msg'];
		$link=$_FILES["file"]["name"];	
		mysql_connect("localhost","root","password");mysql_select_db("rgukt");
		$x=mysql_num_rows(mysql_query("select cid from notice"));
		$tid = "BSR".$y.$m.$d.$x;

		$type=$_POST['type'];
		$q1="insert into notice values('$tid','$title','$msg','$link','$date','$dates','$type')";
		mysql_query($q1)or die(mysql_error());
	}
}
echo "<br><br>";
}
include("template.php");
?>
