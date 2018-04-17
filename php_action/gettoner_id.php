<?php 


	include 'db_connect.php';


	if (isset($_GET["id"])) {

		$id = $_GET["id"];
		$dataArray = array('data' => array());
		
		$query = "SELECT * FROM `issue_toner` WHERE `toner_id`= '$id' ORDER BY time_giving DESC LIMIT 15";
		$result = $conn->query($query);
		while($row = mysqli_fetch_assoc($result)) {
            $query1 = "SELECT * from printer_tbl where printer_id = $row[printer_id]";
			$result1 = $conn->query($query1);
			$data1 = mysqli_fetch_assoc($result1);
            $option[] = '<tr>
							<td><a href="">'.$data1['printer_nickname'].'</a></td>
							<td>'.$row['fullname'].'</td>
							<td>'.$row['time_giving'].'</td>
						</tr>';
          }
       echo json_encode($option);
	}

 ?>