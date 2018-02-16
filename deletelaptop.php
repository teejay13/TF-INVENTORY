<?php 

	include 'php_action/db_connect.php';

  	include 'php_action/teachersfund.php';

  	$teachersfund = new TeachersFund();

  	$tf = $_GET['tf_id'];


    $dellap = $teachersfund->deletelaptop($conn,$tf);
    if ($dellap) { ?>
    <script>
          
           alert('Record Deleted ...')
           window.location = "addlaptop.php";
    </script>
    <?php
    }
    else
    {
     ?>
     <script>
            alert('Record cant Deleted !!!')
           window.location = "addlaptop.php";
      </script>
    <?php
    }

 ?>