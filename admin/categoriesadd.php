<?
 	require_once ('config/session.php');
	require_once('lib/function.php');

	$name = $_REQUEST['name'];

	$sql = "INSERT INTO categories (categoriesname) values ('$name')";

	execData($sql);

	echo("<script>window.location = '?page=categories';</script>");		

?>