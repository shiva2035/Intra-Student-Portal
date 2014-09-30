<style>
#body
{
	//margin-left:0;
	//margin-bottom:10;
	//border:1;
	//border-style:groove;
	//border-color:skyblue;
}
.btns
{
	background-color:brown;
	border-style:none;
	color:white;
	font-style:bolder;
	//-moz-border-radius:5;
	text-transform:uppercase;
}
.btn
{
	background-color:brown;
	border-style:none;
	color:white;
	font-style:bolder;
	//-moz-border-radius:5;
	text-transform:uppercase;
}
</style>
<?php
session_start();
include('head.php');
$con=mysql_connect("localhost","root","password");
$d=date("d");
$m=date("F");
$y=date("Y");
$database="$d"."$m"."$y";
$yd=$d-2;
if($yd<10)
{
	$yd="0".$yd;
}
$yday="$yd"."$m"."$y";
?>
<center>
</br><u align="center"><font color="green">Discussion Forum(RGUKT)</u><br></font><br>
<div id="body">
<?php
if(isset($_SESSION['user']) && $_SESSION!="")
{$id=$_SESSION['user'];}
$ydb=$d-1;
	if($yd<10)
	{
		$ydb="0".$ydb;
	}
	$yesday="$ydb"."$m"."$y";
