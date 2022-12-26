<?
	require_once('config/session.php');
	require_once('lib/function.php');

	$_SESSION['sess_item'] = $_GET['pid'];

	$sql = "SELECT * FROM products WHERE productid=" . (int)($_SESSION['sess_item']);
	$product = getData($sql);


	//Generate Order ID
	$sql = "SELECT * FROM orders WHERE remark='pending' AND customerid=".(int)($_SESSION['sess_customerid']);
	$orderpendingcount = getRowCount($sql);
	$orderpending = getData($sql);

	if($orderpendingcount == 0){
	
		if($_GET['pid']==''){
			echo("<script>window.location = '?page=ordertable&cart=" . $GLOBALS['cart'] . "&action=empty'; </script>");		
		}
		
		$sql = "SELECT * FROM orders ORDER BY orderid desc";
		$ordercount = getRowCount($sql);
		$order = getData($sql);
		
		if($_SESSION['sess_orderid'] == ''){	
			if($ordercount == 0){
				$orderid = 1;
			}
			else{
				$orderid = ($order[0]['orderid'] + 1);
			}

			$_SESSION['sess_orderid'] = (string)($orderid);
		}
		else{
			$orderid = $_SESSION['sess_orderid'];
		}
	}
	else{
		$orderid = $orderpending[0]['orderid'];
		$_SESSION['sess_orderid'] = $orderpending[0]['orderid'];
		echo("<script>window.location = '?page=ordertable&cart=" . $GLOBALS['cart'] . "'; </script>");		
	}
	//Generate Order ID

	//Validate Product in Order
	$sql = "SELECT * FROM orders WHERE orderid=" . $orderid . " AND productid=". $_SESSION['sess_item'];
	$ordercount = getRowCount($sql);
	//Validate Product in Order
	
	if($ordercount > 0){
		$sql = "UPDATE orders SET qty=orders.qty+1,tax=orders.tax+orders.tax,subtotal=orders.subtotal+orders.price WHERE orderid=" . $orderid . " AND productid=". $_SESSION['sess_item'];
	}
	else{
		if((int)($_SESSION['sess_customerid'])!= 0){
		$sql = "INSERT INTO orders VALUES ($orderid,".$_SESSION['sess_item'].",".(int)($_SESSION['sess_customerid']).",".$product[0]['price'].",1,".$product[0]['price'].",". ($product[0]['price']/100)*tax . ",1,0,0,'pending','" . date("y/m/d",time()) . "')";
		}
	}



	execData($sql);
	echo("<script>window.location = '?page=ordertable&cart=" . $GLOBALS['cart'] . "'; </script>");		
?>