<?
	require_once ('config/session.php');
	require_once('lib/function.php');

	$orderid = (int)($_SESSION['sess_orderid']);
	$pid = $_REQUEST['pid2'];
	$qty = $_REQUEST['qty'];
	$price = $_REQUEST['price'];
	
	
	for($i = 0; $i < sizeof($pid); $i++){	
			$sql = "SELECT * FROM products WHERE productid=" . $pid[$i];
			$product = getData($sql);
			
			if( $qty[$i] <= $product[0]['qty']){
				$sql = "UPDATE orders SET qty=". $qty[$i] .",subtotal='" . $qty[$i] * $price[$i] . "',tax=" . (($qty[$i] * $price[$i])/100)*tax . " WHERE orderid=" . $orderid . " AND productid=". $pid[$i];
				execData($sql);
			}

	}
	echo("<script>window.location = '?page=ordertable&cart=" . $GLOBALS['cart'] . "'; </script>");		
?>