<? 	require_once ('config/session.php'); ?>

<h3>Add Products</h3>

<form action="?page=productsave&action=add" method="post" enctype="multipart/form-data" onsubmit="return validaddp();">
<table cellspacing="0" cellpadding="0" width="400px">
  <tr height="35px">
    <td width="200px">Product Name</td>
    <td width="200px"><input type="text" name="txtpname" id="txtpname"></td>
  </tr>
  <tr height="35px">
    <td>Product Description</td>
    <td><textarea name="txtpdes" rows="10" cols="50" id="txtpdes"></textarea></td>
  </tr>
  <tr height="35px">
    <td>Categories</td>
    <td>
	<?
		require_once('lib/function.php');
		$sql = "SELECT * FROM categories";
		$rowcount = getRowCount($sql);
		$row = getData($sql);
	?>
    <select name="txtcate" id="txtcate">
    <?
		for($i = 0; $i < $rowcount; $i++){
	?>
		<option value="<? echo($row[$i][0]); ?>"><? echo($row[$i][1]); ?></option>

	<? } ?>    
    </select>
    </td>
  </tr>
  <tr height="35px">
    <td>Price</td>
    <td><input type="text" name="txtprice" id="txtprice"></td>
  </tr>
  <tr height="35px">
    <td>Quanity</td>
    <td><input type="text" name="txtqty" id="txtqty"></td>
  </tr>
  <tr height="35px">
    <td>Product Image(Small)</td>
    <td>
    <input type="file" name="txtpimg" id="txtpimg" />
    </td>
  </tr>
  <tr height="35px">
    <td>Product Image(Large)</td>
    <td>
    <input type="file" name="txtpimg2" id="txtpimg2" />
    </td>
  </tr>
  <tr height="35px" align="center">
    <td colspan="2"><input type="submit" value="Save"><input type="reset" value="Reset"></td>
  </tr>
</table>
</form>
