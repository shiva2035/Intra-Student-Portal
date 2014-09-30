<style>
#menus
{
	list-style:none;
	color:green;
}
#menus a
{
	font-weight:bold;
	align:center;
}
#menus a:hover
{
	border-style:double;
	list-style:none;
	color:green;
	background-color:white;
}
</style>
<?
	mysql_connect('localhost','root','password')or die("Not Connected to MySQL Server because ".mysql_error());
	mysql_select_db("rgukt");
	$q1="select * from notice order by cid desc";
	$q2=mysql_query($q1)or die(mysql_error());
	echo "<div>";
	echo "<center><p><b>All Notices Archives</b></p>";
	$sl =0;
	echo "<table>";
	echo "<tr style=\"{background-color:orange;color:white;}\"><th>Sl.No</th><th>Circular</th><th>Time</th><th>Date of Post</th></tr>";
	while($row=mysql_fetch_array($q2))
	{
		$sl = $sl+1;
		$date = date("d",strtotime($row['date']))."/".date("m",strtotime($row['date']))."/".date("y",strtotime($row['date']));
		echo "<tr style=\"{background-color:pink;color:white;}\"><td>$sl</td><td><a href=\"viewCircular.php?circular=".$row['cid']."\">".$row['title']."</a></td><td>".$row['time']."</td><td>$date</td></tr>";
	}
	echo "</table>";
	echo "</div>";
?>
