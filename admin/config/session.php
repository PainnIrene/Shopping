<?

	$sess_userid=$_SESSION['sess_adminid'];
	$sess_user=$_SESSION['sess_adminname'];
	
	
	if($sess_userid <> session_id() or $sess_user=="")
	{
		echo("<script>window.location = 'index.php';</script>");		
	}

?>