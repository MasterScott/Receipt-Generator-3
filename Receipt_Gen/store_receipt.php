<?php
require_once('server_con.php');
session_start();
if(isset($_SESSION['adminuser'])){
	//Receipt number generation
	function Rc_num( $numchar ){
    	$word = "1,2,3,4,5,6,7,8,9,0";
    	$array = explode ( "," ,$word );
    	shuffle ($array );
    	$newstring = implode($array , "" );
    	return substr( $newstring, 0, $numchar );
	}
	$receiptNo 	= 	'RC'.Rc_num(5);
	$now = 'now()';
	$fname 		= 		$_POST['fname'];
	$addr 		= 		$_POST['addr'];
	$phone		=		$_POST['phone'];
	$item01		=		$_POST['item01'];
	$item02		=		$_POST['item02'];
	$item03		=		$_POST['item03'];
	$item04		=		$_POST['item04'];
	$item05		=		$_POST['item05'];
	$amnt01		=		$_POST['amnt01'];
	$amnt02		=		$_POST['amnt02'];
	$amnt03		=		$_POST['amnt03'];
	$amnt04		=		$_POST['amnt04'];
	$amnt05		=		$_POST['amnt05'];
	$total 		= 		$amnt01+$amnt02+$amnt03+$amnt04+$amnt05;
	
	$sql = mysqli_query($con, 'INSERT INTO receipt
		(Receipt_No, Name, Address, Phone, Item01, Item02, Item03, Item04, Item05, Amount01, Amount02, Amount03, Amount04, Amount05, Total)
		VALUES("'.$receiptNo.'", "'.$fname.'", "'.$addr.'", "'.$phone.'", "'.$item01.'", "'.$item02.'", "'.$item03.'", "'.$item04.'", "'.$item05.'", "'.$amnt01.'", "'.$amnt02.'", "'.$amnt03.'", "'.$amnt04.'", "'.$amnt05.'", "'.$total.'")');
	if($sql){
		$_SESSION['receipt_no'] = $receiptNo;
		header('Location: receipt.php');
	}
	else{
		$_SESSION['receipt_err'] = '<script>alert("Error Loading Receipt");</script>';
		header('Location: index.php');
	}
}
else{
	header('Location: logonpage.php');
}
?>