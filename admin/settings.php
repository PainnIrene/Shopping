<? 	
 	require_once ('config/session.php');
	require_once('lib/function.php');
?>

<h3>Change Administrator Password</h3>
<form method="post" action="home.php?page=changepwd">
	New Password:<BR>
	<input type="password"><BR><BR>
	New Confrimed Password:<BR>
	<input type="password" name="cpwd" id="cpwd"><BR><BR>
	Current Password:<BR>
	<input type="password" name="pwd" id="pwd"><BR><BR>

	<input type="submit" value="Change">
	<input type="reset" value="Reset">
</form>
<div class="space"></div>

<?
	$action = $_GET['action'];
	if($action == 'fail'){
		echo('Invalid Password!!');
		echo('<div class="space"></div>');
	}
	if($action == 'changed'){
		echo('Password changed complete!!');
		echo('<div class="space"></div>');
	}

?>
<hr />

<?
	$sql = "SELECT * FROM settings";
	$row = 	getData($sql);
?>
<h3>Page Settings</h3>
<form method="post" action="?page=settingssave">
	Rows Par Page in Product Page (Front End)<BR>
	<input type="text" name="value"  id="value" value="<? echo($row[0]['value']) ?>">
    <BR/>
	<input type="submit" value="Change">
</form>

<div class="space"></div>