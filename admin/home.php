<? 	
	session_start();
 	require_once ('config/session.php');
	define("tax",7);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Computer Store Backend</title>
<link href="css/admin.css" rel="stylesheet" type="text/css" />

<script src="js/myjs.js" type="text/javascript"></script>

</head>
<?
	
	$page = $_GET['page'];
	
	if($page == ''){
		$page = 'categories';
	}

?>

<body>
<div class="frame">
    <div class="menupanel">
      <div class="btnbg"><div class="text"><a href="?page=categories">Product Categories</a></div>
      </div>
        <div class="btnbg"><div class="text"><a href="?page=products">Products</a></div>
      </div>
        <div class="btnbg"><div class="text"><a href="?page=customers">Customers</a></div>
      </div>
        <div class="btnbg"><div class="text"><a href="?page=orders">Orders</a></div>
      </div>
        <div class="btnbg"><div class="text"><a href="?page=shipping">Shipping</a></div>
        </div>
        <div class="btnbg"><div class="text"><a href="?page=payment">Payment</a></div>
        </div>
        <div class="btnbg"><div class="text"><a href="?page=settings">Settings</a></div>
        </div>
        <div class="btnbg"><div class="text"><a href="?page=logout">Logout</a></div>
        </div>
    </div>

    <div class="mainbody">
		<div class="content">    

                <? 
					if(file_exists($page . '.php') == 1){
						require( $page . '.php');
					}
					else{
						require('categories.php');
					}
				?>

		</div>         
    </div>


<div class="copyright">&copy; Assumption University All right Reservered.</div>
</div>
</body>
</html>
