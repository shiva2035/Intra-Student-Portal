<?
$ip=$_SERVER['REMOTE_ADDR'];
$admip="10.9.20.163";
$admofflineip="127.0.0.1";
if($ip==$admip||$ip==$admofflineip)
{
$dir=scandir("exams/scld/");if(!$dir)echo"error scanning";
foreach($dir as $val)
{
$id=substr("$val",0,7);
$sub=substr("$val",8);
if($val==$id."_".$sub)
{
//$id="B082035";
//$sub="SE";
	$a="exams/scld/".$id."_".$sub.".txt";
	$f=fopen($a,'a+');
	$a1="exams/scld/".$id."_".$sub;
	$f1=fopen($a1,'r');
	$a2="exams/scld/".$id."_".$sub.".txt";
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
$file="exams/scld/".$id."_".$sub.".txt";
$q1=fopen($file,'r');if(!$q1)echo "error1";
$a3="exams/scld/".$id."_".$sub."_FINAL.TXT";
$f3=fopen($a3,'a');
$xx=file_get_contents($file);
$yy=ereg_replace("([0-9]{1,2})-([0-9]{1,2})-([0-9]{4})_([0-9]{1,2})-([0-9]{1,2})-([0-9]{1,2})",'',$xx);
$xxx=fwrite($f3,$yy);if(!$xxx)echo "error22";
$a4="exams/scld/".$id."_".$sub."1.txt";
$f4=fopen($a4,'a+');
$aaa=file_get_contents($a3);
$bbb=ereg_replace("(127.0.1.1)",'',$aaa);
$aaaa=fwrite($f4,$bbb);
$f4=fopen($a4,'r');
while($userinfo= fscanf($f4,"srmodel.AnswerZi@LanswertLjava/lang/String;Lipq~LquestionIDq~LtimeStampq~LuserNameq~xpt%dttSCLD1tt".$id."sq~t%dttSCLD2tq~sq~t%dttSCLD3tq~sq~t%dttSCLD4tq~sq~t%dttSCLD5tq~sq~t%dttSCLD6tq~sq~t%dttSCLD7tq~sq~t%dttSCLD8tq~sq~t%dttSCLD9tq~sq~t%dttSCLD10tq~"))
{
list ($a,$b,$c,$d,$e,$f,$g,$h,$i,$j) = $userinfo;
}
echo "<b><br><hr>".$a.$b.$c.$d.$e.$f.$g.$h.$i.$j."</b></br>";
$a5="exams/scld/".$id."_".$sub.".TXT";
$f5=fclose($f4);
$rrr=fopen($a5,'a+');
$www=fwrite($rrr,$a.$b.$c.$d.$e.$f.$g.$h.$i.$j);
fclose($rrr);
unlink($a4);
unlink("exams/scld/".$id."_".$sub."_FINAL.TXT");
unlink($file);
$con=mysql_connect("localhost","root","password");
if(!$con)echo mysql_error();
$qq1=mysql_select_db("week");
if($sub=='PSP')
{$qq2="insert into $sub values('$id',$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,'0')";}
else
{$qq2="insert into $sub values('$id','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','0')";}
$qq3=mysql_query("$qq2");
if(!$qq3)echo mysql_error();
if($qq3){unlink("exams/scld/".$id."_".$sub);/*unlink("exams/scld/".$id."_".$sub.".TXT");*/}
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
$query="update `week`.`TOTAL` SET `scld`='$count' where `id`='$id';";
$query1=mysql_query($query);
if($query1)unlink("exams/scld/".$id."_".$sub.".TXT");
}}
}
else
{
header('location:http://10.9.20.163/');
}
?>
