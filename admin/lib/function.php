<?

	function getData($sql){
		require('./config/connect.php');

		$result = mysqli_query($mydb, $sql);
		$i = 0;
		while($row = mysqli_fetch_array($result)){
			$data[$i++] = $row;
		}	
		mysqli_close($mydb);
			
		return $data;
	}


	function getRowCount($sql){

		require('./config/connect.php');
	
		$result = mysqli_query($mydb, $sql);

		$num = mysqli_num_rows($result);

		mysqli_close($mydb);

		return $num;
	}

	function execData($sql){
		require('./config/connect.php');

		if (!mysqli_query($mydb, $sql))
		{
			echo mysqli_error();
			die;
		}		

		mysqli_close($mydb);
	}

?>

