<?php 

	include 'db_connect.php';

	if (isset($_POST['tf_id'])){
		
		$tf_id = $_POST['tf_id'];
	    $time_return = $_POST['time_return'];
		$updated_at = date('Y-m-d H:i:s');

	    $query = "UPDATE `issue_laptop` SET `time_return`='$time_return',`updated_at`='$updated_at' WHERE `laptop_id` = '$tf_id' ORDER BY `id` DESC LIMIT 1";
	    $result = $conn->query($query);
	    if ($result == 'true') {
	    	$updatelaptopquery = "UPDATE `laptop_tbl` SET `status`='1',`updated_by`='Teachers Fund',`updated_at`='$updated_at' WHERE `tf_id` = '$tf_id'";
	    	$updatelaptopresult = $conn->query($updatelaptopquery);
	    	echo json_encode(array('error'=>'false'));
	    }
	    
	    

	}

 ?>