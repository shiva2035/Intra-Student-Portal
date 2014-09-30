<?php
mysql_connect("localhost","root","password");
$db=mysql_select_db("rgukt");
//$uname=$_SESSION['user'];
$q1="select * from logged_in;";
$q2=mysql_query("$q1");
if(!$q2){echo mysql_error();}
echo "<b><center>The people who are in online now</b></center>";
while($rr=mysql_fetch_array($q2))
{
	if($rr['status']=='yes')
		echo $rr['uname']."<br/>";
}
?>
