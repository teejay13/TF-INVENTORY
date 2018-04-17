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


		function addprinter($printer_id,$printer_name,$printer_nickname,$printer_model,$printer_type,$conn){

			$created_at = date('Y-m-d H:i:s');

			$query = "INSERT INTO `printer_tbl`(`printer_id`,`tf_id`,`printer_name`, `printer_nickname`, `printer_model`, `printer_type`, `created_at`) VALUES ('','$printer_id','$printer_name','$printer_name','$printer_model','$printer_type','$created_at')";
			
			$result = $conn->query($query);

			return $result;

		}


		public function getallprinters($conn){
			$query = "SELECT * FROM `printer_tbl`";
			$result = $conn->query($query);
			if ($result) {
				while ($data = mysqli_fetch_assoc($result)) {
						$option ='<a href="#" class="editor_edit" data-toggle="modal" data-target="#editprinterModal" 
							data-whatever="'.$data['printer_id'].'" >Edit</a> | <a href="./deleteprinter.php?printer_id='.$data['printer_id'].'" class="editor_remove">Delete</a>';

					printf('
							<tr>
							<td><a href="">'.$data['tf_id'].'</a></td>
							<td>'.$data['printer_name'].'</td>
							<td>'.$data['printer_nickname'].'</td>
							<td>'.$data['printer_model'].'</td>
							<td>'.$data['printer_type'].'</td>
							<td>'.$option.'</td>
							</tr>
						');
				}
			}
		}



		function deleteprinter($conn,$id){
			$query = $conn->query("DELETE FROM printer_tbl WHERE printer_id = '$id'");
			return $query;
		}

		function getallPrinter($conn){
			$query = "SELECT printer_id, printer_nickname FROM printer_tbl";
			$result = $conn->query($query);

			return $result;
		}


		function addsupplier($supply_id,$supplier_name,$supplier_address,$conn){

			$created_at = date('Y-m-d H:i:s');

			$query = "INSERT INTO `printersupply_tbl`(`supply_id`, `supplier_name`, `supplier_address`, `created_at`) VALUES ('$supply_id','$supplier_name','$supplier_address','$created_at')";
			
			$result = $conn->query($query);

			return $result;

		}


		function deletesupplier($conn,$id){
			$query = $conn->query("DELETE FROM printersupply_tbl WHERE id = '$id'");
			return $query;
		}



		public function getallsuppliers($conn){
			$query = "SELECT * FROM `printersupply_tbl`";
			$result = $conn->query($query);
			if ($result) {
				while ($data = mysqli_fetch_assoc($result)) {
						$option ='<a href="./deletesupplier.php?id='.$data['id'].'" class="editor_remove">Delete</a>';

					printf('
							<tr>
							<td><a href="">'.$data['supply_id'].'</a></td>
							<td>'.$data['supplier_name'].'</td>
							<td>'.$data['supplier_address'].'</td>
							<td>'.$option.'</td>
							</tr>
						');
				}
			}
		}

		function getallSupplier($conn){
			$query = "SELECT id, supplier_name FROM printersupply_tbl";
			$result = $conn->query($query);

			return $result;
		}

		function addprinterstock($toner_id,$supply_id,$stock,$conn){

			$created_at = date('Y-m-d H:i:s');
			$query = "INSERT INTO `printer_inventory`(`toner_id`, `supplier_id`, `stock`, `created_at`) VALUES ('$toner_id','$supply_id','$stock','$created_at')";

			$result = $conn->query($query);

			if($result){
				$query1 ="SELECT * from toner_tbl where id = $toner_id";
				$result1 = $conn->query($query1);
				$data1 = mysqli_fetch_assoc($result1);
				$totalstock = $stock + $data1['toner_stock'];

				$updated_at  = date('Y-m-d H:i:s');
				$query2 ="UPDATE `toner_tbl` SET `toner_stock`='$totalstock',`updated_at`='$updated_at' WHERE `id` = $toner_id";
				$result1 = $conn->query($query2);
			}

			return $result;

		}


		public function getallprinterStocks($conn){
			$query = "SELECT * FROM `printer_inventory`";
			$result = $conn->query($query);
			if ($result) {
				while ($data = mysqli_fetch_assoc($result)) {
						$option ='<a href="./deleteprinter.php?printer_id='.$data['id'].'" class="editor_remove">Delete</a>';

						$query1 ="SELECT * from toner_tbl where id = ".$data['toner_id'];
						$result1 = $conn->query($query1);
						$data1 = mysqli_fetch_assoc($result1);

						$query2 ="SELECT * from printersupply_tbl where id = ".$data['supplier_id'];
						$result2 = $conn->query($query2);
						$data2 = mysqli_fetch_assoc($result2);


						
					printf('
							<tr>
							<td><a href="">'.$data1['toner_name'].'</a></td>
							<td>'.$data2['supplier_name'].'</td>
							<td>'.$data['stock'].'</td>
							<td>'.$option.'</td>
							</tr>
						');
				}
			}
		}

		function addtoner($toner_id,$toner_name,$reorderlvl,$conn){

			$created_at = date('Y-m-d H:i:s');

			$query = "INSERT INTO `toner_tbl`(`toner_id`, `toner_name`,`re-order-lvl`,`created_at`) VALUES ('$toner_id','$toner_name','$reorderlvl','$created_at')";
			
			$result = $conn->query($query);

			return $result;

		}

		public function getalltoners($conn){
			$query = "SELECT * FROM `toner_tbl`";
			$result = $conn->query($query);
			if ($result) {
				while ($data = mysqli_fetch_assoc($result)) {

					

					if ($data['toner_stock'] <= $data['re-order-lvl']) {
						$status = '<span style="font-size: 18px padding-right: 80px "  class="badge badge-danger">'.$data['re-order-lvl'].'</span>';
					}else {
						$status= '<span style="font-size: 18px ;  padding-right: 80px; " class="badge badge-success">'.$data['re-order-lvl'].'</span>';
					}
						$option ='<a href="./deletetoner.php?id='.$data['id'].'" class="editor_remove">Delete</a> || 
						<a href="#" class="editor_edit" data-toggle="modal" data-target="#issuetonerout">Issue</a> ||
						<a href="#" class="editor_edit" data-toggle="modal" data-target="#viewissuedreportmodal" data-whatever="'.$data['id'].'" >View Report</a>';

					printf('
							<tr>
							<td><a href="">'.$data['toner_id'].'</a></td>
							<td>'.$data['toner_name'].'</td>
							<td>'.$data['toner_stock'].'</td>
							<td>'.$status.'</td>
							<td>'.$option.'</td>
							</tr>
						');
				}
			}
		}

		function deletetoner($conn,$id){
			$query = $conn->query("DELETE FROM toner_tbl WHERE id = '$id'");
			return $query;
		}

		function getallToner($conn){
			$query = "SELECT id, toner_name  FROM toner_tbl";
			$result = $conn->query($query);

			return $result;
		}



		function issuetoner($toner_id,$printer_id,$name,$time_giving,$conn){

			$created_at = date('Y-m-d H:i:s');

			$query = "INSERT INTO `issue_toner`(`toner_id`, `printer_id`, `fullname`, `time_giving`, `created_at`) VALUES ('$toner_id','$printer_id','$name','$time_giving','$created_at')";
			

			$result = $conn->query($query);

			if($result){
				$query1 ="SELECT * from toner_tbl where id = $toner_id";
				$result1 = $conn->query($query1);
				$data1 = mysqli_fetch_assoc($result1);
				$totalstock = $data1['toner_stock'] - 1;

				$updated_at  = date('Y-m-d H:i:s');
				$query2 ="UPDATE `toner_tbl` SET `toner_stock`='$totalstock',`updated_at`='$updated_at' WHERE `id` = $toner_id";
				$result1 = $conn->query($query2);
			}

			return $result;

		}











	}


 ?>