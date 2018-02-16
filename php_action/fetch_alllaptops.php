<?php 

	include 'db_connect.php';


	$query = "SELECT * FROM `laptop_tbl`";
	$result = $conn->query($query);
	$dataArray = array('data' => array());
	if ($result) {
		while ($data =mysqli_fetch_array($result)) {

			if ($data[6]=='1') {
				$status= '<span style="font-size: 18px" class="badge badge-secondary">Engaged</span>';
				$option ='<a href="#" class="editor_edit" data-toggle="modal" data-target="#editLaptopModal" data_tfid ="'.$data[1].'">Edit</a> | <a href="./deletelaptop.php?tf_id='.$data[1].'" class="editor_remove">Delete</a> | <a href="#" class="editor_edit" data-toggle="modal" data-target="#withdrawLaptopModal">Withdraw</a>';
			}elseif ($data[6]=='2') {
				$status= '<span style="font-size: 18px" class="badge badge-success">Available</span>';
				$option ='<a href="#" class="editor_edit" data-toggle="modal" data-target="#editLaptopModal">Edit</a> | <a href="./deletelaptop.php?tf_id='.$data[1].'" class="editor_remove">Delete</a> | <a href="" class="editor_edit" data-toggle="modal" data-target="#issueLaptopModal">Issue</a>';
			}
			

			$dataArray['data'][] =  array( 
			$data[1],
			$data[2],
			$data[3],
			$data[4],
			$data[5],
			$status,
			$option);
		}

		

		/*$results =  ["sEcho" => 1,
	        	"iTotalRecords" => count($data),
	        	"iTotalDisplayRecords" => count($data),
	        	"aaData" => $data ];*/
	}
	

    echo json_encode($dataArray);


 ?>