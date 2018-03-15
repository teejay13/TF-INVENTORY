<?php 

	include 'php_action/db_connect.php';

  	include 'php_action/teachersfund.php';

  	$teachersfund = new TeachersFund();

  	$id = $_GET['id'];


    $delsupplier = $teachersfund->deletesupplier($conn,$id);
    
    if ($delsupplier) { ?>
    <script>
          
           alert('Record Deleted ...')
           window.location = "printer.php";
    </script>
    <?php
    }
    else
    {
     ?>
     <script>
            alert('Record cant Deleted !!!')
      </script>
    <?php
    }

 ?>