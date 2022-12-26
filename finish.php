<?
	require_once ('config/session.php');
	require_once('lib/function.php');

	$orderid = (int)($_SESSION['sess_orderid']);	
	
	if($orderid == ''){
		echo("<script>window.location = '?page=myaccount&cart=" . $GLOBALS['cart'] . "'; </script>");		
	}
	else{
		$sql = "UPDATE orders SET remark='paid' WHERE orderid=".$orderid;
		execData($sql);
	}
	
	$sql = "SELECT * FROM orders WHERE orderid=" . $orderid;
	$ordercount = getRowCount($sql);
	$order = getData($sql);
	
	for($i = 0; $i < $ordercount; $i++){
		$sql = "UPDATE products SET qty=products.qty-" . (int)($order[$i]['qty']) . " WHERE productid=". (int)($order[$i]['productid']);
		execData($sql);
	}
	$_SESSION['sess_orderid'] = '';
	echo("<script>window.location = '?page=complete&cart=" . $GLOBALS['cart'] . "'; </script>");		
?>
