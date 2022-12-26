<?
	require_once ('config/session.php');
	require_once('lib/function.php');
	
	$sql = "SELECT * FROM payment ORDER BY paymentid desc";
	
	$rowcount = getRowCount($sql);
	$row = getData($sql);
?>
<h3>Payment</h3>
<table cellpadding="0" cellspacing="0" width="500px" class="displaytable">
<tr class="titletext" align="center" height="20px">
    <td width="40">No.</td>
	<td width="360">Payment Name</td>
	<td width="50">Edit</td>
	<td width="50">Delete</td>
  </tr>
<?
	for($i=0; $i < $rowcount; $i++){
?>
	<tr height="25px">
		<td><? echo($i + 1) ?></td>
		<td><? echo($row[$i][1]) ?></td>
		<td align="center">
            <a href="?page=paymentedit&id=<? echo($row[$i][0]) ?>">
                <img src="img/b_edit.png" width="16" height="16" />
            </a>
        </td>
		<td align="center"><a href="?page=paymentdelete&id=<? echo($row[$i][0]) ?>"  onClick="return confirm('Do you want to delete <? echo($row[$i][1]) ?> catogry?');"><img src="img/b_drop.png" width="16" height="16" /></a></td>
    </tr>
<?
	}
?>
</table>

<div class="space"></div>

<form action="?page=paymentadd" method="post" onsubmit="return validcat();">
<input type="text" name="name" id="name" />
<input type="submit" value="Add Payment" />
</form>

<div class="space"></div>

