<?
 	require_once ('config/session.php');
	require_once('lib/function.php');

	$newpwd = $_REQUEST['cpwd'];
	$pwd = $_REQUEST['pwd'];

	$sql = "SELECT * FROM admin WHERE uname='admin' AND pwd='$pwd'";
	$rowcount = getRowCount($sql);
	
	if($rowcount > 0){	
		$sql = "UPDATE admin SET pwd='$newpwd' WHERE uid=1";
		execData($sql);
		echo("<script>window.location = '?page=settings&action=changed';</script>");		
	}
	else{
		echo("<script>window.location = '?page=settings&action=fail';</script>");		
	}
?>