<?php
session_start();
require_once('test.php');
include('head.php');
?>
<style>
#form
{
	align:center;
	color:green;
	//background-color:brown;
	margin-top:50px;
	margin-left:250px;
	margin-right:400px;
}

</style>
<center>
<?php
if(!array_key_exists("disp",$_POST))
{
?>
<br><br><center><b><font color="green"> Upload Your File To Share </b></center>
<form action="" method="post" name="file" enctype="multipart/form-data" id="form">
<input type="file" name="file">
<input type="submit" value="Upload-Here" name="upload">
<input type="hidden"name="disp"value="true">
</form></center>
</html>
<?php
}
if(array_key_exists("upload",$_POST))
{
			if(file_exists("uploads/".$_FILES["file"]["name"]))
				{
					echo "<br><br><br>File already exist</br>";
				}
			else
				{
					move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/".$_FILES["file"]["name"]) or die("File Error: ".$_FILES["file"]["error"]);
					echo "<center><br><br><b><u>Flie ".$_FILES["file"]["name"]."<b> is stored in uploads <br/>";
				}
echo "<br/><b>File Name :  ".$_FILES["file"]["error"];

echo "<br/><b>File Name :  ".$_FILES["file"]["name"];
echo "<br/><b>File Type:  ".$_FILES["file"]["type"];
echo "<br/><b>File size :  ".($_FILES["file"]["size"])/1024 ."Kbs</center>";
}
?>
</u><center><h><b><br><blink>Files uploaded till now are:</h1></b></center></br></blink></font>
<?php
$sl=1;
$row=scandir("uploads");?>
<table padding="0" cellspacing="2"  id="tabl" align="center">
<tr style="{background-color:green;color:white;}"><td width=100 align=center>SL.No</td><td width=400>File Name</td><td width=150>File Size[KB]</td></tr><?
foreach($row as $value)
{
	if(is_dir($value)){}
	else
	{
		?>
		<tr><td  width="25" id="sl" align=center  style="{background-color:pink;}">
		<?php if(!is_dir($value)){
		echo $sl;
		$sl=$sl+1;
		?>
		</td><td  style="{background-color:pink;}"><?php  echo "<a href=\"uploads/$value\">".$value."</a>" ; ?></td><td style="{background-color:pink;text-align:center;}"><? echo ceil(filesize("uploads/".$value)/1024). "Kbs";}?></td></tr>
		</html></center>
		<?php
	}
}
echo "</table>";
echo "<br><br>";
include('template.php');
?>
