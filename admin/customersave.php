<?
 	require_once ('config/session.php');
	require_once('lib/function.php');

	$cid = $_REQUEST['cid'];
	$firstname = $_REQUEST['txtfirstname'];
	$lastname = $_REQUEST['txtlastname'];
	$email = $_REQUEST['txtemail'];
	$sex = $_REQUEST['sex'];
	$address = $_REQUEST['txtaddress'];
	$postcode = $_REQUEST['txtpostcode'];
	$city = $_REQUEST['txtcity'];
	$country = $_REQUEST['txtcountry'];
	$phone = $_REQUEST['txtphone'];
	$fax = $_REQUEST['txtfax'];
	$pwd = $_REQUEST['txtpwd'];

	$sql = "UPDATE customers SET firstname='$firstname', lastname='$lastname', email='$email', sex=$sex, address='$address', postcode='$postcode', city='$city', country=$country, phone='$phone', fax='$fax', password='$pwd' WHERE customerid=$cid";


	execData($sql);


	echo("<script>window.location = '?page=customers';</script>");		
?>