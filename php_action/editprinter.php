<?php 

	include 'db_connect.php';

	if (isset($_POST['tf_id'])&&isset($_POST['printer_name'])&&isset($_POST['printer_nickname'])&&isset($_POST['printer_model'])&&isset($_POST['printer_type'])){

        $id = $_POST['id'];
		$tf_id = $_POST['tf_id'];
        $printer_name = $_POST['printer_name'];
        $printer_nickname = $_POST['printer_nickname'];
        $printer_model = $_POST['printer_model'];
        $printer_type = $_POST['printer_type'];
        $updated_at  = date('Y-m-d H:i:s');

	    $query = " UPDATE `printer_tbl` SET `tf_id`= '$tf_id', `printer_name`='$printer_name',`printer_nickname`='$printer_nickname',`printer_model`='$printer_model',`printer_type`='$printer_type',`updated_at`= '$updated_at' WHERE `printer_id` = '$id' ";
	    $result = $conn->query($query);
	    echo json_encode($result);

	}

 ?>