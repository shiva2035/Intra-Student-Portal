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
$file="exams/flat/".$id."_".$sub.".txt";
$q1=fopen($file,'r');if(!$q1)echo "error1";
$a3="exams/flat/".$id."_".$sub."_FINAL.TXT";
$f3=fopen($a3,'a');
$xx=file_get_contents($file);
$yy=ereg_replace("([0-9]{1,2})-([0-9]{1,2})-([0-9]{4})_([0-9]{1,2})-([0-9]{1,2})-([0-9]{1,2})",'',$xx);
$xxx=fwrite($f3,$yy);if(!$xxx)echo "error22";
$a4="exams/flat/".$id."_".$sub."1.txt";
$f4=fopen($a4,'a+');
$aaa=file_get_contents($a3);
$bbb=ereg_replace("(127.0.1.1)",'',$aaa);
$aaaa=fwrite($f4,$bbb);
$f4=fopen($a4,'r');
unlink("exams/flat/".$id."_".$sub."_FINAL.TXT");
unlink($file);

}}
?>
