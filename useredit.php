<?
	require_once ('config/session.php');

	$address = $_REQUEST['address'];
	$postcode = $_REQUEST['postcode'];
	$city = $_REQUEST['city'];
	$country = $_REQUEST['country'];
	$phone = $_REQUEST['phone'];
	$fax = $_REQUEST['fax'];
?>
	<div class="productlist3">
		<div><img src="img/product_list_top.png" width="602" height="10" /></div>    
        <div class="products3">
        	<div class="product_table">	
            <form action="?page=saveuser&action=edit" method="post" name="form" id="form">
			  <table width="592" border="0" cellspacing="0" cellpadding="0">
                <tr height="25px">
                <td colspan="2"><strong><a href="index.php?page=userdetail&cart=all"><u>Personal Details</u></a> > Update Profile </strong></td>
                </tr>
                <tr height="25px">
                <td colspan="2"><strong>Your Address</strong></td>
                </tr>
                <tr height="25px">
                <td>Address:</td>
                <td><input type="text" name="txtaddress" id="txtaddress" value="<? echo($address); ?>"></td>
                </tr>
                <tr height="25px">
                <td>Post Code:</td>
                <td><input type="text" name="txtpostcode" id="txtpostcode" value="<? echo($postcode) ?>"></td>
                </tr>
                <tr height="25px">
                <td>City:</td>
                <td><input type="text" name="txtcity" id="txtcity" value="<? echo($city) ?>"></td>
                </tr>
                <tr height="25px">
                <td>Country:</td>
                <td>

				<?
                    require_once('lib/function.php');
                    $sql = "SELECT * FROM countrylist";
                    $rowcount = getRowCount($sql);
                    $row = getData($sql);
                ?>
				<select name="txtcountry" id="txtcountry" onchange="javascript:if(country.value==188){frmpwd.style.visibility='hidden';frmpwd_text.style.visibility='hidden'}else{frmpwd.style.visibility='visible';frmpwd_text.style.visibility='visible'}">
                <option value="" SELECTED>Please Select</option>
                <?
                    for($i = 0; $i < $rowcount; $i++){
						if($country == $row[$i][0]){
                ?>
                        <option value="<? echo($row[$i][0]); ?>" selected><? echo($row[$i][1]); ?></option>
				<? }else{ ?>                		
                        <option value="<? echo($row[$i][0]); ?>"><? echo($row[$i][1]); ?></option>
            
                <? }} ?>    
                
                </select>

                </td>
                </tr>

                <tr height="25px">
                <td colspan="2"><strong>Your Contact Information</strong></td>
                </tr>
                <tr height="25px">
                <td>Phone Number:</td>
                <td><input type="text" name="txtphone" id="txtphone" value="<? echo($phone) ?>"></td>
                </tr>
                <tr height="25px">
                <td>Fax Number:</td>
                <td><input type="text" name="txtfax" id="txtfax" value="<? echo($fax) ?>"></td>
                </tr>

                <tr height="25px">
                <td>&nbsp;</td>
                <td>
                <input class="usereditInput" type="reset" value="Reset" />
                    
                <input class="usereditInput" type="submit" value="Submit" />
            </td>
                </tr>

              </table>
              
              </form>
              </div>
        </div>
		<div></div>    
    </div>
