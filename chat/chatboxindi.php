<?php
session_start();
include('index.php');
if(!(isset($_SESSION['user'])))
header('location:index.html');
?>
<title>::Chat Room::</title><body bgcolor="pink">
<center>
<h1><font color="maroon">::Chat Room::</h1>
<iframe src="chatindi.php" name="read" width="60%" height="40%"></iframe>
<br>
<form name="form1" method="post" action="writeindi.php" target="read">
Message:<input type="text" name="msg" size=80 onclick="msg.value=''">
<br>
<input type="submit" value="Chat">
</form>
<center>
<br>
<a href="chatuser.php">Go To Home Page</a>
</center>
</body>
</html>
