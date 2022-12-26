<?
 	require_once ('config/session.php');
	require_once('lib/function.php');

	$id = $_REQUEST['shipmentid'];
	$name = $_REQUEST['shipmentname'];
	$rate = $_REQUEST['shipmentrate'];

	$sql = "UPDATE shipment SET shipmentname='$name', shipmentrate='$rate' WHERE shipmentid='$id'";

	execData($sql);

	echo("<script>window.location = '?page=shipping';</script>");		

?>