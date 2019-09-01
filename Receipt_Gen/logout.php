<?php
session_start();
if(isset($_SESSION['adminuser'])){
	unset($_SESSION['adminuser']);
	session_destroy();
	session_start();
	$_SESSION['logout'] = 'Successfully logged Out';
	header('Location: logonpage.php');
}
else{
	header('Location: logonpage.php');
}
?>