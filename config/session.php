<?

	$sess_userid=$_SESSION['sess_userid'];
	$sess_user=$_SESSION['sess_username'];
	
	if ($sess_userid <> session_id() or $sess_user=="")
	{
		echo("<script>window.location = '?page=login&cart=" . $GLOBALS['cart'] . "'; </script>");		
	}

?>