
<div class="main_menu">
<a id="logo" href="?page=productlist&cart=all"><img src="./img/LogoBrand1.png" alt="Logo" width="140px" height="70px" color="black"></a>
<ul class="Level1">
<li><strong><a href="?page=productlist&cart=all">Home Page</a></strong></li>
<li><strong><a class="Category" href="?page=productlist&cart=30">Asus</a></strong>
<li><strong><a class="Category" href="?page=productlist&cart=31">Lenovo</a></strong>
<li><strong><a href="?page=aboutus&cart=<? echo($GLOBALS['cart']) ?>">About Us</a></strong></li>
<li><strong><a href="?page=contact&cart=<? echo($GLOBALS['cart']) ?>">Contact Us</a></strong></li>
</ul>
<div class="findform">	
    	<form method="post" action="?page=productlist&cart=<? echo($GLOBALS['cart']) ?>">
			<input type="text" name="find" id="find" title="Search" placeholder="Search..." />
            <button type="submit" id="SearchButton"><a><img id="searchIcon" src="./img/Icon/search.svg" width="20px"></img></button>          
        </form>
	</div>
<div class="BlockMenuIcons" >
       <a href="?page=addcart&cart=<? echo($GLOBALS['cart']) ?>" class="Icons"><img src="./img/Icon/shopping.svg" width="40px"></a> 
       <a href="?page=myaccount&cart=<? echo($GLOBALS['cart']) ?>"><img src="./img/Icon/profile.svg" class="Icons" width="40px"></a>        
       <div id="quantitiesPro">
<?
    if($GLOBALS['totalitems'] > 1){
        echo($GLOBALS['totalitems']); 
    }
    else{
        echo($GLOBALS['totalitems']); 
    }
?>  
</div></div></div>
<marquee>Create an account for better product support!</marquee>



   
    

