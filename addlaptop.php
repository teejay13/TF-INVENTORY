<?php 

  include 'html_blocks/header.php';

  include 'html_blocks/nav.php';

  include 'php_action/db_connect.php';

  include 'php_action/teachersfund.php';

  $teachersfund = new TeachersFund();

  $laptop = 'laptop';

  if (isset($_POST['submit'])&&isset($_POST['tf_id'])&&isset($_POST['brand'])&&isset($_POST['model'])&&isset($_POST['service_tag'])&&isset($_POST['mac_address'])) {
      
      $tf_id = $_POST['tf_id'];
      $brand = $_POST['brand'];
      $model = $_POST['model'];
      $service_tag = $_POST['service_tag'];
      $mac_address = $_POST['mac_address'];

      $addlaptopresult = $teachersfund->addlaptop($tf_id,$brand,$model,$service_tag,$mac_address,$conn);

      if ($addlaptopresult) { ?>
      <script type="text/javascript">
            var tf_id= '<?php echo $tf_id ?>';
            toastr.success('Laptop with id '+tf_id+ ' added sucessfully ', 'Success', {timeOut: 5000})
      </script>
       <?php 
      }
      else { ?>
      <script>
            toastr.error('You Got Error', 'Inconceivable!', {timeOut: 5000})
      </script>
      <?php
      }

    }


 ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add Laptop</li>
      </ol>
      <div class="row">
        <div class="col-12">

          <button class="btn btn-primary" data-toggle="modal" data-target="#addLaptopModal">Add Laptop</button>


          <div class="card mb-3" style="margin-top: 30px;">
        <div class="card-header">
          <i class="fa fa-table"></i> Laptop</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered"  width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>TF_ID</th>
                  <th>BRAND</th>
                  <th>MODEL</th>
                  <th>SERVICE_TAG</th>
                  <th>MAC_ADDRESS</th>
                  <th>STATUS</th>
                  <th>OPERATIONS</th>
                </tr>
              </thead>
              <tbody>
                  <?php $teachersfund->getallaptops($conn); ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>TF_ID</th>
                  <th>BRAND</th>
                  <th>MODEL</th>
                  <th>SERVICE_TAG</th>
                  <th>MAC_ADDRESS</th>
                  <th>STATUS</th>
                  <th>OPERATIONS</th>
                </tr 
              </tfoot>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
        </div>
      </div>
    </div>
    <?php 

        include 'html_blocks/footer.php';

        include 'html_blocks/modal.php';

     ?>
    <script>
        
    </script>
  </div>