if(!mysql_select_db("$database"))
{
	mysql_query("create database $database");
	mysql_query("drop database $yday");
}
mysql_select_db("$database");
$today="$d"."$m";
mysql_query("create table $today(IDNo varchar(13),query varchar(600) PRIMARY KEY,ip varchar(12),time varchar(10))");
$time=mysql_query("select CURTIME()");
$tm=mysql_result($time,0,0);
$tmt=$tm[0].$tm[1].$tm[3].$tm[4].$tm[6].$tm[7];
//
if(array_key_exists('comment',$_POST))
{
	$id=$_SESSION['user'];
	$ip=$_SERVER['REMOTE_ADDR'];
	$point=$_POST['point'];
	$qstn=$_POST['qstn'];
	$g=strlen($point);
	for($i=0;$i<$g;$i++)
	{
		if($point[$i]=="'")
		{
			$point[$i]="\'";
		}
	}
	if($point)
	{
		mysql_query("insert into $qstn(IDNo,query,ip,time) values('$id','$point','$ip','$tm')");
		echo "<input type=hidden name=comment value=\"\">";
	}
}
else if(array_key_exists('new',$_POST))
{
	$id=$_SESSION['user'];
	$ip=$_SERVER['REMOTE_ADDR'];
	$point=$_POST['qstn'];
	$g=strlen($point);
	for($i=0;$i<$g;$i++)
	{
		if($point[$i]=="'")
		{
			$point[$i]="\'";
		}
	}
	if($point)
	{	if(mysql_query("insert into $today(IDNo,query,ip,time) values('$id','$point','$ip','$tm')"))
		{
			$qid=$id."_".$tmt;
			mysql_query("create table $qid(IDNo varchar(13),query varchar(300),ip varchar(12),time varchar(10),primary key(IDNo,query))") or die("Table not created because :  ".mysql_error());
		}
	}
}
else if(array_key_exists('ydaycmt',$_POST))
{	
	mysql_select_db("$yesday");
	$id=$_SESSION['user'];
	$ip=$_SERVER['REMOTE_ADDR'];
	$point=$_POST['point'];
	$qstn=$_POST['qstn'];
	$g=strlen($point);
	for($i=0;$i<$g;$i++)
	{
		if($point[$i]=="'")
		{
			$point[$i]="\'";
		}
	}
	$idn=$id.$tmt;
	if($point)
	{
		mysql_query("insert into $qstn(IDNo,query,ip,time) values('$id','$point','$ip','$tm')");
		echo "<input type=hidden name=comment value=\"\">";
	}
}
//today's posts
$total=mysql_query("select * from $today order by time desc");
while($ids=mysql_fetch_array($total))
{
	//todays comments-form
	echo "<form action=\"\" method=\"POST\">";
	echo "<input type=hidden name=comment value=true>";
	$d=1;
	$tim=$ids['time'];
	$ttt=$tim[0].$tim[1].$tim[3].$tim[4].$tim[6].$tim[7];
	$qqid=$ids['IDNo']."_".$ttt;
	$query=mysql_query("select * from $qqid order by time");
	if(!$query)echo mysql_error();
	$in=$ids['IDNo'];
	$idno= $in[0].$in[1].$in[2].$in[3].$in[4].$in[5].$in[6];
	echo "<table align=center width=100% style={background-color:white;border:1px;border-left-style:solid;border-right-style:solid;border-bottom-style:solid;border-top-style:dashed;}>";
	echo "<tr style={background-color:black;color:white;}><td width=100><B><FONT COLOR=\"#FFFFFF\">".$idno."'s: </b></td><td width=400>".$ids['query']."</td><td width=100>".$ids['time']."</td></tr>";
	while($all=mysql_fetch_array($query))
	{	
		$in=$all['IDNo'];
		$idno=$in[0].$in[1].$in[2].$in[3].$in[4].$in[5].$in[6];
		{
			echo "<tr><td>";
			if(!isset($_SESSION['user'])){echo "<b>".$idno."</b>:";}
			else
			{
				if($idno!=$_SESSION['user'])echo $idno;
				else{ echo "<b>Your's</b>";}
			}
			echo "</td><td>".$all['query']."</td><td>".$all['time']."</td>";
			echo "</tr>";
		}
	}

	if(isset($_SESSION['user']) && $_SESSION!="")
	{
		echo "<tr><input type=hidden name=qstn value=\"".$qqid."\">";
		{
			echo "<td><font size=2 color=red>Comment It:</td><td><input type=text name=point maxlength=300 size=100 class=\"text\"></td><td><input type=submit name=SUBMIT value=\"Submitt\" class=btn></td></tr>";
		}
	}
	echo "</table>";
	echo "</form>";
}
//yesterday's posts
$c=mysql_select_db("$yesday");if(!$c)("Noooooooooo".mysql_error());
$d=date("d");
$m=date("F");
$y=date("Y");
$ad=($d-1);
$ydy="0$ad"."$m";
$total=mysql_query("select * from $ydy order by time desc");
if($total)
if(mysql_num_rows($total))
{
	echo "<p style=\"color:red;\">".$ydy ." Queries</p><br/>";
	while($ids=mysql_fetch_array($total))
	{
	//comment ydays posts-display
	echo "<form action=\"\" method=\"POST\">";
	echo "<input type=hidden name=ydaycmt value=true>";
	$d=1;
	$tim=$ids['time'];
	$ttt=$tim[0].$tim[1].$tim[3].$tim[4].$tim[6].$tim[7];
	$qqqid=$ids['IDNo']."_".$ttt;
	$query=mysql_query("select * from ".$qqqid." order by time desc");
	if(!$query)echo "<u><b>".mysql_error()."</b></u>";
	$in=$ids['IDNo'];
	$idno=$in[0].$in[1].$in[2].$in[3].$in[4].$in[5].$in[6];
	echo "<table border=0 width=1120>";
	{
			echo "<tr><td width=\"150\"><img src=\"profile-face/".$idno.".jpg\" width=120 height=120></td>";
			echo "<th  style=\"width:820px;\"><b>".$idno."'s QUERY(yday):-</b>".$ids['query']."</th><th style=\"width:50px;\">&nbsp;".$ids['time']."&nbsp;&nbsp;</th></td></tr>";
	}

	while($all=mysql_fetch_array($query))
	{	
			$in=$all['IDNo'];
			$idno=$in[0].$in[1].$in[2].$in[3].$in[4].$in[5].$in[6];
		
		{
			echo "<tr class=dt><td align=center style=\"width:30px;text-align:center;\">";
			if(!isset($_SESSION['user'])){echo $idno;}
			else{if($idno!=$_SESSION['user'])echo $idno;
			else{echo "Your's Comment";}}
			echo "</td><td>".$all['query']."</td><td align=center >&nbsp;".$all['time']."&nbsp;&nbsp;</td></tr>";
		}
	}
	if(isset($_SESSION['user']) && $_SESSION!="")
	{
	echo "<tr><td align=center>";
	echo "<input type=hidden name=qstn value=\"".$qqqid."\">";
	{
	echo "<font size=2>Comment It(yday's):</td><td> <input type=text name=point maxlength=300 size=100 class=\"text\"></td><td align=center><input type=submit name=SUBMIT value=\"Submit\" class=btn>";
	}
	}
	echo "</td></tr></table>";
	echo "</form>";
	}
}
if(!isset($_SESSION['user'])){echo "<font color=blue><b style={background-color:white;}>Please login to post your Queries/Comments <a href=login.php>Login-Here</a>.</font></b><br><br>";}
if(isset($_SESSION['user']) && $_SESSION!="")
{
	//Main query form
	echo "<form action=\"\" method=POST><input type=hidden name=new value=true><table align=center width=800><tr><td align=\"center\"><b>Enter Your Main Query:</b></td></tr><tr><td><textarea cols=150 rows=3 name=qstn></textarea></td></tr><tr><td align=center><input type=submit name=SUBMIT value=\"Submit Main Query\" class=btns> <input type=reset name=reset value=\"Reset Input\" class=btns></td></tr></table></form>";
}
mysql_close($con);
?>
</div>
</center>
</body>
<?
	include('template.php');
?>
