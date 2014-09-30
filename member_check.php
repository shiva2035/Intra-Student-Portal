<?php
$db=mysql_connect("localhost","root","password");
if($db)
{

	if(mysql_select_db("rgukt"))
	{
		$q1="select  *  from studetails where uname = \"$uname\"; ";
		$q2=mysql_query($q1);

		while($row=mysql_fetch_array($q2))
		{
			if($uname !=$row["uname"] && $pass !=$row["pass1"])
			{
				echo "You don't have previleges to view this page";				
			}
			if($uname==NULL || $pass==NULL || ($uname==NULL && $pass==NULL))
			{
				echo "Enter correct details";
			}
			if($uname=='' || $pass =='' || ($uname=='' && $pass==''))
			{	
				echo "Enter correct details";
			}
			else if($uname ==$row["uname"] && $pass ==$row["pass1"])
			{
					include("head.php");
					$_SESSION['user']="$uname";
					$_SESSION['pass']="$pass";
					header('location:index.php');
					echo "<b>Wel Come Mr.".$_SESSION['user'];	
			}
		}
		if(!$q2){echo mysql_error();}
	}
	else
	{
		echo mysql_error();
	}
}
else
{
echo "Not connected to the database because,".mysql_error();
}
?>
