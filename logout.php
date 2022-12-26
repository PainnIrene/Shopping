<?
	session_start();
	
	$_SESSION['sess_userid'] = '';
	$_SESSION['sess_username'] = '';
	$_SESSION['sess_customerid'] = '';
	$_SESSION['sess_orderid'] = 0;
	$_SESSION['sess_item'] = '';
	
	session_destroy();

	echo("<script>window.location = '?page=login&cart=" . $GLOBALS['cart'] . "'; </script>");		
?>