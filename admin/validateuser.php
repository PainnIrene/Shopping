<?
	session_start();

	require_once('../lib/function.php');

	$user = $_REQUEST['username'];
	$pwd = $_REQUEST['password'];

	$sql = "SELECT * FROM admin WHERE uname='$user' and pwd='$pwd'";
	
	$num = getRowCount($sql);
	$row = getData($sql);


	if($num > 0){
		$_SESSION['sess_adminid'] = session_id();
		$_SESSION['sess_adminname'] = $row[0]['uname'];

		echo("<script>window.location = 'home.php';</script>");		
	}
	else{
		echo("<script>window.location = 'index.php?action=fail';</script>");		
	}
?>