
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
              <div class="col-md-4 mb-3">
                <label for="validationDefault01">TF id</label>
                <input type="text" class="form-control" name="tf_id" id="validationDefault01"  value="<?php echo $teachersfund->generatelaptopid($conn); ?>" required readonly>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault01">Brand</label>
                <input type="text" class="form-control" name="brand" id="validationDefault01" placeholder="Brand" value="" required>
              </div>
              <div class="col-md-4 mb-3">
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
                  <input type="text" class="form-control" name="time_giving" id="validationDefault02" placeholder="" value="<?php echo date('Y-m-d H:i:s'); ?>"  disabled="" required>
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
        <button type="submit" class="btn btn-primary"  name="submit">Issue</button>
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
                <input type="text" class="form-control" name="time_return" id="validationDefault01"  value="<?php echo date('Y-m-d H:i:s'); ?>"  disabled="" required>
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



<!-- ADD LAPTOP MODAL
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
              <div class="col-md-4 mb-3">
                <label for="validationDefault01">Printer Name</label>
                <input type="text" class="form-control" name="printer_name" id="validationDefault01"  value="" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault01">Printer Nickname</label>
                <input type="text" class="form-control" name="printer_nickname" id="validationDefault01" placeholder="Brand" value="" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault02">Printer Model</label>
                <input type="text" class="form-control" name="printer_model" id="validationDefault02" placeholder="Model" value="" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault03">Printer Type</label>
                <select class="form-control" name="printer_type">
                    <option selected>Select One</option>
                  <option value="Coloured">Coloured</option>
                  <option value="Black/White">Black/White</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid service tag.
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
