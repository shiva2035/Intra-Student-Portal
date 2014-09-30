<?
mysql_connect("localhost","root","password") or die("NO database selected");
mysql_select_db("exams");
$qq4="SELECT * FROM TOTAL;";
$qq5=mysql_query($qq4);if(!$qq5)echo "<hr>".mysql_error();
while($rr=mysql_fetch_array($qq5))
{
	$total=($rr['flat']+$rr['se']+$rr['scld']+$rr['psp']);
	$query2="update `week`.`TOTAL` SET total=$total;";
	$query3=mysql_query($query2);
}

?>
