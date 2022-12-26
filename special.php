<?
	require_once ('lib/function.php');

	$sql = "SELECT * FROM products ORDER BY productid desc";
	$rowcount = getRowCount($sql);
	$row = getData($sql);
	
	$show_row = rand(0, $rowcount-1);
?>
<div class="wrapper">
    <div class="submenu">
    <div><img src="img/sub_menu1_top.png" width="207" height="11" /></div>
    <div class="menubg1">
    
    <div class="menutitle">
    <div class="text">
    <div class="bullet">
    </div>
    <div class="text2">
        <img src="./img/newproduct.png" width="30px";>
        <span style="font-size:20px;"><strong>New Products</strong></span>
</div>
    </div>
    </div>
    
    <div class="description">
		<div class="image">
      	<a href="?page=productdetail&cart=<? echo($GLOBALS['cart']) ?>&pid=<? echo($row[$show_row]['productid']); ?>">
        <img src="img/product/<? echo($row[$show_row]['productimage']); ?>" />
		</a>        
        </div>        
	  <div class="text">
      	<a href="?page=productdetail&cart=<? echo($GLOBALS['cart']) ?>&pid=<? echo($row[$show_row]['productid']); ?>">
	  	<? echo($row[$show_row]['productname']); ?>
        </a>
		<br />
        Category: 
        <? 
            $sql = "SELECT * FROM categories WHERE categoriesid=" . $row[$show_row]['categoriesid'];
            $catedata = getData($sql);
            echo($catedata[0][1]); 
        ?>
        </div>
		<div class="price">$<? echo($row[$show_row]['price']); ?></div>        

		<div align="center">
        <? if($row[$show_row]['qty'] == 0){ ?>
            <img src="./img/soldout.jpg" height="50px"> 
            
        <? }else{ ?>
        <a href="?page=addcart&cart=<? echo($GLOBALS['cart']) ?>&pid=<? echo($row[$show_row]['productid']); ?>">
        <img src="./img/Icon/addtocart.png" width="80" />

        </a>
        <? } ?>
        &nbsp;
        <a href="?page=productdetail&cart=<? echo($GLOBALS['cart']) ?>&pid=<? echo($row[$show_row]['productid']); ?>">
        <img src="img/Icon/detail.png" height="25px"  />

        </a>                  
        </div>
        
    </div>
    </div>
    <div>
</div>
    </div>
        </div>
