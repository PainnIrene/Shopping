<?
 	require_once ('config/session.php');
	require_once('lib/function.php');

	$id = $_GET['id'];
	$pid = $_GET['pid'];

	$sql = "DELETE FROM orders WHERE orderid=$id AND productid=$pid";

	execData($sql);

	echo("<script>window.location = '?page=orders';</script>");		

?>