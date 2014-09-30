<form action="" method="post"><b><u>Sub_Que:</b></u><input type="text" name="sub_q"><input type="submit" value="post subQ" name="sub_submit">
<?php

	$sub_submit=$_POST['sub_submit'];
	$sub_q=$_POST['sub_q'];
	if($sub_submit)
	{
		$dt2=date('ihs');
		$q7="insert into $tname values('$uname','$sub_q','$dt2');";
		$q8=mysql_query($q7);
		if(!$q8)
		echo "Error".mysql_error();
	}
?>