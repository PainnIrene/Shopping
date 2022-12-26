<?
        $hostname = "localhost";       
	$user = "root";
	$pass = "";
	$dbname = "php_project";
        
	$mydb = mysqli_connect( $hostname, $user, $pass, $dbname) or die("Connection failed: " . mysqli_connect_error());
?>

