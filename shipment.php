<?
	if($GLOBALS['totalitems'] ==0 ){
		echo("<script>window.location = '?page=productlist&cart=" . $GLOBALS['cart'] . "'; </script>");		
	}

	$pid = $_GET['pid'];

	$sql = "SELECT * FROM shipment";
	$rowcount = getRowCount($sql);
	$row = getData($sql);

	$sql = "SELECT * FROM customers WHERE customerid=" . $_SESSION['sess_customerid'];
	$crow = getData($sql);

?>
<div class="productlist2">
<div><img src="img/product_list_top.png" width="602" height="10" /></div>    
<div class="products">
<div class="product_table">	


<form method="post" action="?page=shipmentsave&cart=<? echo($GLOBALS['cart']) ?>">
<table width="460px" cellpadding="0" cellspacing="0">
    <tr>
    <td width="250px" valign="top" class="rightline">
        <table width="250px" cellpadding="0" cellspacing="0">
            <tr height="20px">
            <td colspan="2"><strong>Shipping Address</strong></td>
            </tr>
            <tr height="20px">
            <td width="100px">Address:</td>
            <td><? echo($crow[0]['address']); ?></td>
            </tr>
            <tr height="20px">
            <td>Post Code:</td>
            <td><? echo($crow[0]['postcode']); ?></td>
            </tr>
            <tr height="20px">
            <td>City:</td>
            <td><? echo($crow[0]['city']); ?></td>
            </tr>
            
            <tr height="20px">
            <td>Country:</td>
            <td>
            <?
                $sql = "SELECT * FROM countrylist WHERE CountryID=". $crow[0]['country'];
                $country = getData($sql);
                echo($country[0][1]);
            ?>
            </td>
            </tr>
        </table>
    </td>

    <td width="10px">&nbsp;</td>

    <td width="200px" valign="top">
        <table width="200px" cellpadding="0" cellspacing="0">
            <tr>
            <td colspan="2" height="20px">
            <strong>Select a shipment option.</strong>
            </td>
            </tr>
        
        <? for($i=0; $i < $rowcount; $i++){ ?>
            <tr height="25px">
            <td>
            <?
                $sql = "SELECT * FROM orders WHERE orderid=". (int)($_SESSION['sess_orderid']);
                $order = getData($sql);
				if($row[$i]['shipmentid'] == $order[0]['shipmentid']){
					echo('<input type="radio" name="shipment[]" id="shipment[]" value="' . $row[$i]['shipmentid'] .'" checked>');
				}
				else{
					echo('<input type="radio" name="shipment[]" id="shipment[]" value="' . $row[$i]['shipmentid'] . '">');
				}
            ?>
            </td>
            <td><? echo($row[$i]['shipmentname']) ?></td>
            </tr>
        <? } ?>
        
            <tr height="10px">
            <td colspan="2">&nbsp;</td>
            </tr>
            
        </table>
    </td>
    </tr>
    <tr>
    <td colspan="3" align="right">
        <input class="userdetailButtons" type="button" value="Back to Cart" onclick="javascript:window.location='?page=addcart&cart=<? echo($GLOBALS['cart']) ?>'" />        
        <input class="userdetailButtons" type="submit" value="Next" />    </td>
    </tr>
</table>
</form>
</div>
</div>
<div><img src="img/product_list_bottom.png" width="602" height="10" /></div>    
</div>

