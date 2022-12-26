<?
 	require_once ('config/session.php');
	require_once('lib/function.php');

	$value = $_REQUEST['value'];

	$sql = "UPDATE settings SET value='$value' WHERE settingcode=1";

	execData($sql);

	echo("<script>window.location = '?page=settings';</script>");		

?>