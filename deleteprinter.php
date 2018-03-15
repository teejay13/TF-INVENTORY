<?php 

	include 'php_action/db_connect.php';

  	include 'php_action/teachersfund.php';

  	$teachersfund = new TeachersFund();

  	$id = $_GET['printer_id'];


    $delprinter = $teachersfund->deleteprinter($conn,$id);
    if ($delprinter) { ?>
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
           window.location = "printer.php";
      </script>
    <?php
    }

 ?>