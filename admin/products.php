<?
 	require_once ('config/session.php');
	require_once('lib/function.php');

	$pid = $_GET['pid'];	
	$pname = $_REQUEST['pname'];
	
	if($pid == ''){
		if($pname == ''){
			$sql = "SELECT * FROM products ORDER BY productid desc";
		}
		else{
			$sql = "SELECT * FROM products WHERE productname LIKE '%$pname%' OR productdes LIKE '%$pname%' ORDER BY productid desc";
		}
	}
	else{
		$sql = "SELECT * FROM products WHERE productid=$pid";
	}
	
	
	$rowcount = getRowCount($sql);
	$row = getData($sql);
	
	$showproduct = 5;
	$subpage = $_GET['subpage'];
	
	if($subpage == '' or $subpage == 0){
		$subpage = 1;
	}
	

	$start = (($showproduct * $subpage) - $showproduct)  ;
	$end = $start +  ($showproduct -1);
	
	if($rowcount <= $end){
		$end = $rowcount-1 ;
	}
	

?>
<h3>Products</h3>
<table cellspacing="0" cellpadding="0" width="820px" class="displaytable">
    <tr>
    	<td align="left" width="50%">
        	<form method="post" action="?page=products">
                <input type="text" name="pname" id="pname" />
                <input type="submit" value="Search" />
            </form>
        </td>
    	<td align="right" width="50%">
			<?
                if($pid != ''){
                    echo('<input type="button" value="Back" onclick="javascripr:history.back();">');
                }
            ?>
        	<input type="button" value="Add Product" onclick="javascript:window.location='?page=addproducts'" />
        </td>
    </tr>
</table>
<table cellspacing="0" cellpadding="0" width="820px" class="displaytable">
    <tr class="titletext" align="center" height="20px">
        <td width="30">No.</td>
        <td width="160">Product Image</td>
        <td width="130">Product Name</td>
        <td width="200">Product Description</td>
        <td width="100">Category</td>
        <td width="80">Price</td>
        <td width="30">Qty</td>
        <td width="40">Edit</td>
        <td width="40">Delete</td>
    </tr>
    
	<?
		for($i=$start; $i <= $end; $i++){
	?>

    <tr>
		<td><? echo($i+1) ?></td>
		<td align="center"><img src="../img/product/<? echo($row[$i]['productimage']) ?>"></td>
		<td><? echo($row[$i]['productname']) ?></td>
		<td><? echo($row[$i]['productdes']) ?></td>
		<td>
		<? 
		$sql = "SELECT * FROM categories WHERE categoriesid=" . $row[$i]['categoriesid'];
		$catedata = getData($sql);
	
		echo($catedata[0]['categoriesname']);
		?>
		</td>
        
		<td>$<? echo($row[$i]['price']) ?></td>
		<td><? echo($row[$i]['qty']) ?></td>
		<td align="center">
            <a href="?page=productsedit&id=<? echo($row[$i][0]) ?>"><img src="img/b_edit.png" width="16" height="16" /></a>
        </td>
		<td align="center">
            <a href="?page=productdelete&id=<? echo($row[$i][0]) ?>" onClick="return confirm('Do you want to delete <? echo($row[$i][1]) ?> product?');"><img src="img/b_drop.png" width="16" height="16" /></a>
        </td>
    </tr>

    <? } ?>
</table>


<div class="pagenumber">
<? 
    $count = (int)($rowcount/$showproduct);
    if($rowcount%$showproduct > 0){
        $count = $count + 1;
    }
    if($count != 0){
        echo('Page: ');
    }
    
    for($i=1; $i <= $count ; $i++){
        if($i == $count){
            if($i == $subpage){
                echo('<font color="#CC0000">' . $i . '</font>');
            }
            else{
                echo('<a href="?page=products&subpage='.$i.'">'.$i.'</a>');		
            }
        }
        else{
            if($i == $subpage){
                echo('<font color="#CC0000">' . $i . '</font> | ');
            }
            else{
                echo('<a href="?page=products&subpage='.$i.'">'.$i. '</a> | ');		
            }
        }
    }
?>
</div>              
<div class="space"></div>


