<?php 

	include 'db_connect.php';

	if (isset($_POST['tf_id'])&&isset($_POST['brand'])&&isset($_POST['model'])&&isset($_POST['service_tag'])&&isset($_POST['mac_address'])){
		
		$tf_id = $_POST['tf_id'];
	    $brand = $_POST['brand'];
	    $model = $_POST['model'];
	    $service_tag = $_POST['service_tag'];
	    $mac_address = $_POST['mac_address'];
	    $status = '1';
	    $updated_by = "teachers fund";
	    $updated_at = $created_at = date('Y-m-d H:i:s');

	    $query = "UPDATE `laptop_tbl` SET `brand`='$brand',`model`='$model',`service_tag`='$service_tag',`mac_address`='$mac_address',`status`='$status',`updated_by`='$updated_by',`updated_at`='$updated_at' WHERE `tf_id` = '$tf_id'";
	    $result = $conn->query($query);
	    
	    echo json_encode($result);

	}

 ?>