<?php
	mysql_connect('localhost','root','password')or die("Not Connected to MySQL Server because ".mysql_error());
	mysql_select_db("rgukt");
	$q1="select * from attendance";
	$q2=mysql_query($q1);
	echo "<table align=center>";
	echo "<tr style={text-align:center;background-color:FFAA99;color:white;}><th style={width:50;text-align:center;}>Sl.No</th><th style={width:100;text-align:center;}>Class</th><th style={width:250;text-align:center;}>Department</th><th style={width:100;text-align:center;}>#Present</th><th style={width:100;text-align:center;}>#Absent</th><th style={width:100;text-align:center;}>#Total</th><th style={width:300;text-align:center;}>Absent IDs</th></tr>";
	$sl=1;
	while($row=mysql_fetch_array($q2))
	{
		?>
		<tr style={width:50;text-align:center;background-color:silver}><td><? echo $sl; ?></td><td><? echo $row['class'];?></td><td><?echo $row['dept'];?></td><td><?echo $row['present'];?></td><td><?echo $row['absent'];?></td><td><?echo $row['total'];?></td><td><?echo $row['absent_id'];?></td></tr>
		<?
		$sl++;
	}
	echo "</table>";
	

?>
</body>
