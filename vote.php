<?php
	session_start();
	require_once('test.php');
	include('head.php');
	$db=mysql_connect("localhost","root","password");
	mysql_select_db("rgukt");
	if(array_key_exists('submit',$_POST))
	{
		$uname=$_SESSION['user'];
		$vote=$_POST['vote'];
		$d1="create table survey(id varchar(10),vote varchar(2),ip varchar(10),primary key(id));";
		$d2=mysql_query($d1);
		$q1="insert into survey values('$uname','$vote','ip');";
		$q2=mysql_query("$q1");
		if($q2){echo "<center><b>You have voted to ".$vote."</b>. <a href=\"\">Return to see results</a></center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";}
		if(!$q2)
		echo "<center><b>Your vote is already submitted.<a href=\"\">Return to see results</a></b></center><br><br><br><br><br><br><br><br>";
	}
	else{
	$x=0;
	$y=0;
	$q3="select * from survey;";
	$q4=mysql_query($q3);
		while($r=mysql_fetch_array($q4))
		{
			if($r['vote']=='x') {$x++;}
			else $y++;
		}
	$vx=$x;
	$vy=$y;
	?>
	<style>
	#votesx
	{
	height:20;
	width:<? echo $x*3;?>;
	background-color:red;
	}
	#votesy
	{
	height:20;
	width:<? echo $y*3;?>;
	background-color:red;
	}
	#td2
	{
	//color:red;
	border-radius:25;
	}
	#td1
	{
	color:red;
	font-size:14pt;
	border-radius:25;
	}
	#tab
	{
	//border:3;
	//border-color:green;
	//border-style:solid;
	//margin-left:300;
	}
	#fs
	{
		border:1;
		border-color:skyblue;
		border-style:solid;
		margin-left:300;
		margin-right:384;
	}
	#tab2
	{
		margin-top:30;
		margin-left:300;
	}
	#update
	{
		//color:white;
		//background-color:black;
	}
	</style>
	<form action="" method="post" id="tab2">
	<input type="radio" value="x" name="vote">Vote for X<br/>
	<input type="radio" value="y" name="vote">Vote for Y<br/>
	<input type="submit" value="vote" name="submit"></form>
	<legend id="update" title="Updates"><div id="fs">Score Card:<font color="blue"><marquee direction=left scrollamount=4 onmouseover="stop()" onmouseout="start()" width="400"><?if($x>$y) echo "Till now X is in leading position with $x votes";else echo "Till now Y is in leading position with $y votes";if($x==$y)echo "Now X and Y are in equal position with $x votes"?></marquee></font></legend>
	<table id=tab align=center><th>Total number of votes=70</th>
	<tr><td id="td1">No of votes for <b>x</b> = <?php  echo  $x;?></td><td width="210" bgcolor="green" id="td2"><div id="votesx"></div></td></tr>
	<tr><td id="td1">No of votes for <b>y</b> = <?php  echo  $y;?></td><td width="210" bgcolor="green" id="td2"><div id="votesy"></div></td></tr>
	</table>
	</div><br><br>
<?php
}
include('template.php');
?>
