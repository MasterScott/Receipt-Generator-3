<?php
require_once('server_con.php');
session_start();
if(isset($_SESSION['adminuser'])){
	if(isset($_SESSION['receipt_no'])){
		$stmt = 'SELECT * FROM receipt WHERE (receipt.Receipt_No="'.$_SESSION['receipt_no'].'")';
		$sql = mysqli_query($con, $stmt);
		$record = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Generated Receipt</title>
<script src="js/script.js"></script>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/receipt.css">
</head>

<body>

<div class="banner">
<table width="100%" height="120">
<tr><td>Automatic Receipt Generator</td></tr>
</table>
</div>

<div class="logout"><a href="logout.php"><button>Logout</button></a></div>

<div id="receipt">
<p align="center"><span id="title">Dalewares Store and Provision</span><br>
27, Bode Thomas road off Shyllon, Palmgroove, Lagos.
</p>
<hr>
<table width="100%" class="tbl">
<tr><td><i><?php echo $record['Receipt_No']; ?></i></td>
<td align="right"><?php echo $record['Date']; ?></td></tr>
</table>
<p class="tbl"><b>NAME:</b> <?php echo $record['Name']; ?></p>
<p class="tbl"><b>ADDRESS:</b> <?php echo $record['Address']; ?></p>
<p class="tbl"><b>PHONE:</b> <?php echo $record['Phone']; ?></p>
<table width="100%" border="0" cellpadding="5" cellspacing="5" class="tbl">
<tr>
<td width="75%"><b>ITEM</b></td>
<td width="25%"><b>AMOUNT(#)</b></td>
</tr>
<?php
	echo '<tr>';
	echo '<td>'.$record['Item01'].'</td>';
	echo '<td>'.$record['Amount01'].'</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>'.$record['Item02'].'</td>';
	echo '<td>'.$record['Amount02'].'</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>'.$record['Item03'].'</td>';
	echo '<td>'.$record['Amount03'].'</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>'.$record['Item04'].'</td>';
	echo '<td>'.$record['Amount04'].'</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>'.$record['Item05'].'</td>';
	echo '<td>'.$record['Amount05'].'</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td><hr>TOTAL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; =<hr></td>';
	echo '<td><hr>#'.$record['Total'].'<hr></td>';
	echo '</tr>';
?>
</table>
</div>

<div id="print">
<a href="index.php"><button>&crarr; Go back</button></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button onClick="print()">Print</button>
</div>

</body>
</html>
<?php
	}
	else{
		header('Location: index.php');
	}
}
else{
	header('Location: logonpage.php');
}
?>