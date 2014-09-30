<?
if(array_key_exists('submit',$_POST))
{
	$ip=$_SERVER['REMOTE_ADDR'];
	$admip="127.0.0.1";
	$admofflineip="127.0.0.1";
	if($ip==$admip||$ip==$admofflineip)
	{
		$folder=$_POST['folder'];
		$dir=scandir("exams/$folder/");if(!$dir) echo"error scanning";
		echo count($dir)-1;
		foreach($dir as $val)
		{
			$id=substr("$val",0,7);
			$sub=substr("$val",8);
			if(!is_dir($val)||$val=='tst')
			{
				rename("exams/$folder/".$val,"exams/$folder/".$id."_".strtoupper($sub));
			}			
			mysql_connect("localhost","root","password");
			mysql_select_db("exams");
			$sub=strtolower($sub);
			$d1="create table $sub(id varchar(10), q1 int(11),q2 int(11),q3 int(11),q4 int(11), q5 int(11),q6 int(11),q7 int(11),q8 int(11),q9 int(11),q10 int(11),total int(11))";
			$d2=mysql_query($d1);
			$sub=strtoupper($sub);
			if($val==$id."_".$sub)
			{
				$sub=strtolower($sub);
				$a="exams/$folder/".$id."_".$sub.".txt";
				$f=fopen($a,'a+');
				$a1="exams/$folder/".$id."_".strtoupper($sub);
				$f1=fopen($a1,'r');
				$sub=strtolower($sub);				
				$a2="exams/$folder/".$id."_".$sub.".txt";
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
				$file="exams/$folder/".$id."_".$sub.".txt";
				$q1=fopen($file,'r');if(!$q1)echo "error1";
				$a3="exams/$folder/".$id."_".$sub."_FINAL.TXT";
				$f3=fopen($a3,'a');
				$xx=file_get_contents($file);
				$yy=ereg_replace("([0-9]{1,2})-([0-9]{1,2})-([0-9]{4})_([0-9]{1,2})-([0-9]{1,2})-([0-9]{1,2})",'',$xx);
				$xxx=fwrite($f3,$yy);if(!$xxx)echo "error22";
				$a4="exams/$folder/".$id."_".$sub."1.txt";
				$f4=fopen($a4,'a+');
				$aaa=file_get_contents($a3);
				$bbb=ereg_replace("(127.0.1.1)",'',$aaa);
				$aaaa=fwrite($f4,$bbb);
				$f4=fopen($a4,'r');
				$sub=strtoupper($sub);
				while($userinfo= fscanf($f4,"srmodel.AnswerZi@LanswertLjava/lang/String;Lipq~LquestionIDq~LtimeStampq~LuserNameq~xpt%dtt".$sub."1tt".$id."sq~t%dtt".$sub."2tq~sq~t%dtt".$sub."3tq~sq~t%dtt".$sub."4tq~sq~t%dtt".$sub."5tq~sq~t%dtt".$sub."6tq~sq~t%dtt".$sub."7tq~sq~t%dtt".$sub."8tq~sq~t%dtt".$sub."9tq~sq~t%dtt".$sub."10tq~"))
				{
					list ($a,$b,$c,$d,$e,$f,$g,$h,$i,$j) = $userinfo;
					//echo "Count:".count($userinfo)."<br>";
				}
				$sub=strtolower($sub);
				$a5="exams/$folder/".$id."_".$sub.".TXT";
				$f5=fclose($f4);
				$rrr=fopen($a5,'a+');
				$www=fwrite($rrr,$a.$b.$c.$d.$e.$f.$g.$h.$i.$j);
				fclose($rrr);
				unlink($a4);
				
				echo $a.$b.$c.$d.$e.$f.$g.$h.$i.$j;
				unlink("exams/$folder/".$id."_".$sub."_FINAL.TXT");
				unlink($file);
				$con=mysql_connect("localhost","root","password");
				if(!$con)echo mysql_error();
				$qq1=mysql_select_db("exams");
				
				$qq2="insert into $sub values('$id','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','0')";
				$qq3=mysql_query("$qq2");
				if(!$qq3)echo mysql_error();
				if($qq3){unlink("exams/$folder/".$id."_".strtoupper($sub));unlink("exams/$folder/".$id."_".strtolower($sub).".TXT");}
				mysql_select_db("exams");
				$qq4="SELECT * FROM `keys` where sub = '$sub'";
				$qq5=mysql_query($qq4);if(!$qq5)echo "<hr>".mysql_error();
				$count=0;
				while($rr=mysql_fetch_array($qq5))
				{
					if($rr['q1']=="$a"){$count=$count+1;echo $count;}
					if($rr['q2']=="$b"){$count=$count+1;echo $count;}
					if($rr['q3']=="$c"){$count=$count+1;echo $count;}
					if($rr['q4']=="$d"){$count=$count+1;echo $count;}
					if($rr['q5']=="$e"){$count=$count+1;echo $count;}
					if($rr['q6']=="$f"){$count=$count+1;echo $count;}
					if($rr['q7']=="$g"){$count=$count+1;echo $count;}
					if($rr['q8']=="$h"){$count=$count+1;echo $count;}
					if($rr['q9']=="$i"){$count=$count+1;echo $count;}
					if($rr['q10']=="$j"){$count=$count+1;echo $count;}
				}			
				$qq6="update `exams`.`$sub` SET `total`='$count' where `id`='$id';";
				$qq7=mysql_query($qq6)or die(mysql_error());
				if(!$qq7)echo mysql_error();
				$query="update `exams`.`total` SET `$sub`='$count' where `id`='$id';";
				$query1=mysql_query($query);
				if($query1)unlink("exams/$folder/".$id."_".$sub.".TXT");
				echo "<h1><font color=red>$id</font> got ".$count."Marks</h1>";
			}
			
		}
	}
}
	else
	{	
		header("location:init.php");
	}

?>
