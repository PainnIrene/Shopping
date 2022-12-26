
<?
 	require_once ('config/session.php');
	require_once('lib/function.php');
	$pid = $_GET['id'];
	$sql = "SELECT * FROM products WHERE productid=" . $pid;
	$pdata = getData($sql);
?>

<h3>Edit Products</h3>

<form action="?page=productsave&action=edit" method="post" onsubmit="return editaddp();">
<input type="hidden" value="<? echo($pdata[0]['productid']) ?>" name="pid" id="pid">

<table cellspacing="0" cellpadding="0" width="400px">
  <tr height="35px">
    <td width="200px">Product Name</td>
    <td width="200px"><input type="text" name="txtpname" id="txtpname" value="<? echo($pdata[0]['productname']) ?>"></td>
  </tr>
  <tr height="35px">
    <td>Product Description</td>
    <td><textarea name="txtpdes"  rows="10" cols="50" id="txtpdes" value="<? echo($pdata[0]['productdes']) ?>"><? echo($pdata[0]['productdes']) ?></textarea></td>
  </tr>
  <tr height="35px">
    <td>Categories</td>
    <td>
	<?
		$sql = "SELECT * FROM categories";
		$rowcount = getRowCount($sql);
		$row = getData($sql);
	?>
  
    <select name="txtcate" id="txtcate">
    <?
		for($i = 0; $i < $rowcount; $i++){
			if($row[$i][0] == $pdata[0]['categoriesid'])
			{
	?>
            <option value="<? echo($row[$i][0]); ?>" selected><? echo($row[$i][1]); ?></option>
	<?		}
			else
			{
	?>
            <option value="<? echo($row[$i][0]); ?>"><? echo($row[$i][1]); ?></option>
	<? }} ?>    
    </select>
    </td>
  </tr>
  <tr height="35px">
    <td>Price</td>
    <td><input type="text" name="txtprice" id="txtprice" value="<? echo($pdata[0]['price']) ?>"></td>
  </tr>
  <tr height="35px">
    <td>Quanity</td>
    <td><input type="text" name="txtqty" id="txtqty" value="<? echo($pdata[0]['qty']) ?>"></td>
  </tr>
  <tr height="35px" align="center">
    <td colspan="2">
    	<input type="submit" value="Save">
        <input type="button" value="Back" onClick="javascript:history.back();">
	</td>
  </tr>
</table>
</form>
