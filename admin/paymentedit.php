<?
 	require_once ('config/session.php');
	require_once('lib/function.php');

	$id = $_GET['id'];

	$sql = "SELECT * FROM payment WHERE paymentid=$id";
	$row = 	getData($sql);
?>
<h3>Payment Update</h3>
<form method="post" action="?page=paymentsave">
	<input type="hidden" name="paymentid"  id="paymentid" value="<? echo($row[0]['paymentid']) ?>">
	<input type="text" name="paymentname"  id="paymentname" value="<? echo($row[0]['paymentname']) ?>">
    <BR/>
	<input type="submit" value="Update"><input type="button" value="Back" onClick="javascript:history.back();">
</form>

<div class="space"></div>