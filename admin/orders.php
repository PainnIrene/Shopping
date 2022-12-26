<?
 	require_once ('config/session.php');
	require('lib/function.php');
	
	$orderid = $_GET['orderid'];
	
	if($orderid == ''){
		$sql = "SELECT * FROM orders ORDER BY orderid desc";
	}
	else{
		$sql = "SELECT * FROM orders WHERE orderid=$orderid ORDER BY orderid desc";
	}
	
	$rowcount = getRowCount($sql);
	$row = getData($sql);
	
	$showproduct = 10;
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
<h3>Orders</h3>
<table cellspacing="0" cellpadding="0" width="791" class="displaytable">
<tr class="titletext" align="center" height="20px">
    <td width="30">Order No.</td>
    <td width="65">Customer Name</td>
    <td width="150">Product Name</td>
    <td width="70">Price</td>
    <td width="50">Qty</td>
    <td width="70">Subtotal</td>
    <td width="70">Tax(<? echo(tax); ?>%)</td>
    <td width="75">Shipment</td>
    <td width="75">Payment</td>
    <td width="60">Status</td>
    <td width="52">Edit</td>
    <td width="52">Delete</td>
  </tr>
    
	<?
		for($i=$start; $i <= $end; $i++){
	?>

    <tr height="35px">
		<td align="center">
			<a href="?page=orders&orderid=<? echo($row[$i]['orderid']) ?>">
        		<? echo($row[$i]['orderid']) ?>
            </a>
        </td>
		
        <td align="center">
		<? 
            $sql = "SELECT * FROM customers WHERE customerid=". $row[$i]['customerid'];
            $customer = getData($sql);
			echo('<a href="home.php?page=customers&cid='. $row[$i]['customerid'] .'">'.$customer[0]['firstname'].'</a>'); 
		?>      </td>
		
        <td align="center">
		<?
            $sql = "SELECT * FROM products WHERE productid=". $row[$i]['productid'];
            $product = getData($sql);
            echo('<a href="home.php?page=products&pid=' . $row[$i]['productid'] . '">' . $product[0]['productname'] . '</a>');
        ?>        </td>
		<td align="right">$<? echo($row[$i]['price']) ?></td>
		<td align="center"><? echo($row[$i]['qty']) ?></td>
		<td align="right">$<? echo($row[$i]['subtotal']) ?></td>
		<td align="right">$<? echo($row[$i]['tax']) ?></td>
		<td align="center">
		<? 
            $sql = "SELECT * FROM shipment WHERE shipmentid=". $row[$i]['shipmentid'];
            $shipment = getData($sql);

			if($row[$i]['shipmentid']==0){
				echo('_');
			} 
			else{
				echo($shipment[0]['shipmentname']);
			}
		?>        </td>
		<td align="center">
		<? 
            $sql = "SELECT * FROM payment WHERE paymentid=". $row[$i]['paymentid'];
            $payment = getData($sql);

			if($row[$i]['paymentid']==0){
				echo('_');
			} 
			else{
				echo($payment[0]['paymentname']);
			}
		?>        </td>
		<td align="center">
		<? echo($row[$i]['remark']); ?>        </td>

		<td align="center">
            <a href="?page=orderedit&id=<? echo($row[$i][0]) ?>&pid=<? echo($row[$i]['productid']) ?>"><img src="img/b_edit.png" width="16" height="16" /></a></td>
		<td align="center">
            <a href="?page=orderdelete&id=<? echo($row[$i][0]) ?>&pid=<? echo($row[$i]['productid']) ?>" onClick="return confirm('Do you want to delete <? echo($row[$i][1]) ?> product?');"><img src="img/b_drop.png" width="16" height="16" /></a></td>
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
                echo('<a href="?page=orders&subpage='.$i.'">'.$i.'</a>');		
            }
        }
        else{
            if($i == $subpage){
                echo('<font color="#CC0000">' . $i . '</font> | ');
            }
            else{
                echo('<a href="?page=orders&subpage='.$i.'">'.$i. '</a> | ');		
            }
        }
    }
?>
</div>              
<div class="space"></div>


