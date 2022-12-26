<?
 	require_once ('config/session.php');
	require_once('lib/function.php');

	$id = $_GET['id'];

	$sql = "DELETE FROM payment WHERE paymentid=$id";
	

	execData($sql);

	echo("<script>window.location = '?page=payment';</script>");		

?>