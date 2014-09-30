<?include('head.php');?>
<style>
#div
{
width:200;
height:400;
background-color:orange;
float:left;
}
</style>
<body bgcolor="skyblue">
<div id="div"><br>
<u><h3><?php if(isset($_SESSION['user']))echo "Welcome Mr:".$_SESSION['user']?></h3></u><br>
<a href="chatuser.php">Invite User to Chat</a><br><br>
<a href="deletechat.php">Clear chat history</a><br><br>
</div>
<div style="background-color:white;">
<?
	if(!isset($_SESSION['user']))header('location:index.html');
	$uname=$_SESSION['user'];
	mysql_connect("localhost","root","password")or die("no database connected");;
	mysql_select_db('temp_chat')or die("no table connected");
	$time=mysql_query("select CURTIME()");
	$tm=mysql_result($time,0,0);
	$tmt=$tm[0].$tm[1].$tm[3].$tm[4].$tm[6].$tm[7];
	$q2="select * from acc where `to`=\"$uname\";";
	$q3=mysql_query("$q2");
	if(!$q3)echo mysql_error();
	while($rr=mysql_fetch_array($q3))
	{
		echo $rr['from']." wants to chat with you now".$rr['message'];
		if(array_key_exists('accept',$_POST))
		{
			$s1="delete from acc where `from` = \"".$rr['from']."\"";
			$s2=mysql_query($s1);
			$uname1=$_SESSION['user'];
			$uname2=$rr['from'];
			if(!$s2)echo mysql_error();
			$chtflnm1="chat/".$uname2.$uname1.".dat";
			$chtflnm2="chat/".$uname1.$uname2.".dat";

			$finalfl="";
			if(file_exists($chtflnm1))
			$finalfl=$chtflnm1;

			if(file_exists($chtflnm2))
			$finalfl=$chtflnm2;

			if((!file_exists($chtflnm1)) && (!file_exists($chtflnm2)))
			$finalfl=$chtflnm1;
			fopen($finalfl,"a+");
			$_SESSION["chatfile"]=$finalfl;
			header('location:chatboxindi.php');
		}
	}
?></div>
