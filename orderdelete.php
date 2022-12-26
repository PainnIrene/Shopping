<?
	require_once ('config/session.php');
	require_once('lib/function.php');

	$orderid = (int)($_SESSION['sess_orderid']);
	$pid = $_REQUEST['pid'];
	$qty = $_REQUEST['qty'];
	
	for($i = 0; $i < sizeof($pid); $i++){	
		$sql = "DELETE FROM orders WHERE orderid=" . $orderid . " AND productid=". $pid[$i];
		execData($sql);
	}
	
	echo("<script>window.location = '?page=ordertable&cart=" . $GLOBALS['cart'] . "'; </script>");		
	
?>