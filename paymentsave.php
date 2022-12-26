<?
	require_once ('config/session.php');
	require_once('lib/function.php');

	$payment = $_REQUEST['payment'];
	$shipmentid	 = $_REQUEST['shipmentid'];
	
	if($payment == '' ){
		echo("<script>window.location = '?page=payment&cart=" . $GLOBALS['cart'] . "'; </script>");		
	}
	
	$sql = "UPDATE orders SET paymentid=" . $payment[0] . " WHERE orderid=" .(int)($_SESSION['sess_orderid']);
	
	execData($sql);

	echo("<script>window.location = '?page=invoice&cart=" . $GLOBALS['cart'] . "&shipment=" . $shipmentid . "&payment=" . $payment[0] . "'; </script>");		
?>