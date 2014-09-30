<?php
include('head.php');
$con=mysql_connect("localhost","root","password");
mysql_select_db("rgukt");
$q3="select * from sysdet;";
$q4=mysql_query("$q3");
echo "<center><table><tr ><th>S.No</th><th>Name</th><th>ID.No</th></tr>";
$sl=0;
while($rr=mysql_fetch_array($q4))
{
if($rr['id']==NULL)$sl=$sl--;
if(!$rr['id']==NULL)
echo "<tr><td>$sl</td><td>".$rr['name']."</td><td>".$rr['id']."</td></tr>";
$sl=$sl+1;
}
echo "<tr>Total Strength=70,</tr><br><tr> # of people Submitted= ".--$sl." </tr><br><tr># of people not submitted=". (70-$sl)."</tr><br></table></center>";
include('template.php');
?>
