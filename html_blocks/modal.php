
<!-- ADD LAPTOP MODAL
 -->

<div class="modal fade bd-example-modal-lg" id="addLaptopModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Laptop</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="">
      <div class="modal-body">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">TF id</label>
                <input type="text" class="form-control" name="tf_id" id="validationDefault01"  value="<?php echo $teachersfund->generatelaptopid($conn); ?>" required readonly>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">Brand</label>
                <input type="text" class="form-control" name="brand" id="validationDefault01" placeholder="Brand" value="" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                  <label for="validationDefault02">Model</label>
                  <input type="text" class="form-control" name="model" id="validationDefault02" placeholder="Model" value="" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault03">Service Tag</label>
                <input type="text" class="form-control" name="service_tag" id="validationDefault03" placeholder="Service Tag" required>
                <div class="invalid-feedback">
                  Please provide a valid service tag.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault04">Mac Address</label>
                <input type="text" class="form-control" id="validationDefault04" name="mac_address" placeholder="Mac Address" required>
                <div class="invalid-feedback">
                  Please provide a valid mac address.
                </div>
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary" type="submit" name="submit">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!-- EDIT LAPTOP MODAL
 -->


<div class="modal fade bd-example-modal-lg" id="editLaptopModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-fetch="php_action/getlaptop.php">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Laptop</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" id="editlaptopform" action="">
      <div class="modal-body">
            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="validationDefault01">TF id</label>
                <input type="text" class="form-control" name="tf_id" id="tf_id"  value="" required readonly>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault01">Brand</label>
                <input type="text" class="form-control" name="brand" id="brand" placeholder="Brand" value="" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault02">Model</label>
                <input type="text" class="form-control" name="model" id="model" placeholder="Model" value="" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault03">Service Tag</label>
                <input type="text" class="form-control" name="service_tag" id="service_tag" placeholder="Service Tag" required>
                <div class="invalid-feedback">
                  Please provide a valid service tag.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault04">Mac Address</label>
                <input type="text" class="form-control" id="mac_address" name="mac_address" placeholder="Mac Address" required>
                <div class="invalid-feedback">
                  Please provide a valid mac address.
                </div>
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"  name="submit" >Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!-- ISSUE LAPTOP MODAL
 -->


 <div class="modal fade bd-example-modal-lg" id="issueLaptopModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Issue Laptop</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" id="issuelaptopform" action="">
      <div class="modal-body">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">TF id</label>
                <input type="text" class="form-control" name="tf_id" id="tf_id_issue"  value="" required readonly>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">Full Name</label>
                <input type="text" class="form-control" name="fullname" id="validationDefault01" placeholder="" value="" required>
              </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault02">Time Giving</label>
                  <input type="text" class="form-control" name="time_giving" id="validationDefault02" placeholder="" value="<?php echo date('Y-m-d H:i:s'); ?>"  readonly required>
                </div>
                 <!-- <div class="col-md-6 mb-3">
                  <label for="validationDefault03">Time Return</label>
                  <input type="text" class="form-control" name="time_return" id="validationDefault03" placeholder="" disabled="">
                </div>  -->       
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                  <label for="devicestatus">Device Status</label>
                  <select class="custom-select" name="device_status">
                    <option value="working">Working</option>
                    <option value="not working">Not Working</option>
                  </select>
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"  name="submit">Issue Laptop</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!--  WITHDRAW LAPTOP MODAL
 -->


 <div class="modal fade bd-example-modal-lg" id="withdrawLaptopModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Withdraw Laptop</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" id="withdrawlaptopform" action="">
      <div class="modal-body">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">TF id</label>
                <input type="text" class="form-control" name="tf_id" id="tf_id_withdraw"  value="" required readonly>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">Time Return</label>
                <input type="text" class="form-control" name="time_return" id="validationDefault01"  value="<?php echo date('Y-m-d H:i:s'); ?>"  readonly required>
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"  name="submit">Withdraw</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!-- ADD PRINTER MODAL
 -->

 <div class="modal fade bd-example-modal-lg" id="addPrinterDevice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Printer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="">
      <div class="modal-body">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">TF id</label>
                <input type="text" class="form-control" name="tf_id" id="tf_id_printer"  value="<?php echo $teachersfund->generateprinterid($conn) ?>" required readonly>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">Printer Name</label>
                <input type="text" class="form-control" name="printer_name" id="validationDefault01"  value="" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">Printer Nickname</label>
                <input type="text" class="form-control" name="printer_nickname" id="validationDefault01" placeholder="Brand" value="" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault02">Printer Model</label>
                <input type="text" class="form-control" name="printer_model" id="validationDefault02" placeholder="Model" value="" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault03">Printer Type</label>
                <select class="form-control" name="printer_type">
                    <option selected>Select One</option>
                  <option value="Coloured">Coloured</option>
                  <option value="Black/White">Black/White</option>
                </select>
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary" type="submit" name="submit">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!-- EDIT PRINTER MODAL
 -->

 <div class="modal fade bd-example-modal-lg" id="editprinterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Printer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" id="editprinterform" action="">
      <div class="modal-body">
            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="validationDefault01">TF id</label>
                <input type="hidden" class="form-control" name="id" id="p_id" value="" required readonly>
                <input type="text" class="form-control" name="tf_id" id="printertf_id"  value="" required readonly>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault01">Printer Name</label>
                <input type="text" class="form-control" name="printer_name" id="printer_name"  value="" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault01">Printer Nickname</label>
                <input type="text" class="form-control" name="printer_nickname" id="printer_nickname" placeholder="Brand" value="" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="validationDefault02">Printer Model</label>
                <input type="text" class="form-control" name="printer_model" id="printer_model" placeholder="Model" value="" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault03">Printer Type</label>
                <select class="form-control" name="printer_type">
                    <option selected>Select One</option>
                  <option value="Coloured">Coloured</option>
                  <option value="Black/White">Black/White</option>
                </select>
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"  name="submit" >Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!-- ADD SUPLIER MODAL
 -->

 <div class="modal fade bd-example-modal-lg" id="addsupplierdetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Supplier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="">
      <div class="modal-body">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">Supply id</label>
                <input type="text" class="form-control" name="supply_id" id="supply_id"  value="<?php echo $teachersfund->generatesupplyid($conn) ?>" required readonly>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">  Name</label>
                <input type="text" class="form-control" name="supplier_name" id="validationDefault01" placeholder="Supplier Name" value="" required>
              </div>
            </div>
            <div>
              <div class="col-md-12 mb-6">
                <label for="validationDefault01"> Address</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="supplier_address" placeholder="Address" required ></textarea>
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary" type="submit" name="suppliersubmit">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- VIEW ALL SUPLIERS
 -->

 <div class="modal fade bd-example-modal-lg" id="viewallsuppliers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ALL SUPPLIERS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="card mb-3" style="margin-top: 30px;">
        <div class="card-header">
          <i class="fa fa-table"></i> SUPPLIER</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered"  width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>SUPPLY_ID</th>
                  <th>NAME</th>
                  <th>ADDRESS</th>
                  <th>OPERATIONS</th>
                </tr>
              </thead>
              <tbody>
                <?php $teachersfund->getallsuppliers($conn); ?>
              </tbody>
              <tfoot>
              <tr>
              <th>SUPPLY_ID</th>
                  <th>NAME</th>
                  <th>ADDRESS</th>
                  <th>OPERATIONS</th>
              </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated at <?php  ?></div>
      </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>



