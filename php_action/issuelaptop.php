<?php 

	include 'db_connect.php';

	if (isset($_POST['tf_id'])&&isset($_POST['fullname'])){
		
		$tf_id = $_POST['tf_id'];
	    $fullname = $_POST['fullname'];
	    $time_giving = $_POST['time_giving'];
	    $device_status = $_POST['device_status'];
	    $created_by = 'TeachersFund';
		$created_at = date('Y-m-d H:i:s');

	    $query = "INSERT INTO `issue_laptop`(`laptop_id`, `fullname`, `time_giving`, `device_status`, `created_by`, `created_at`) VALUES ('$tf_id','$fullname','$time_giving','$device_status','$created_by','$created_at')";
	    $result = $conn->query($query);
	    if ($result == 'true') {
	    	$updatelaptopquery = "UPDATE `laptop_tbl` SET `status`='2',`updated_by`='Teachers Fund',`updated_at`='' WHERE `tf_id` = '$tf_id' ";
	    	$updatelaptopresult = $conn->query($updatelaptopquery);
	    	echo json_encode($updatelaptopresult);
	    }
	    
	    

	}

 ?>