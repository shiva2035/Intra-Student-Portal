<?php
include('index.php');
session_start();
if(!$_SESSION["id"]==session_id())
header('location:index.html');
if(!isset($_SESSION['id']))
header('location:index.html');
$con=odbc_connect('questans','','');
$qry="select * from questans";
$ans=0;
$i=0;
$rs=odbc_exec($con,$qry);
while(odbc_fetch_row($rs))
{
	$i++;
	$opt="opt".$i;
	if($_POST[$opt]==odbc_result($rs,6))
	{
		$ans++;
	}
	
}

$total=$_SESSION["count"];
$wrong=$total-$ans;
$perc=$ans*100/$total;
echo "<html><head><title>BCA Result</title></head><body><font color='blue'><center>";
echo "<h2>The total no. of Questions:-".$total."</h2>";
echo "<h2>The total no. of Correctly Answered Questions:-".$ans."</h2>";
echo "<h2>The total no. of Wrongly Answered Questions:-".$wrong."</h2>";
echo "<h2>The total Percentage of Correct Answers:-".$perc."%</h2>";
echo "</body></html>";

?>
