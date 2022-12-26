<?
	require_once ('lib/function.php');

	$sql = "SELECT * FROM categories ORDER BY categoriesid asc";
	$rowcount = getRowCount($sql);
	$row = getData($sql);

?>


<div class="submenu1">
<img src="./img/Icon/cateicon.webp" width="30" height="30" />
<span style="font-size:20px;"><strong>Category</strong></span>
<div class="textcate">&nbsp;&nbsp;<a href="?page=productlist&cart=all">All</a></div>
		<? for($i = 0; $i < $rowcount; $i++){ ?>
        <div class="textcate">&nbsp;&nbsp;<a href="?page=productlist&cart=<? echo($row[$i][0]) ?>"><? echo($row[$i][1]) ?></a></div>
		<? } ?>
</div>
      