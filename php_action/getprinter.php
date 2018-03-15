<?php 


	include 'db_connect.php';


	if (isset($_GET["printer_id"])) {

		$printer_id = $_GET["printer_id"];
		
		$query = "SELECT * FROM `printer_tbl` WHERE `printer_id`= '$printer_id'";
			$result = $conn->query($query);
			$row =  mysqli_fetch_array($result);
			echo json_encode($row);
	}



 ?>