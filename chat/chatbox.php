<?php 
echo "<meta http-equiv=\"refresh\" content=\"15\">";
session_start();
include('index.php');
?>
<html>
<head>
<title>::Chat Room::</title>
</head>
<body bgcolor="green">
<center>
<h1><font color="maroon"><u>Chat Room</h1></u>
<iframe src="chat.php" name="read" width="40%" height="40%"></iframe>
<form name="form1" method="post" action="write.php" target="read">
Message:<input type="text" name="msg" size=20 onclick="msg.value=''">
<input type="submit" value="Chat">
</form>
</body>
</html>

