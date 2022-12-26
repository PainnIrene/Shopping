<?
 	require_once ('config/session.php');
	require_once('lib/function.php');

	$id = $_GET['id'];

	$sql = "SELECT * FROM customers WHERE customerid=$id";
	$customer = getData($sql);
?>
<h3>Edit Customers</h3>

            <form action="?page=customersave" method="post" onsubmit="return validcus();">
            	<input type="hidden" name="cid" id="cid" value="<? echo($id) ?>">
			  <table width="592" border="0" cellspacing="0" cellpadding="0">
                <tr height="25px">
                <td colspan="2"><strong>Personal Details</strong></td>
                </tr>
                <tr height="25px">
                <td width="200">First Name:</td>
                <td width="392"><input type="text" name="txtfirstname" id="txtfirstname" value="<? echo($customer[0]['firstname']) ?>"></td>
                </tr>
                <tr height="25px">
                <td>Last Name:</td>
                <td><input type="text" name="txtlastname" id="txtlastname" value="<? echo($customer[0]['lastname']) ?>"></td>
                </tr>
                <tr height="25px">
                <td>Email Address:</td>
                <td><input name="txtemail" type="text" id="txtemail" value="<? echo($customer[0]['email']) ?>" size="25"></td>
                </tr>
                <tr height="25px">
                <td>Gender:</td>
                <td>
				<? if($customer[0]['sex'] == 0){ ?>                
                    <input type="radio" name="sex" id="sex" value=0 checked />Female
                    <input type="radio" name="sex" id="sex" value=1 />Male
                <? }else{ ?>
                    <input type="radio" name="sex" id="sex" value=0 />Female
                    <input type="radio" name="sex" id="sex" value=1 checked />Male
                <? } ?>
                 </td>
                </tr>
                <tr height="25px">
                <td colspan="2"><strong>Address</strong></td>
                </tr>
                <tr height="25px">
                <td>Address:</td>
                <td><input type="text" name="txtaddress" id="txtaddress" value="<? echo($customer[0]['address']) ?>"></td>
                </tr>
                <tr height="25px">
                <td>Post Code:</td>
                <td><input type="text" name="txtpostcode" id="txtpostcode" value="<? echo($customer[0]['postcode']) ?>"></td>
                </tr>
                <tr height="25px">
                <td>City:</td>
                <td><input type="text" name="txtcity" id="txtcity" value="<? echo($customer[0]['city']) ?>"></td>
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
				<select name="txtcountry" id="txtcountry" onChange="javascript:if(country.value==188){frmpwd.style.visibility='hidden';frmpwd_text.style.visibility='hidden'}else{frmpwd.style.visibility='visible';frmpwd_text.style.visibility='visible'}">
                <option value="" SELECTED>Please Select</option>
                <?
                    for($i = 0; $i < $rowcount; $i++){
						if($customer[0]['country'] == $row[$i][0]){
				?>
                    <option value="<? echo($row[$i][0]); ?>" selected><? echo($row[$i][1]); ?></option>
                <?
						}
						else
						{
					
                ?>
                    <option value="<? echo($row[$i][0]); ?>"><? echo($row[$i][1]); ?></option>
            
                <? }
					} 
				?>    
                
                </select>

                </td>
                </tr>

                <tr height="25px">
                <td colspan="2"><strong>Contact Information</strong></td>
                </tr>
                <tr height="25px">
                <td>Phone Number:</td>
                <td><input type="text" name="txtphone" id="txtphone" value="<? echo($customer[0]['phone']) ?>"></td>
                </tr>
                <tr height="25px">
                <td>Fax Number:</td>
                <td><input type="text" name="txtfax" id="txtfax" value="<? echo($customer[0]['fax']) ?>"></td>
                </tr>


                <tr height="25px">
                <td colspan="2"><strong>Password</strong></td>
                </tr>
                <tr height="25px">
                <td>Password:</td>
                <td><input type="text" name="txtpwd" id="txtpwd" value="<? echo($customer[0]['password']) ?>"></td>


                <tr height="25px">
                <td>&nbsp;</td>
                <td>
                <input type="submit" value="Save" />
                <input type="button" value="Back" onClick="javascript:history.back();">
                </td>
                </tr>

              </table>
              
              </form>
