<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Logon Page</title>
<link rel="stylesheet" href="css/style.css">
<style type="text/css">
body{
	height:600px;
}
form p{
	font:18px Georgia, "Times New Roman", Times, serif;
	text-align:center;
}
</style>
</head>

<body>
<div class="banner">
<table width="100%" height="100%">
<tr><td>Automatic Receipt Generator</td></tr>
</table>
</div>

<div id="log_form">
<p id="formHead">Login Page</p>
<hr>
<div style="background:#C00; color:#F5F5F5; font:15px Arial, Helvetica, sans-serif; text-align:center;">
<?php if(isset($_SESSION['logerror'])) echo $_SESSION['logerror']; unset($_SESSION['logerror']); ?>
</div>
<div style="background:#090; color:#F5F5F5; font:15px Arial, Helvetica, sans-serif; text-align:center;">
<?php if(isset($_SESSION['logout'])) echo $_SESSION['logout']; unset($_SESSION['logout']); ?>
</div>
<form method="post" action="logonscript.php">
<p>Enter Username:<br> <input type="text" name="uname" size="40" /></p>
<p>Enter Password:<br> <input type="password" name="pword" size="40" /></p>
<p align="center"><input type="submit" value="Login" /></p>
</form>
</div>
</body>
</html>