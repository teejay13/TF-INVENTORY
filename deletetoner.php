<?php 

	include 'php_action/db_connect.php';

  	include 'php_action/teachersfund.php';

  	$teachersfund = new TeachersFund();

  	$id = $_GET['id'];


    $deltoner = $teachersfund->deletetoner($conn,$id);
    
    if ($deltoner) { ?>
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