<html><head><meta http-equiv="refresh" content="5"></head><body>
<?php
session_start();
$chtflnm=$_SESSION["chatfile"];
if(file_exists($chtflnm)) include "$chtflnm";
else echo "The User has Logged Off currently!!!";
?>
</body></html>
