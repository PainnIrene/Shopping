<?
 	require_once ('config/session.php');
	require_once('lib/function.php');

	$id = $_GET['id'];

	$sql = "SELECT * FROM shipment WHERE shipmentid=$id";
	$row = 	getData($sql);
?>
<h3>Shipping Update</h3>
<form method="post" action="?page=shippingsave">
<input type="hidden" name="shipmentid"  id="shipmentid" value="<? echo($row[0]['shipmentid']) ?>">
<table>
<tr>
	<td>Shippment Name:</td>
	<td>
    	<input type="text" name="shipmentname"  id="shipmentname" value="<? echo($row[0]['shipmentname']) ?>">
	</td>
</tr>
<tr>
	<td>Shippment Rate:</td>
	<td>
	<input type="text" name="shipmentrate"  id="shipmentrate" value="<? echo($row[0]['shipmentrate']) ?>">
	</td>
</tr>

<tr>
	<td colspan="2" align="center">
	<input type="submit" value="Update"><input type="button" value="Back" onClick="javascript:history.back();">
    </td>
</tr>
</table>

</form>

<div class="space"></div>