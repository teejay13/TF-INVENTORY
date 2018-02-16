<?php 
	include 'db_connect.php';


	/**
	* Teejay
	*/
	class TeachersFund
	{
		public function generatelaptopid($conn){
			$query = "SELECT * FROM `laptop_tbl`";
			$result = $conn->query($query);
			$get_table_status = mysqli_num_rows($result);
			$get_last_id = number_format(($get_table_status + 1) / 10000,4);
			$number = explode('.', $get_last_id);

			$id_generated = "TF".$number[1];

			return $id_generated;
		}

		public function getallaptops($conn){
			$query = "SELECT * FROM `laptop_tbl`";
			$result = $conn->query($query);
			if ($result) {
				while ($data = mysqli_fetch_assoc($result)) {
					if ($data['status'] == '2') {
						$status = '<span style="font-size: 18px" class="badge badge-secondary">Engaged</span>';
						$option ='<a href="#" class="editor_edit" data-toggle="modal" data-target="#editLaptopModal" data-whatever="'.$data['tf_id'].'">Edit</a> | <a href="./deletelaptop.php?tf_id='.$data['tf_id'].'" class="editor_remove">Delete</a> | <a href="#" class="editor_edit" data-toggle="modal" data-target="#withdrawLaptopModal" data-whatever="'.$data['tf_id'].'">Withdraw</a>';
					}else if ($data['status']== '1') {
						$status= '<span style="font-size: 18px" class="badge badge-success">Available</span>';
						$option ='<a href="#" class="editor_edit" data-toggle="modal" data-target="#editLaptopModal" 
							data-whatever="'.$data['tf_id'].'" >Edit</a> | <a href="./deletelaptop.php?tf_id='.$data['tf_id'].'" class="editor_remove">Delete</a> | <a href="#" class="editor_edit" data-toggle="modal" data-target="#issueLaptopModal" data-whatever="'.$data['tf_id'].'">Issue</a>';
					}
					printf('
							<tr>
							<td><a href="./wigal_ussd.php?username='.$data['tf_id'].'">'.$data['tf_id'].'</a></td>
							<td>'.$data['brand'].'</td>
							<td>'.$data['model'].'</td>
							<td>'.$data['service_tag'].'</td>
							<td>'.$data['mac_address'].'</td>
							<td>'.$status.'</td>
							<td>'.$option.'</td>
							</tr>
						');
				}
			}

		}
		public function addlaptop($tf_id,$brand,$model,$service_tag,$mac_address,$conn){

			$created_by = 'TeachersFund';
			$created_at = date('Y-m-d H:i:s');
			$status = '1';

			$query = "INSERT INTO `laptop_tbl`(`tf_id`, `brand`, `model`, `service_tag`, `mac_address`,`status`, `created_by`, `created_at`) VALUES ('$tf_id','$brand','$model','$service_tag','$mac_address','$status','$created_by','$created_at')";
			
			$result = $conn->query($query);

			return $result;

		}

		function getLaptop($tf_id,$conn){
			$query = "SELECT * FROM `laptop_tbl` WHERE `tf_id`= '$tf_id'";
			$result = $conn->query($query);
				if ($result) {
					return mysqli_fetch_assoc($result);
				}
		}


		public function updatelaptop($tf_id,$brand,$model,$service_tag,$mac_address,$conn){

			$updated_by = 'TeachersFund';
			$updated_at = date('Y-m-d H:i:s');

			$query = "UPDATE `laptop_tbl` SET `brand`='$brand',`model`='$model',`service_tag`='$service_tag',`mac_address`='$mac_address',`updated_by`='$updated_by',`updated_at`='$updated_at' WHERE `tf_id` = '$tf_id' ";
			
			$result = $conn->query($query);

			return $result; 

		}

		function deletelaptop($conn,$tf){
			$query = $conn->query("DELETE FROM laptop_tbl WHERE tf_id = '$tf'");
			return $query;
		}


		function issuelaptop($conn,$tf_id,$username,$device_status,$created_by,$created_at){

			$created_by = 'TeachersFund';
			$created_at = date('Y-m-d H:i:s');
			$time_giving = date('Y-m-d H:i:s');

			$query = "INSERT INTO `issue_laptop`(`laptop_id`, `user_name`, `time_giving`,`device status`, `created_by`, `created_at`) VALUES ('$tf_id','$username','$time_giving','$device_status','$created_at','$created_at')";
			
			$result = $conn->query($query);

			return $result; 
		}


		function withdrawlaptop($conn,$tf_id){
			$time_return = date('Y-m-d H:i:s');

			$query = "UPDATE `issue_laptop` SET `time_return`= '$time_return' WHERE `tf_id` = '$tf_id'";

			 $result = $conn->query($query);

			return $result; 

		}


		function addprinter($printer_name,$printer_nickname,$printer_model,$printer_type,$conn){

			$created_at = date('Y-m-d H:i:s');

			$query = "INSERT INTO `printer_tbl`(`printer_name`, `printer_nickname`, `printer_model`, `printer_type`, `created_at`) VALUES ('$printer_name','$printer_name','$printer_model','$printer_type','$created_at')";
			
			$result = $conn->query($query);

			return $result;

		}











	}


 ?>