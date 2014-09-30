<?php
session_start();
include('index.php');
unlink("chat.dat");
$file=fopen("chat.dat","a+");
fclose($file);
$file1=$_SESSION["chatfile"];
unlink($file1);
echo "<font color='green'><h1><center>The Chat History Have been successfully deleted!!!.Invite another user to chat.</h1></font>";
?>
