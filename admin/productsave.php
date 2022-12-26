<?
 	require_once ('config/session.php');
	require_once('lib/function.php');
	$t = time();

	$action = $_GET['action'];	
	$pid = $_REQUEST['pid'];
	$pname = $_REQUEST['txtpname'];
	$pdes = $_REQUEST['txtpdes'];
	$cate = $_REQUEST['txtcate'];
	$price = $_REQUEST['txtprice'];
	$qty = $_REQUEST['txtqty'];
	$pdate = date("d/m/y",$t);
	$pimg = basename( $_FILES['txtpimg']['name']);
	$pimg2 = basename( $_FILES['txtpimg2']['name']);
	
	$target_path = "../img/product/";
	$target_path2 = "../img/product_large/";
	
	$target_path = $target_path . basename($_FILES['txtpimg']['name']); 
	$target_path2 = $target_path2 . basename($_FILES['txtpimg2']['name']); 
	

			if($action == 'add'){
				$sql= "INSERT INTO products (productname, productdes, categoriesid, price, qty, productdate, productimage) VALUES ('$pname','$pdes',$cate,$price,$qty,'$pdate','$pimg')";
			if(move_uploaded_file($_FILES['txtpimg2']['tmp_name'], $target_path2) && move_uploaded_file($_FILES['txtpimg']['tmp_name'], $target_path)) 	{
		
		
			} else{
				echo("<script>window.location = '?page=addproducts&action=fail';</script>");		
			}
			}
			else{
				$sql= "UPDATE products SET productname='$pname', productdes='$pdes', categoriesid=$cate, price=$price, qty=$qty, productdate='$pdate' WHERE productid=$pid";
			}

		execData($sql);
		echo("<script>window.location = '?page=products';</script>");		





?>
