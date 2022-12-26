<?
	require_once('lib/function.php');

	$email = $_REQUEST['email'];
	$pwd = $_REQUEST['password'];

	$sql = "SELECT * FROM customers WHERE email='$email' and password='$pwd'";
	
	$num = getRowCount($sql);
	$row = getData($sql);


	if($num > 0){
		session_start();
		$_SESSION['sess_userid'] = session_id();
		$_SESSION['sess_username'] = $row[0]['firstname'];
		$_SESSION['sess_customerid'] = (string)($row[0]['customerid']);

		echo("<script>window.location = '?page=userdetail&cart=" . $GLOBALS['cart'] . "'; </script>");		
	}
	else{
		echo("<script>window.location = '?page=login&cart=" . $GLOBALS['cart'] . "&login=fail'; </script>");		
	}
?>