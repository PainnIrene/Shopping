<?
 	require_once ('config/session.php');
	require_once('lib/function.php');

	$id = $_REQUEST['paymentid'];
	$name = $_REQUEST['paymentname'];

	$sql = "UPDATE payment SET paymentname='$name' WHERE paymentid='$id'";

	execData($sql);

	echo("<script>window.location = '?page=payment';</script>");		

?>