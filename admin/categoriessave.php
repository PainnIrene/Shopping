<?
 	require_once ('config/session.php');
	require_once('lib/function.php');

	$id = $_REQUEST['categoriesid'];
	$name = $_REQUEST['categoriesname'];

	$sql = "UPDATE categories SET categoriesname='$name' WHERE categoriesid='$id'";

	execData($sql);

	echo("<script>window.location = '?page=categories';</script>");		

?>