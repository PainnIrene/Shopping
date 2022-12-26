<?
 	require_once ('config/session.php');
	require('lib/function.php');
	$cid = $_GET['cid'];
	
	if($cid == ''){
		$sql = "SELECT * FROM customers ORDER BY customerid desc";
	}
	else{
		$sql = "SELECT * FROM customers WHERE customerid=$cid";
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
<h3>Customers</h3>
<table cellspacing="0" cellpadding="0" width="820px" class="displaytable">
	<? 	if($cid != '' || $cid > 0){ 
			echo('<tr align="right"><td colspan="13"><input type="button" value="Back" onclick="javascripr:history.back();"></td></tr>
');			
		}
	?>
    <tr class="titletext" align="center" height="20px">
        <td>No.</td>
        <td width="100px">First Name</td>
        <td width="100px">Last Name</td>
        <td width="70px">Email</td>
        <td width="40px">Gender</td>
        <td width="100px">Address</td>
        <td width="40px">Postcode</td>
        <td width="70px">City</td>
        <td width="70px">Country</td>
        <td width="70px">Phone</td>
        <td width="70px">Fax</td>
        <td width="20px">Edit</td>
        <td width="20px">Delete</td>
    </tr>
    
	<?
		for($i=$start; $i <= $end; $i++){
	?>

    <tr height="40px">
		<td><? echo($i+1) ?></td>
		<td><? echo($row[$i]['firstname']) ?></td>
		<td><? echo($row[$i]['lastname']) ?></td>
		<td><? echo($row[$i]['email']) ?></td>
		<td align="center">
		<? 
			if($row[$i]['sex'] == 0){
				echo('F');
			}
			else{
				echo('M');
			}
		?>
        </td>
        
		<td><? echo($row[$i]['address']) ?></td>
		<td><? echo($row[$i]['postcode']) ?></td>
		<td><? echo($row[$i]['city']) ?></td>
		<td>
		<?
            $sql = "SELECT * FROM countrylist WHERE CountryID=". $row[$i]['country'];
            $country = getData($sql);
            echo($country[0][1]);
        ?>
        </td>
		<td><? echo($row[$i]['phone']) ?></td>
		<td><? echo($row[$i]['fax']) ?></td>



		<td align="center">
            <a href="?page=customeredit&id=<? echo($row[$i][0]) ?>"><img src="img/b_edit.png" width="16" height="16" /></a>
        </td>
		<td align="center">
            <a href="?page=customerdelete&id=<? echo($row[$i][0]) ?>" onClick="return confirm('Do you want to delete <? echo($row[$i][1]) ?> product?');"><img src="img/b_drop.png" width="16" height="16" /></a>
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
                echo('<a href="?page=customers&subpage='.$i.'">'.$i.'</a>');		
            }
        }
        else{
            if($i == $subpage){
                echo('<font color="#CC0000">' . $i . '</font> | ');
            }
            else{
                echo('<a href="?page=customers&subpage='.$i.'">'.$i. '</a> | ');		
            }
        }
    }
?>
</div>              
<div class="space"></div>


