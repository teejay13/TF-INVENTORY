<?php 

  include 'html_blocks/header.php';

  include 'html_blocks/nav.php';

  include 'php_action/db_connect.php';

  include 'php_action/teachersfund.php';

  $teachersfund = new TeachersFund();

  if (isset($_POST['submit'])&&isset($_POST['tf_id'])&&isset($_POST['printer_name'])&&isset($_POST['printer_nickname'])&&isset($_POST['printer_model'])&&isset($_POST['printer_type'])) {
      
    $printer_id = $_POST['tf_id'];
    $printer_name = $_POST['printer_name'];
    $printer_nickname = $_POST['printer_nickname'];
    $printer_model = $_POST['printer_model'];
    $printer_type = $_POST['printer_type'];

    $addprinterresult = $teachersfund->addprinter($printer_id,$printer_name,$printer_nickname,$printer_model,$printer_type,$conn);

    if ($addprinterresult) { ?>
    <script>
          alert('Printer Added');
    </script>
     <?php 
    }
    else { ?>
    <script>
          alert('Printer not added');
    </script>
    <?php
    }

  }


  if (isset($_POST['suppliersubmit'])&&isset($_POST['supply_id'])&&isset($_POST['supplier_name'])&&isset($_POST['supplier_address'])) {
      
    $supply_id = $_POST['supply_id'];
    $supplier_name = $_POST['supplier_name'];
    $supplier_address = $_POST['supplier_address'];

    $addsupplierresult = $teachersfund->addsupplier($supply_id,$supplier_name,$supplier_address,$conn);

    if ($addsupplierresult) { ?>
    <script>
          alert('Supplier Added');
    </script>
     <?php 
    }
    else { ?>
    <script>
          alert('Supplier not added');
    </script>
    <?php
    }

  }


  $gettonerselect = $teachersfund->getallToner($conn);

  $getsupplierselect = $teachersfund->getallSupplier($conn);


  if (isset($_POST['stocksubmit'])&&isset($_POST['toner_id'])&&isset($_POST['supply_id'])&&isset($_POST['stock'])) {
      
    $toner_id = $_POST['toner_id'];
    $supply_id = $_POST['supply_id'];
    $stock = $_POST['stock'];

    $addstockresult = $teachersfund->addprinterstock($toner_id,$supply_id,$stock,$conn);

    if ($addstockresult) { ?>
    <script>
          alert('Printer Stock Added');
    </script>
     <?php 
    }
    else { ?>
    <script>
          alert('Printer Stock not added');
    </script>
    <?php
    }

  }


  if (isset($_POST['tonerstocksubmit'])&&isset($_POST['toner_id'])&&isset($_POST['toner_name'])&&isset($_POST['re-order-lvl'])) {
      
    $toner_id = $_POST['toner_id'];
    $toner_name = $_POST['toner_name'];
    $reorderlvl = $_POST['re-order-lvl'];

    $addtonerresult = $teachersfund->addtoner($toner_id,$toner_name,$reorderlvl,$conn);

    if ($addtonerresult) { ?>
    <script>
          alert('Toner Added');
    </script>
     <?php 
    }
    else { ?>
    <script>
          alert('Toner not added');
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
        <li class="breadcrumb-item active">Printer</li>
      </ol>
      <div class="row">
        <div class="col-12">

          <button class="btn btn-primary" data-toggle="modal" data-target="#addPrinterDevice">Add Printer</button>

          <button class="btn btn-primary" data-toggle="modal" data-target="#addprinterToner">Add Toner</button>

          <div class="pull-right">

            <button class="btn btn-primary" data-toggle="modal" data-target="#addsupplierdetails">Add Supplier</button>
            

            <button class="btn btn-primary" data-toggle="modal" data-target="#viewallsuppliers">View Suppliers</button>

            <button class="btn btn-primary" data-toggle="modal" data-target="#addprinterstock">Add Stock</button>
          </div>
          

      <div class="card mb-3" style="margin-top: 30px;">
        <div class="card-header">
          <i class="fa fa-table"></i> TONER</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered"  width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>TONER_ID</th>
                  <th>NAME</th>
                  <th>STOCK</th>
                  <th>RE-ORDER LEVEL</th>
                  <th>OPERATIONS</th>
                </tr>
              </thead>
              <tbody>
                <?php $teachersfund->getalltoners($conn); ?>
              </tbody>
              <tfoot>
              <tr>
                <th>TONER_ID</th>
                <th>NAME</th>
                <th>STOCK</th>
                <th>RE-ORDER LEVEL</th>
                <th>OPERATIONS</th>
              </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated at <?php  ?></div>
      </div>


          <div class="card mb-3" style="margin-top: 30px;">
        <div class="card-header">
          <i class="fa fa-table"></i> PRINTER</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered"  width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>PRINTER_ID</th>
                  <th>NAME</th>
                  <th>NICKNAME</th>
                  <th>MODEL</th>
                  <th>TYPE</th>
                  <th>OPERATIONS</th>
                </tr>
              </thead>
              <tbody>
                <?php $teachersfund->getallprinters($conn); ?>
              </tbody>
              <tfoot>
              <tr>
                <th>PRINTER_ID</th>
                <th>NAME</th>
                <th>NICKNAME</th>
                <th>MODEL</th>
                <th>TYPE</th>
                <th>OPERATIONS</th>
              </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated at <?php  ?></div>
      </div>

      <div class="card mb-3" style="margin-top: 30px;">
        <div class="card-header">
          <i class="fa fa-table"></i> STOCK UPDATES</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered"  width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>PRINTER NICKNAME</th>
                  <th>SUPPLIER NAME</th>
                  <th>STOCK</th>
                  <th>OPERATIONS</th>
                </tr>
              </thead>
              <tbody>
                <?php $teachersfund->getallprinterStocks($conn); ?>
              </tbody>
              <tfoot>
              <tr>
                <th>PRINTER NICKNAME</th>
                <th>SUPPLIER NAME</th>
                <th>STOCK</th>
                <th>OPERATIONS</th>
              </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated at <?php  ?></div>
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
