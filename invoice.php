<?
	require_once ('config/session.php');
	require_once('lib/function.php');


	$action = $_GET['action'];
	$orderid = $_GET['orderid'];

	if($action != 'empty'){
		if($orderid != '' && $action == 'history'){
			$sql = "SELECT * FROM orders WHERE orderid=".$orderid;
		}
		else{
			if($GLOBALS['totalitems'] ==0 ){
				echo("<script>window.location = '?page=productlist&cart=" . $GLOBALS['cart'] . "'; </script>");		
			}
			$sql = "SELECT * FROM orders WHERE orderid=".(int)($_SESSION['sess_orderid']);
		}

		$ordercount = getRowCount($sql);
		$order = getData($sql);
	}
	
	
	$totalamount = 0;
?>
    
	<div class="productlist3">
		<div><!--<img src="img/product_list_top.png" width="602" height="10" />--></div>    
        <div class="products3">
        	<div class="product_table">	
            
            <div class="invoicetext"><strong>INVOICE</strong></div>
				<div class="invoiceleft">
                	<table width="250" border="0" cellpadding="0" cellspacing="0">
					<tr height="20px">
                        	<td width="100">Order ID:</td>
           	  				<td width="150">
							  <?
							  	if($action == 'history'){
									echo($orderid);
								}
								else{
							  		echo((int)($_SESSION['sess_orderid']));
								}
							  ?>
              				</td>
                      </tr>
                    	<tr height="20px">
                        	<td>Order Date:</td>
                        	<td>
							<?
							  	if($action == 'history'){
									echo($order[0]['orderdate']);
								}
								else{
									 echo(date("d/m/Y"));
								}							
							?>
                            </td>
                        </tr>
                    	<tr height="20px">
                        	<td>Customer Name:</td>
                        	<td>
							<?
                                $sql = "SELECT * FROM customers WHERE customerid=". (int)($_SESSION['sess_customerid']);
                                $customer = getData($sql);
								if($customer[0]['sex'] == 1){
									echo("Mr.". $customer[0]['firstname'] . " " . $customer[0]['lastname']);
								}
								else{
									echo("Ms.". $customer[0]['firstname'] . " " . $customer[0]['lastname']);
								}
                            ?>
                            </td>
                        </tr>
                    	<tr height="20px">
                        	<td>Payment Type:</td>
                        	<td>
							<?
                                $sql = "SELECT * FROM payment WHERE paymentid=". $order[0]['paymentid'];
                                $payment = getData($sql);
                                echo($payment[0][1]);
                            ?>
                            </td>
                        </tr>
                    </table>
				</div>

				<div class="invoiceright">
                	<table>
                    	<tr height="20px">
                        	<td>Shipment Type:</td>
                        	<td>
							<?
                                $sql = "SELECT * FROM shipment WHERE shipmentid=". $order[0]['shipmentid'];
                                $shipment = getData($sql);
                                echo($shipment[0][1]);
                            ?>
                            </td>
                        </tr>
                   	  <tr valign="top">
                       	  <td width="100">Shipping Address:</td>
                        <td width="138">						
                            <?
                                $sql = "SELECT * FROM countrylist WHERE CountryID=". $customer[0]['country'];
                                $country = getData($sql);

                                echo($customer[0]['address'] . '<BR />' . $customer[0]['city'] . ' ' . $customer[0]['postcode'] . '<BR />' . $country[0]['Name']);
                            ?>						</td>
                      </tr>
                    </table>
				</div>
                <BR />
			  <table width="500" border="0" cellspacing="0" cellpadding="0">

                <tr height="10px">
                  <td colspan="4"><!--<img src="img/bottom_line_2.jpg" width="580" height="1" />--></td>
                </tr>

                <tr height="25px" align="center">
                  <td width="330"><Strong>Product Name</Strong></td>
                  <td width="100"><Strong>Price</Strong></td>
                  <td width="50"><Strong>Qty</Strong></td>
                  <td width="100" align="right"><Strong>Subtotal</Strong></td>
                </tr>
                <tr height="10px">
                  <td colspan="4"></td>
                </tr>
	
			<? 
				if($action == 'empty'){
					echo('<strong>There is no item in your cart.</Strong>');
				}
				for($i=0; $i< $ordercount; $i++){ 
					$sql = "SELECT * FROM products WHERE productid=" . $order[$i]['productid'];
					$row = getData($sql);
			?>
                    <tr height="25px" align="center">

                    <td class="productname, invoice" align="left">
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
					<? echo($order[$i]['qty']); ?>
                    </td>
                    <td align="right">
					<? 
						echo('$'.number_format($row[0]['price'] * $order[$i]['qty'],2)); 
						$totalamount = $totalamount + ($row[0]['price'] * $order[$i]['qty']);
					?>
                    </td>
                    </tr>


			<? } ?>
                <tr height="10px">
                  <td colspan="4"><img src="img/bottom_line_2.jpg" width="580" height="1" /></td>
                </tr>
                <tr height="10px">
                  <td colspan="3" align="right">Sub Total:</td>
                  <td align="right"><span class="textprice"><Strong>$<? echo(number_format($totalamount,2)) ?></Strong></span></td>
                </tr>

                <tr height="10px">
                  <td colspan="4">&nbsp;</td>
                </tr>

                <tr height="10px">
                  <td colspan="3" align="right">Tax (<? echo(tax) ?>%):</td>
                  <? $tax = number_format(($totalamount/100)*tax,2); ?>
                  <td align="right"><span class="textprice"><Strong>$<? echo($tax) ?></Strong></span></td>
                </tr>

                <tr height="10px">
                  <td colspan="4">&nbsp;</td>
                </tr>

                <tr height="10px">
                  <td colspan="3" align="right">Total Amount:</td>
                  <? $totalamount = number_format($totalamount+$tax,2); ?>
                  <td align="right"><span class="textprice"><Strong>$<? echo($totalamount) ?></Strong></span></td>
                </tr>

               
                <tr height="5px">
                  <td colspan="4" align="right">
                <? if($action == 'history'){ ?>
                <input class="userdetailButtons" type="button" value="Back" onclick="javascripr:history.back();" />	
                <? }else{ ?>
                <input class="userdetailButtons" type="button" value="Back" onclick="javascript:window.location='?page=payment&cart=<? echo($GLOBALS['cart']) ?>'" />	
				<input class="userdetailButtons" type="button" value="Finish" onclick="javascript:window.location='?page=finish&cart=<? echo($GLOBALS['cart']) ?>'" />	                <? } ?>
                  </td>
                </tr>
				</table>
          </div>
        </div>
		<div><!--<img src="img/product_list_bottom.png" width="602" height="10" />--></div>    
    </div>
