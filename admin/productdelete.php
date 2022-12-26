<?
 	require_once ('config/session.php');
	require_once('lib/function.php');

	$id = $_GET['id'];

	$sql = "SELECT * FROM products WHERE productid=$id";
	$row = getData($sql);
	
	unlink('../img/product_large/large_' . $row[0]['productimage']);
	unlink('../img/product/' .  $row[0]['productimage']);

	$sql = "DELETE FROM products WHERE productid=$id";
	execData($sql);

	echo("<script>window.location = '?page=products';</script>");		

?>