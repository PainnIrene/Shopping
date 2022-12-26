<?
 	require_once ('config/session.php');
	require_once('lib/function.php');

	$name = $_REQUEST['name'];

	$sql = "INSERT INTO payment (paymentname) values ('$name')";

	execData($sql);

	echo("<script>window.location = '?page=payment';</script>");		

?>