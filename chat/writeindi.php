<?php
session_start();
include('index.php');
$file=$_SESSION["chatfile"];
$sourc=fopen($file,"a+");
$name= $_SESSION['user'];
$msg=$_POST["msg"];
if($name !="" && $msg !="")
fwrite($sourc,"<font color='blue' size=4>$name>></font>" . "$msg<hr>");
else
echo "no chat session found";
echo "<script>window.location='chatindi.php'</script>"
?>
