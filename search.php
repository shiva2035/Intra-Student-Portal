<?php
include('head.php');
echo "<br/><br/>";
if(array_key_exists('search',$_POST))
{
	$str=$_POST['inputtext'];
	$submit=$_POST['search'];
	echo "<b>The search results are :<br/></b>";
/*	$s1=scandir("uploads/");
	foreach($s1 as $val)
	{
		if(is_dir($val)){}
		else
		{
			

		}

	}
*/
	mysql_connect("localhost","root","password");
	mysql_select_db("rgukt");
	$q1="select uname,first from studetails where first like '%$str%';";
	$q2=mysql_query("$q1");
	if(!$q2)echo mysql_error();
}

else echo "Enter the word to search";

echo "<br><br><br><br>";
include('template.php');
?>
