<?
 	require_once ('config/session.php');
	require_once('lib/function.php');

	$orderid = $_REQUEST['orderid'];
	$pid = $_REQUEST['pid'];
	$qty = $_REQUEST['txtqty'];
	$subtotal = $_REQUEST['txtsubtotal'];
	$tax = $_REQUEST['txttax'];
	$shipment = $_REQUEST['txtshipment'];
	$payment = $_REQUEST['txtpayment'];
	$status = $_REQUEST['txtstatus'];
	
	$sql = "UPDATE orders SET qty=$qty, subtotal=$subtotal, tax=$tax, shipmentid=$shipment, paymentid=$payment, remark='$status' WHERE orderid=$orderid AND productid=$pid";
	
	execData($sql);
	

	echo("<script>window.location = '?page=orders';</script>");		
?>