<?
$sl=1;
$row=scandir("PSP");
foreach($row as $value)
{
?>
<table padding="0" cellspacing="2"  id="tabl" align="center"><tr><td  width="25" id="sl">
<?php if(is_dir($value)){} if(!is_dir($value)){
echo $sl;
$sl=$sl+1;
$id=substr("$value",0,7);
$sub=substr("$value",8);
echo $sub."<br>";
echo $id;
?>
</td><td width="500"><p><?php  echo "<a href=\"exams/$value\">".$value."</a>" ;} ?></td></tr></table>
</html></center>
<?php
}
?>
