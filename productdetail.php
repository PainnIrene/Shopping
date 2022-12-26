<?
	$pid = $_GET['pid'];

	$sql = "SELECT * FROM products WHERE productid=" . $pid;
	$pdata = getData($sql);

?>



<!-- NEW TABLE -->

<div class="productlist">
<div><!--<img src="img/product_list_top.png" width="602" height="10" />--></div>   
<div class="products">

<div class="product_tabledetails" >	

<table width="580" cellpadding="0" cellspacing="0">

<tr>
<td colspan="3" valign="middle"><span style="font-size:20px;"><? echo('<Strong>'. $pdata[0]['productname']) .'</Strong>' ?></span></td>
</tr>

<tr>
<td colspan="3" valign="middle" height="1px"></td>
</tr>

<tr>
<td colspan="3" valign="middle" height="10px">&nbsp;</td>
</tr>

<tr>
<td width="300px" align="center"><img src="<? echo(productfolder . $pdata[0]['productimage'])?>"></td>
<td width="5px"></td>
<td width="375px"  valign="top">

	<table width="900px" cellpadding="" cellspacing="10px">
        <tr>
            <td width="100px" valign="top">Category:</td>
            <td width="275px" valign="top">
			<? 
                $sql = "SELECT * FROM categories WHERE categoriesid=" . $pdata[0]['categoriesid'];
                $catedata = getData($sql);

				echo('<Strong>'. $catedata[0]['categoriesname'] .'</Strong>'); ?>
            </td>
        </tr>
        <tr>
            <td width="100px" valign="top" >Description:</td>
            <td width="500px" valign="top"cellpadding="0"><? echo('<Strong>'. $pdata[0]['productdes']) .'</Strong>' ?></td>
        </tr>
        <tr>
            <td width="100px">Price:</td>
            <td width="275px"><span class="textprice">$<? echo('<Strong>'. $pdata[0]['price']) .'</Strong>' ?></span></td>
        </tr>
        <tr>
            <td width="100px">In Stock (Items):</td>
            <td width="275px"><strong><? echo($pdata[0]['qty']); ?></strong></td>
        </tr>
	</table>


</td>
</tr>

<tr>
<td align="center" class="pagenumber"><a href="<? echo(productlargefolder . 'large_' . $pdata[0]['productimage'])?>" rel="lightbox"><!--View Large Image--></a></td>
<td colspan="2" align="left">
	<? if($pdata[0]['qty'] == 0){ ?>
        <img src="./img/soldout.jpg" height="120px"> 

    <? }else{ ?>
    <a href="?page=addcart&cart=<? echo($GLOBALS['cart']) ?>&pid=<? echo($pid); ?>">
    <img src="./img/Icon/addtocart.png" width="150" />

    </a>
	<? } ?>
    &nbsp;
    <a href="#" onClick="javascript:history.back();">
        <img src="img/Icon/back.png" height="45px" />
    </a>
  
</td>
</tr>

</table>

</div>
</div>
</div>




