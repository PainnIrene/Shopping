
<?

	session_start();
	require_once('lib/function.php');
	

	if($action != 'empty' && $_SESSION['sess_customerid'] != ''){
		$sql = "SELECT * FROM orders WHERE remark='pending' AND customerid=".(int)($_SESSION['sess_customerid']);
		$ordercount = getRowCount($sql);
		$order = getData($sql);

		for($i=0; $i< $ordercount; $i++){ 
			$GLOBALS['totalitems'] = $GLOBALS['totalitems'] +  $order[$i]['qty'];
		}		
	}
	else{
		$GLOBALS['totalitems']= 0;
	}
	
?>

<!--
 <div class="top_banner">
 <div class="logo">
	
<a href="index.php">
<img src="img/logo.jpg" width="160" height="50" /></a></div>
<div class="shoppingcart">
	comment html
    <strong><u>Shopping cart:</u></strong> <br />
    now in your cart: 
    
    <a href="?page=addcart&cart=<? echo($GLOBALS['cart']) ?>">
    <strong>
-->

	<? /*
		if($GLOBALS['totalitems'] > 1){
			echo($GLOBALS['totalitems'] . ' items'); 
		}
		else{
			echo($GLOBALS['totalitems'] . ' item'); 
		}
*/
	?>   
	<!-- 
    </strong>
	</a>
	-->
	<? /*
		if($_SESSION['sess_username'] != '') {
		    echo('<br /><font color="#CC0000">Welcome: <strong>' . $_SESSION['sess_username'] . '</strong></font>
			<div class="logout"><a href="?page=logout&cart=' . $GLOBALS['cart'] . '">Logout</a></div>');
		}
		*/
		
	?>
	
 
</div>
</div>
	