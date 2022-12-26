<?
	if($_SESSION['sess_customerid'] != ''){
		echo("<script>window.location = '?page=userdetail&cart=" . $GLOBALS['cart'] . "&action=empty'; </script>");		
	}

	$login = $_REQUEST['login'];
?>

	<div class="productlist2">
        <div class="products2">
        	<div class="product_table2">	
              <? 
					if($login == 'fail'){
						echo('<span class="product_table"><font color="#CC0000"><strong><u>Invalid username and password.</u></strong></font></span>');
					} 
			   ?>

			  

				<form action="?page=validateuser&cart=<? echo($GLOBALS['cart']) ?>" method="post">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr height="130px">
                    <td algin="center">
                    <br /><br />
                  <h1 class="signinp">Sign In</h1>
                    <p>
					<p class="signinp">E-mail Address:</p>
                    <input class="loginInput" type="text" name="email" id="email" /><br />
					<p class="signinp">Password:</p>
                    <input class="loginInput" type="password" name="password" id="password" /><br />
                    </p>

                    </td>
                  </tr>
                  <tr>
                    <td align="center" class="bodylinks">
                      <input class="signin" type="submit" value="Sign In" />  
                  </td>
                  </tr>
                  <tr>
                    <td>
                      <br><br><br>
                      <nav class="signinp">Don't Have Account?
                      <a href="?page=registration&cart=<? echo($GLOBALS['cart']) ?>">Sign up Now </a></nav>
                    </td>
                  </tr>
                </table>
              </form>         
              </div>
        </div>
    </div>
