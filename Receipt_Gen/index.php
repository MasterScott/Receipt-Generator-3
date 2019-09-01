<?php
session_start();
if(isset($_SESSION['adminuser'])){
	unset($_SESSION['receipt_no']);
	if(isset($_SESSION['receipt_err'])){ echo $_SESSION['receipt_err']; unset($_SESSION['receipt_err']);}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Receipt Generator</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="banner">
<table width="100%" height="120">
<tr><td>Automatic Receipt Generator</td></tr>
</table>
</div>

<div class="logout"><a href="logout.php"><button>Logout</button></a></div>

<div id="receipt_input">
<form method="post" action="store_receipt.php">
<fieldset>
<legend>Personal Details</legend>
<p>Enter Name: <input type="text" name="fname" size="60" /></p>
<p>Enter Address: <input type="text" name="addr" size="58" /></p>
<p>Enter Phone Number: <input type="text" name="phone" size="25" /></p>
</fieldset>
<fieldset>
<legend>Item Details</legend>
<table width="100%" border="1" bordercolor="#C0C0C0">
<tr>
<td align="center">S/N</td>
<td align="center">ITEM NAME</td>
<td align="center">Amount(#)</td>
</tr>
<tr>
<td align="center">01</td>
<td align="center"><input type="text" name="item01" size="45" /></td>
<td align="center"><input type="text" name="amnt01" id="amnt01" size="15" /></td>
</tr>
<tr>
<td align="center">02</td>
<td align="center"><input type="text" name="item02" size="45" /></td>
<td align="center"><input type="text" name="amnt02" id="amnt02" size="15" /></td>
</tr>
<tr>
<td align="center">03</td>
<td align="center"><input type="text" name="item03" size="45" /></td>
<td align="center"><input type="text" name="amnt03" id="amnt03" size="15" /></td>
</tr>
<tr>
<td align="center">04</td>
<td align="center"><input type="text" name="item04" size="45" /></td>
<td align="center"><input type="text" name="amnt04" id="amnt04" size="15" /></td>
</tr>
<tr>
<td align="center">05</td>
<td align="center"><input type="text" name="item05" size="45" /></td>
<td align="center"><input type="text" name="amnt05" id="amnt05" size="15" /></td>
</tr>
</table>
</fieldset>
<br>&nbsp;
<p align="center"><input type="submit" value="Save"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Clear Form" /></p>
</form>
</div>

</body>
</html>
<?php
}
else{
	header('Location: logonpage.php');
}
?>