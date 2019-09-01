<?php
require_once('server_con.php');
session_start();
if(isset($_POST['uname'], $_POST['pword'])){
	$uname = $_POST['uname'];
	$pword = $_POST['pword'];
	$sql = mysqli_query($con, 'SELECT COUNT(*) FROM admin WHERE (Adminuser="'.$uname.'" AND Adminpwd="'.$pword.'")');
	$result = mysqli_fetch_array($sql);
	if($result[0] > 0){
		$_SESSION['adminuser'] = $uname;
		header('Location: index.php');
	}
	else{
		$_SESSION['logerror'] = 'Invalid Username/Password';
		header('Location: logonpage.php');
	}
}
else{
	header('Location: logonpage.php');
}
?>