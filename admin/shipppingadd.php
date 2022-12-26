<?
 	require_once ('config/session.php');
	require_once('lib/function.php');

	$name = $_REQUEST['name'];
	$rate = $_REQUEST['rate'];

	$sql = "INSERT INTO shipment (shipmentname, shipmentrate) values ('$name',$rate)";

	execData($sql);

	echo("<script>window.location = '?page=shipping';</script>");		

?>