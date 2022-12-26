<?
	require_once ('config/session.php');
	require_once('lib/function.php');
	
	$sql = "SELECT * FROM shipment ORDER BY shipmentid desc";
	
	$rowcount = getRowCount($sql);
	$row = getData($sql);
?>
<h3>Shipping</h3>
<table cellpadding="0" cellspacing="0" width="500px" class="displaytable">
<tr class="titletext" align="center" height="20px">
    <td width="31">No.</td>
	<td width="180">Shipment Name</td>
	<td width="180">Shipment Rate(Per Item)</td>
	<td width="53">Edit</td>
	<td width="54">Delete</td>
  </tr>
<?
	for($i=0; $i < $rowcount; $i++){
?>
	<tr height="25px">
		<td><? echo($i + 1) ?></td>
		<td><? echo($row[$i][1]) ?></td>
		<td><? echo($row[$i][2]) ?></td>
		<td align="center">
            <a href="?page=shippingedit&id=<? echo($row[$i][0]) ?>">
                <img src="img/b_edit.png" width="16" height="16" />
            </a>
        </td>
		<td align="center"><a href="?page=shippingdelete&id=<? echo($row[$i][0]) ?>"  onClick="return confirm('Do you want to delete <? echo($row[$i][1]) ?> catogry?');"><img src="img/b_drop.png" width="16" height="16" /></a></td>
    </tr>
<?
	}
?>
</table>

<div class="space"></div>



<form action="?page=shipppingadd" method="post" onsubmit="return validship();">
<table>
<tr>
<td colspan="2"><h3>Add Shippment</h3></td>
</tr>

<tr>
<td>Shipment Name:</td>
<td><input type="text" name="name" id="name" /></td>
</tr>

<tr>
<td>Shipment Rate:</td>
<td><input type="text" name="rate" id="rate" /></td>
</tr>

<tr align="center">
<td colspan="2">
<input type="submit" value="Save" />
<input type="reset" value="Reset" />
</td>
</tr>
</table>
</form>
<div class="space"></div>


