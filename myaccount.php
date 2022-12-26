<?php
	session_start();

	if($_SESSION['sess_userid'] == "" or $_SESSION['sess_username'] ==""){
		echo("<script>window.location = '?page=login&cart=" . $GLOBALS['cart'] . "'; </script>");		
	}
	else{
		echo("<script>window.location = '?page=userdetail&cart=" . $GLOBALS['cart'] . "'; </script>");
	}

?>