<!-- ADD PRINTER STOCK MODAL
 -->

 <div class="modal fade bd-example-modal-lg" id="addprinterstock" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Printer Stock</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="">
      <div class="modal-body modal-md">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">Toner</label>
                <select class="form-control" name="toner_id">
                <?php
                  while ($row = mysqli_fetch_assoc($gettonerselect1)){ ?>

                  <option value="<?php echo $row ['id'] ?>"><?php echo $row ['toner_name'] ?></option>
                <?php
                  }
                ?>
                </select>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">Supplier</label>
                <select class="form-control" name="supply_id">
                <?php
                  while ($rowsupplier = mysqli_fetch_assoc($getsupplierselect)){ ?>

                  <option value="<?php echo $rowsupplier ['id'] ?>"><?php echo $rowsupplier ['supplier_name'] ?></option>
                <?php
                  }
                ?>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">Stock</label>
                <input type="text" class="form-control" name="stock" id="validationDefault01" placeholder="stock" value="" required>
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary" type="submit" name="stocksubmit">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- ADD PRINTER STOCK MODAL
 -->

 <div class="modal fade bd-example-modal-lg" id="addprinterToner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Printer Toner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="">
      <div class="modal-body modal-md">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">Toner id</label>
                <input type="text" class="form-control" name="toner_id" id="toner_id"  value="<?php echo $teachersfund->generatetonerid($conn); ?>" required readonly>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">  Name</label>
                <input type="text" class="form-control" name="toner_name" id="validationDefault01" placeholder="Toner Name" value="" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">Re Order-level</label>
                <input type="number" class="form-control" name="re-order-lvl" id="validationDefault01" placeholder="Re Order level" value="" required>
              </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary" type="submit" name="tonerstocksubmit">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- ISSUE PRINTER STOCK MODAL
 -->

 <div class="modal fade bd-example-modal-lg" id="issuetonerout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Issue Out Toner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="">
      <div class="modal-body modal-md">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">Toner id</label>
                <select class="form-control" name="toner_id">
                <?php
                  while ($row = mysqli_fetch_assoc($gettonerselect)){ ?>

                  <option value="<?php echo $row ['id'] ?>"><?php echo $row ['toner_name'] ?></option>
                <?php
                  }
                ?>
                </select>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">Printer Nickname</label>
                <select class="form-control" name="printer_id">
                <?php
                  while ($row = mysqli_fetch_assoc($getprinterselect)){ ?>

                  <option value="<?php echo $row ['printer_id'] ?>"><?php echo $row ['printer_nickname'] ?></option>
                <?php
                  }
                ?>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">Name</label>
                <input type="text" class="form-control" name="name" id="validationDefault01" placeholder="Full Name" value="" required>
              </div>
              <div class="col-md-6 mb-3">
                  <label for="validationDefault02">Time Giving</label>
                  <input type="text" class="form-control" name="time_giving" id="validationDefault02" placeholder="" value="<?php echo date('Y-m-d H:i:s'); ?>"  readonly required>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary" type="submit" name="issuetonersubmit">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!-- VIEW ALL ISSUED TONERS
 -->

 <div class="modal fade bd-example-modal-lg" id="viewissuedreportmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Toner Issued Out</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Toner Issued Out</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered"  width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>PRINTER NAME</th>
                  <th>Full NAME</th>
                  <th>TIME GIVING</th>
                </tr>
              </thead>
              <tbody id="issuedtoners">
                  
              </tbody>
              <tfoot>
                <tr>
                  <th>PRINTER NAME</th>
                  <th>Full NAME</th>
                  <th>TIME GIVING</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated at <?php  ?></div>
      </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>





