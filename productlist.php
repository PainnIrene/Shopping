<?

	require_once ('lib/function.php');
	$cateid = $_GET['cart'];
	$find = $_REQUEST['find'];
	$sql = "SELECT * FROM settings WHERE settingcode=1";
	$settingvalue = getData($sql);
	$showproduct = ($settingvalue[0]['value'] * 3);
	$subpage = $_GET['subpage'];
	if($subpage == '' or $subpage == 0){
		$subpage = 1;
	}
	$start = (($showproduct * $subpage) - $showproduct) + 1 ;
	if( $cateid == 'all' or $cateid ==''){
		$sql = "SELECT * FROM products ORDER BY productid desc LIMIT " . ($start - 1) . ", $showproduct";
		if($find != ''){
		$sql="SELECT * FROM products WHERE productname like '%" . $find . "%' or productdes like '%" . 
		$find . "%' ORDER BY productid desc LIMIT " . ($start - 1) . ", $showproduct";
		}
	}
	else{
		$sql = "SELECT * FROM products WHERE categoriesid=" . $cateid . " ORDER BY productid desc LIMIT " . ($start - 1) . ", $showproduct";
		if($find != ''){
		$sql="SELECT * FROM products WHERE productname like '%" . $find . "%' or productdes like '%" . 
		$find . "%' and categoriesid=" . $cateid . " ORDER BY productid desc LIMIT " . ($start - 1) . ", $showproduct";
		}
	}
	
	$looprow = getRowCount($sql);
	$row = getData($sql);	
?>

	<div class="productlist">
		<div></div>    
        <div class="products">
        	<div class="product_table">	
				<?

					if($rowcount == 0){
						if($cateid != 'all'){					
							$sql = "SELECT * FROM categories WHERE categoriesid=" . $cateid;
							$catedata = getData($sql);
							echo('<h3>Sorry!! There is no products in ' . $catedata[0][1] . ' category.</h3>');
						}
						else{
							echo('<h3>Sorry!! There is no ' . $find . ' products.</h3>');
						}
					}
				
				?>
			  <table class="Tablelv1" width="588" border="0" cellspacing="0" cellpadding="0">
				<? 
					for($i = 1;$i <= $looprow; $i++ ){ 
						if(($i % 5) == 1){
							echo('<tr>');
						}
						if(($i % 5) == 0){
				?>
                <td width="196" align="center">
					<table class="tablelv2" width="196">                
                    <tr align="center" height="150px"><td>
                    <a href="?page=productdetail&cart=<? echo($GLOBALS['cart']) ?>&pid=<? echo($row[$i-1]['productid']); ?>">
                    <img src="<? echo(productfolder . $row[$i-1]['productimage']); ?>"/>
					</a>                    
                    </td></tr>
                    <tr align="center" height="30px"><td>
                    <? echo($row[$i-1]['productname']); ?>
                    </td></tr>
                    <tr align="center"><td>
                    Category: 
					<? 
						$sql = "SELECT * FROM categories WHERE categoriesid=" . $row[$i-1]['categoriesid'];
						$catedata = getData($sql);
						echo($catedata[0][1]); 
					?>
                    </td></tr>
                    <tr align="center"><td>
                    <span class="textprice">$<? echo($row[$i-1]['price']); ?></span><br />                    
                    <? if($row[$i-1]['qty'] == 0){ ?>
                        <img src="./img/soldout.jpg" height="70px"> 
                    <? }else{ ?>
                    <a href="?page=addcart&cart=<? echo($GLOBALS['cart']) ?>&pid=<? echo($row[$i-1]['productid']); ?>">
                        <img src="./img/Icon/addtocart.png" width="80" />
                    </a>
                    <? } ?>
                    &nbsp;
                    <a href="?page=productdetail&cart=<? echo($GLOBALS['cart']) ?>&pid=<? echo($row[$i-1]['productid']); ?>">
                        <img src="img/Icon/detail.png" height="25px"  />
                    </a>                  
                    </td></tr>
                    <tr>
                        <td height="5px" align="center"></td>
                    </tr>
					</table>
                 </td></tr>
				<?
                		}
						else{
				?>
                <td width="196" align="center" class="rightline">
					<table class="tablelv2" width="196">                
                    <tr align="center" height="150px"><td>
                    <a href="?page=productdetail&cart=<? echo($GLOBALS['cart']) ?>&pid=<? echo($row[$i-1]['productid']); ?>">
                    <img src="<? echo(productfolder . $row[$i-1]['productimage']); ?>" />
					</a>
                    </td></tr>
                    <tr align="center" height="30px"><td>
                    <? echo($row[$i-1]['productname']); ?>
                    </td></tr>
                    <tr align="center"><td>
                    Category: 
					<? 
						$sql = "SELECT * FROM categories WHERE categoriesid=" . $row[$i-1]['categoriesid'];
						$catedata = getData($sql);
						echo($catedata[0][1]); 
					?>
                    </td></tr>
                    <tr align="center"><td>
                    <span class="textprice">$<? echo($row[$i-1]['price']); ?></span><br />                    
                    <? if($row[$i-1]['qty'] == 0){ ?>
						<img src="./img/soldout.jpg" height="70px"> 
                    <? }else{ ?>
                    <a href="?page=addcart&cart=<? echo($GLOBALS['cart']) ?>&pid=<? echo($row[$i-1]['productid']); ?>">
					<img src="./img/Icon/addtocart.png" width="80" />
                    </a>
                    <? } ?>                   
                    &nbsp;
                    <a href="?page=productdetail&cart=<? echo($GLOBALS['cart']) ?>&pid=<? echo($row[$i-1]['productid']); ?>">
					<img src="img/Icon/detail.png" height="25px"  />
                    </a>                  
                    <tr>
                        <td height="5px" align="center"></td>
                    </tr>
					</table>
                 </td>
				<?
						}
					}
				?>
              </table>
              </div>             
				<div class="pagenumber">
                	<? 
	if( $cateid == 'all' or $cateid ==''){
		$sql = "SELECT * FROM products ORDER BY productid desc";
		if($find != ''){
		$sql="SELECT * FROM products WHERE productname like '%" . $find . "%' or productdes like '%" . $find . "%' ORDER BY productid desc";
		}
	}
	else{
		$sql = "SELECT * FROM products WHERE categoriesid=" . $cateid . " ORDER BY productid desc";
		if($find != ''){
		$sql="SELECT * FROM products WHERE productname like '%" . $find . "%' or productdes like '%" . 
		$find . "%' and categoriesid=" . $cateid . " ORDER BY productid desc";
		}
	}
					
						$rowcount = getRowCount($sql);
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
									echo('<a href="?page=productlist&cart='.$GLOBALS['cart'].'&subpage='.$i.'">'.$i.'</a>');		
								}
							}
							else{
								if($i == $subpage){
									echo('<font color="#CC0000">' . $i . '</font> | ');
								}
								else{
									echo('<a href="?page=productlist&cart='.$GLOBALS['cart'].'&subpage='.$i.'">'.$i. '</a> | ');		
								}
							}
						}
					?>
                </div>              
              
        </div>
		<div></div>    
    </div>
