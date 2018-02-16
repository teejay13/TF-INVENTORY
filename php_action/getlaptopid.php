<?php 


	include 'db_connect.php';


	if (isset($_GET["tf_id"])) {

		$tf_id = $_GET["tf_id"];
		
		$query = "SELECT tf_id FROM `laptop_tbl` WHERE `tf_id`= '$tf_id'";
			$result = $conn->query($query);
			$row =  mysqli_fetch_array($result);
			echo json_encode($row);
	}



 ?>