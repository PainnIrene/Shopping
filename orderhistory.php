<?
	require_once('config/session.php');
	require_once('lib/function.php');
	
	
	$sql = "SELECT DISTINCT orderid, orderdate  FROM orders WHERE remark!='pending' AND customerid=" . $_SESSION['sess_customerid'] . " ORDER BY orderid DESC";
	$row = getData($sql);

	$totalitems = 0;
	$totalamount = 0;
?>


<div class="productlist3">
    <div><img src="img/product_list_top.png" width="602" height="10" /></div>    
    <div class="products">
        <h3>Order History</h3>
        <div class="product_table">	
        
		<table cellpadding="0" cellspacing="0" border="0" width="580px">
            <tr>
            <td colspan="4"><img src="img/bottom_line_2.jpg" width="580" height="1" /></td>
            </tr>

            <tr align="center" height="20px">
            <td width="100">Order ID</td>
            <td width="178">Order Date</td>
            <td width="81">Total Items</td>
            <td width="121" align="right">Total Amount</td>
          </tr>

        <tr>
        <td colspan="4"><img src="img/bottom_line_2.jpg" width="580" height="1" /></td>
        </tr>
		<?
			for($i=0; $i < sizeof($row); $i++){
		?>
            <tr height="20px">
            <td align="center">
			<a href="?page=invoice&cart=<? echo($GLOBALS['cart']) ?>&orderid=<? echo($row[$i]['orderid']) ?>&action=history">
            	<u>
				<? echo($row[$i]['orderid']) ?>
                </u>
            </a>
            </td>
            <td align="center"><? echo($row[$i]['orderdate']) ?></td>
            <td align="center">
            <?
				$sql = "SELECT SUM(qty) FROM orders WHERE orderid=" . $row[$i]['orderid'];
				$totalqty = getData($sql);
				echo($totalqty[0][0]);
				$totalitems = $totalitems + $totalqty[0][0];
			?>
            </td>
            <td align="right">$
            <?
				$sql = "SELECT SUM(subtotal)+SUM(tax) FROM orders WHERE orderid=" . $row[$i]['orderid'];
				$subtotal = getData($sql);
				echo($subtotal[0][0]);
				$totalamount = $totalamount + $subtotal[0][0];
			?>
            </td>
            </tr>
        <?
			}
		?>
        
            <tr>
            <td colspan="4"><img src="img/bottom_line_2.jpg" width="580" height="1" /></td>
            </tr>
            <tr height="20px">
            <td colspan="2" align="right"><strong>Total:</strong></td>
            <td align="center"><strong><? echo($totalitems); ?></strong></td>
            <td align="right"><strong>$<? echo($totalamount); ?></strong></td>
            </tr>

            <tr>
            <td colspan="4"><img src="img/bottom_line_2.jpg" width="580" height="1" /></td>
            </tr>
            
            <tr>
            <td colspan="4" align="right">
                <input class="usereditInput" type="button" value="Back" onclick="javascripr:history.back();" /></td>
            </tr>
        </table>
        </div>
    </div>
    <div><img src="img/product_list_bottom.png" width="602" height="10" /></div>    
</div>
