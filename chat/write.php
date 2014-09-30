<?php

session_start();
//include('index.php');
$file="chat.dat";
$sourc=fopen($file,"a+");
$name= $_SESSION['user'];
$msg=$_POST["msg"];
if($name !="" && $msg !="")
{
$x=fwrite($sourc,"<font color='green' size=4>$name>></font>" . "$msg<hr>");
}
else
{echo "no chat session found";
echo "<script>window.location='chat.php'</script>";}
?>
