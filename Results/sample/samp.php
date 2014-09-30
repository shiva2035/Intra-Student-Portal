<?
$dir=scandir("exams/flat/");if(!$dir)echo"error scanning";
foreach($dir as $val)
{$id=substr("$val",0,7);
$sub=substr("$val",8);
if($val==$id."_".$sub)
{
	$a="exams/flat/".$id."_".$sub.".txt";
	$f=fopen($a,'a+');
	$a1="exams/flat/".$id."_".$sub;
	$f1=fopen($a1,'r');
	$a2="exams/flat/".$id."_".$sub.".txt";
	$f2=fopen($a2,'a');
while(!feof($f1))
{
$x=fgetc($f1);
if(!ctype_space($x)&&ctype_graph($x))
{
$y=fwrite($f2,$x);
}
}
fclose($f);fclose($f1);fclose($f2);
//$file="exams/B082035_PSP.txt";
$file="exams/flat/".$id."_".$sub.".txt";
$q1=fopen($file,'r');if(!$q1)echo "error1";
//$a3="exams/B082035_PSP_FINAL.TXT";
$a3="exams/flat/".$id."_".$sub."_FINAL.TXT";
$f3=fopen($a3,'a');
$xx=file_get_contents($file);
$yy=ereg_replace("([0-9]{1,2})-([0-9]{1,2})-([0-9]{4})_([0-9]{1,2})-([0-9]{1,2})-([0-9]{1,2})",'',$xx);
$xxx=fwrite($f3,$yy);if(!$xxx)echo "error22";
$f4=fopen($a3,'r');
if($sub=='PSP')
{
while($userinfo= fscanf($f4,"srmodel.AnswerZi@LanswertLjava/lang/String;Lipq~LquestionIDq~LtimeStampq~LuserNameq~xpt%dt127.0.1.1tPSP1tt".$id."sq~t%dt127.0.1.1tPSP2tq~sq~t%dt127.0.1.1tPSP3tq~sq~t%dt127.0.1.1tPSP4tq~sq~t%dt127.0.1.1tPSP5tq~sq~t%dt127.0.1.1tPSP6tq~sq~t%dt127.0.1.1tPSP7tq~sq~t%dt127.0.1.1tPSP8tq~sq~t%dt127.0.1.1tPSP9tq~sq~t%dt127.0.1.1tPSP10tq~sq~t%dt127.0.1.1tPSP11tq~sq~t%dt127.0.1.1tPSP12tq~"))
{
list ($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l) = $userinfo;
//echo "<b><br>".$a.$b.$c.$d.$e.$f.$g.$h.$i.$j.$k.$l."</b></br>";
}
}
else
{
if($sub=="FLAT")$sub="POM";
while($userinfo= fscanf($f4,"srmodel.AnswerZi@LanswertLjava/lang/String;Lipq~LquestionIDq~LtimeStampq~LuserNameq~xpt%dt127.0.1.1t".$sub."1tt".$id."sq~t%dt127.0.1.1t".$sub."2tq~sq~t%dt127.0.1.1t".$sub."3tq~sq~t%dt127.0.1.1t".$sub."4tq~sq~t%dt127.0.1.1t".$sub."5tq~sq~t%dt127.0.1.1t".$sub."6tq~sq~t%dt127.0.1.1t".$sub."7tq~sq~t%dt127.0.1.1t".$sub."8tq~sq~t%dt127.0.1.1t".$sub."9tq~sq~t%dt127.0.1.1t".$sub."10tq~sq~t%dt127.0.1.1t"))
{
list ($a,$b,$c,$d,$e,$f,$g,$h,$i,$j) = $userinfo;
//echo "<b><br>".$a.$b.$c.$d.$e.$f.$g.$h.$i.$j.$k.$l."</b></br>";
}
if($sub=="POM")$sub="FLAT";
}
fclose($f4);
$con=mysql_connect("localhost","root","password");
if(!$con)echo mysql_error();
//$aa1="exams/B082035_PSP.TXT";
$aa1="exams/".$id."_".$sub.".TXT";
$final=fopen($aa1,'a+');
$subj=strtolower($sub);
$qq1=mysql_select_db("week");
if($subj=='psp')
{$qq2="insert into $sub values('$id',$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,'0')";}
else
{$qq2="insert into $sub values('$id','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','0')";}
$qq3=mysql_query("$qq2");
if(!$qq3)echo mysql_error();
$ch=fwrite($final,$a.$b.$c.$d.$e.$f.$g.$h.$i.$j);
if($ch)
fclose($final);
fclose($q1);fclose($f3);
//unlink("exams/B082035_PSP.txt");
unlink("exams/flat/".$id."_".$sub.".txt");
//unlink("exams/B082035_PSP_FINAL.TXT");
unlink("exams/flat/".$id."_".$sub."_FINAL.TXT");
if($qq3){unlink("exams/flat/".$id."_".$sub);unlink("exams/".$id."_".$sub.".TXT");}
mysql_select_db("week");
$qq4="SELECT * FROM `keys` WHERE sub = '$sub'";
$qq5=mysql_query($qq4);if(!$qq5)echo "<hr>".mysql_error();
$count=0;
while($rr=mysql_fetch_array($qq5))
{
if($rr['q1']==$a)++$count;echo $count;
if($rr['q2']==$b)++$count;echo $count;
if($rr['q3']==$c)++$count;echo $count;
if($rr['q4']==$d)++$count;echo $count;
if($rr['q5']==$e)++$count;echo $count;
if($rr['q6']==$f)++$count;echo $count;
if($rr['q7']==$g)++$count;echo $count;
if($rr['q8']==$h)++$count;echo $count;
if($rr['q9']==$i)++$count;echo $count;
if($rr['q10']==$j)++$count;echo $count;
if($sub=='PSP'){if($rr['q11']==$k) ++$count;echo $count;if($rr['q12']==$l) ++$count;echo $count;}
}
echo "<h1>You have got ".$count."Marks</h1>";
$qq6="update `week`.`$sub` SET `total`='$count' where `id`='$id';";
$qq7=mysql_query($qq6);
if(!$qq7)echo mysql_error();
}
}
?>
