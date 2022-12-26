<?
	require_once ('config/session.php');
	require_once('lib/function.php');

	$shipment = $_REQUEST['shipment'];
	
	if($shipment == '' ){
		echo("<script>window.location = '?page=shipment&cart=" . $GLOBALS['cart'] . "'; </script>");		
	}
	
	$sql = "UPDATE orders SET shipmentid=" . $shipment[0] . " WHERE orderid=" .(int)($_SESSION['sess_orderid']);
	
	execData($sql);

	echo("<script>window.location = '?page=payment&cart=" . $GLOBALS['cart'] . "&shipment=" . $shipment[0] . "'; </script>");		
?>