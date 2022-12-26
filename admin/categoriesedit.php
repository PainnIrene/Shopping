<?
 	require_once ('config/session.php');
	require_once('lib/function.php');

	$id = $_GET['id'];

	$sql = "SELECT * FROM categories WHERE categoriesid=$id";
	$row = 	getData($sql);
?>
<h3>Product Catogries Update</h3>
<form method="post" action="?page=categoriessave" onsubmit="return editcat();">
	<input type="hidden" name="categoriesid"  id="categoriesid" value="<? echo($row[0]['categoriesid']) ?>">
	<input type="text" name="categoriesname"  id="categoriesname" value="<? echo($row[0]['categoriesname']) ?>">
    <BR/>
	<input type="submit" value="Update"><input type="button" value="Back" onClick="javascript:history.back();">
</form>

<div class="space"></div>