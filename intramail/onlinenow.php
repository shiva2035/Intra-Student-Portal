<title>::Online Users::</title>
<style>#onlineuser
{
//background-color:green;
color:green;
font-weight:bolder;
margin-left:300;
}
</style>
<?php
mysql_connect("localhost","root","password");
$db=mysql_select_db("rgukt");
$qq1="select count(uname) from logged_in;";
$qq2=mysql_query($qq1);
$q1="select * from logged_in;";
$q2=mysql_query("$q1");
if(!empty($q2)){echo "<b><center><u><font color=red>People who are in online now</font></b></center></u>";}
else{echo "<br/><br/><h1><center>There are no users are present online now<br/><br/>";}
if(!$q2){echo mysql_error();}
while($rr=mysql_fetch_array($q2))
{
	if($rr['status']=='yes')
	{
		echo "<p id=onlineuser>".$rr['uname'];
	}
}
?>
