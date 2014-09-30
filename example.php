<?php 
session_start();
if(!(isset($_SESSION['user'])))
header('location:index.html');
$con=mysql_connect('localhost','root','password');
if(!$con)echo "not connected";
mysql_select_db("rgukt");
$qry="select * from logged_in ";
$rs=mysql_query("$qry");
if(!$rs)echo "Currently there are no user's present in online";
echo "<meta http-equiv='refresh' content='20'><body><center><font color='maroon'><h2>Online Users</h2>";
$qw="select * from row_wise;";
$qw2=mysql_query("$qw");if(!$qw2)echo mysql_error();
echo "<table>";
while($rl=mysql_fetch_array($qw2))
while($rr=mysql_fetch_array($rs))
{
if($rr['uname']==$rl['C']) echo "<td>".$rl['C']."</p></td></table>";else echo "error";

}

