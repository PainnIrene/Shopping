<?
	require_once ('config/session.php');
	require_once('lib/function.php');
	
	$action = $_GET['action'];

	if($action != 'empty'){
		$sql = "SELECT * FROM orders WHERE orderid=".(int)($_SESSION['sess_orderid']);
		$ordercount = getRowCount($sql);
		$order = getData($sql);
	}
	
	$totalamount = 0;
?>
	
    
	<div class="productlist1">
		<div></div>    
        <div class="products1">
        	<div class="product_table1">	
            <form method="post" name="form1" id="form1">
            
			  <table width="1100" border="0" cellspacing="0" cellpadding="5">

                <tr height="30px">
                  <td colspan="6" align="right">
      
                  </td>
                </tr>

                <tr height="25px" align="center">
                  <td width="20"></td>
                  <td width="160"><Strong>Image</Strong></td>
                  <td width="190"><Strong>Product Name</Strong></td>
                  <td width="90"><Strong>Price</Strong></td>
                  <td width="50"><Strong>Quantity</Strong></td>
                  <td width="70"><Strong>Subtotal</Strong></td>
                </tr>
                <tr height="10px">
                  <td colspan="6"></td>
                </tr>
	
			<? 
				if($action == 'empty'){
					echo('<strong><span style="color:red; font-size:20px">There is no item in your cart!</span></Strong>');
				}
				for($i=0; $i< $ordercount; $i++){ 
					$sql = "SELECT * FROM products WHERE productid=" . $order[$i]['productid'];
					$row = getData($sql);
			?>
                    <tr height="25px" align="center">
                    <td><input type="checkbox" name="pid[]" id="pid[]" value="<? echo($row[0]['productid']) ?>" /></td>
                    <td><img src="<? echo(productfolder . $row[0]['productimage']); ?>" /></td>

                    <td class="productname">
                    	<input type="hidden" id="pid2[]" name="pid2[]" value="<? echo($row[0]['productid']) ?>" />
                        <a href="?page=productdetail&cart=<? echo($GLOBALS['cart']) ?>&pid=<? echo($row[0]['productid']) ?>">
							<? echo($row[0]['productname']); ?>
                        </a>
                    </td>

                    <td>
                    <span class="textprice">
                    	$<? echo($row[0]['price']); ?>
                        <input type="hidden" value="<? echo($row[0]['price']); ?>" id="price[]" name="price[]">
                    </span>
                    </td>
                    <td>
                    <input type="text" value="<? echo($order[$i]['qty']); ?>" size="2" style="text-align:right" name="qty[]" id="qty[]">
                    </td>
                    <td align="center">
					<? 
						echo('$'.number_format($row[0]['price'] * $order[$i]['qty'],2)); 
						$totalamount = $totalamount + ($row[0]['price'] * $order[$i]['qty']);
					?>
                    </td>
                    </tr>
                <tr height="10px">
                  <td colspan="6"><img src="img/bottom_line_2.jpg" width="580" height="1" /></td>
                </tr>


			<? } ?>
                <tr height="10px">
                  <td colspan="5" align="right">Sub Total:</td>
                  <td align="right"><span class="textprice"><Strong>$<? echo(number_format($totalamount,2)) ?></Strong></span></td>
                </tr>

                <tr height="10px">
                  <td colspan="6">&nbsp;</td>
                </tr>

                <tr height="10px">
                  <td colspan="5" align="right">Tax (<? echo(tax) ?>%):</td>
                  <? $tax = number_format(($totalamount/100)*tax,2); ?>
                  <td align="right"><span class="textprice"><Strong>$<? echo($tax) ?></Strong></span></td>
                </tr>

                <tr height="10px">
                  <td colspan="6">&nbsp;</td>
                </tr>

                <tr height="10px">
                  <td colspan="5" align="right">Total Amount:</td>
                  <? $totalamount = number_format($totalamount+$tax,2); ?>
                  <td align="right"><span class="textprice"><Strong>$<? echo($totalamount) ?></Strong></span></td>
                </tr>

                <tr height="10px">
                  <td colspan="6">&nbsp;</td>
                </tr>

                <tr height="30px">
                  <td colspan="6" align="right">
                              
                     <input class="OrdertableButtons" type="button" value="Update" onclick="defineAction('update','<? echo($GLOBALS['cart']) ?>')" />
                  	<input class="OrdertableButtons" type="button" value="Delete"  onclick="defineAction('delete', '<? echo($GLOBALS['cart']) ?>')" />
                  	<input class="OrdertableButtons" type="button" value="Checkout" onclick="defineAction('checkout', '<? echo($GLOBALS['cart']) ?>')" />
                   </td>
                </tr>
                <tr height="10px">
                  <td colspan="6">&nbsp;</td>
                </tr>
              </table>
              </form>
          </div>
        </div>
		<div><img src="img/product_list_bottom.png" width="602" height="10" /></div>    
    </div>
