<?
	session_start();

	$_SESSION['sess_adminid'] = '';
	$_SESSION['sess_adminname'] = '';

	session_destroy();
	
	echo("<script>window.location = 'index.php';</script>");		
?>