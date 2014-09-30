<?php 
session_start();
include('index.php');
if(!(isset($_SESSION['user'])))
header('location:index.html');
$con=mysql_connect('localhost','root','password');
if(!$con)echo "not connected";
mysql_select_db("rgukt");
$qry="select * from logged_in";
$rs=mysql_query("$qry");
if(!$rs)echo "Currently there are no user's present in online";
echo "<meta http-equiv='refresh' content='20'><body><center><font color='maroon'><h2>Online Users</h2>";
echo "<form action='gochat.php' method='post'><select name='chatuser'>";
echo "<option value=\"select_user\">Select a User to Chat with him/her</option>";
while($rr=mysql_fetch_array($rs))
{
if($rr['uname']!=$_SESSION['user'])
echo "<option>".$rr['uname']."</option>";
}
echo "</select><input type='submit' value='Go-Chat' name='submit'></form><hr>";
?>
