    <div class="modal fade modalMolder" id="addSupplier" role="dialog" >
      <div class="modal-dialog" style="background-color:#ffffff;">
        <form class="form-horizontal" action="/suppliers" method="POST">
          {!! csrf_field() !!}
          <div class="modal-header headerMolder">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><p> <i class="fa fa-building fa-lg"></i> &nbsp; Add New Supplier </p></h4>
          </div>
          <div class="modal-body">
            <div class="form-group" id="name">
              <label class="control-label col-sm-4">Supplier Name:</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Supplier Name">
              </div>
            </div>
            <div class="form-group" id="ref_id">
              <label class="control-label col-sm-4">Supplier Code:</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="ref_id" name="ref_id" placeholder="Enter Supplier Code">
              </div>
            </div>
            <div class="form-group" id="email">
              <label class="control-label col-sm-4">Email Address:</label>
              <div class="col-sm-7">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Supplier Email Address">
              </div>
            </div>
            <div class="form-group" id="contact">
              <label class="control-label col-sm-4">Contact Number:</label>
              <div class="col-sm-7">
                <input type="test" class="form-control" id="contact" name="contact" placeholder="Enter Supplier Contact Number">
              </div>
            </div>
            <div class="form-group" id="address">
              <label class="control-label col-sm-4">Company Address:</label>
              <div class="col-sm-7">
               <textarea class="form-control" placeholder="Enter Company Address" rows="5" id="address" name="address"></textarea>
              </div>
            </div>
            <div class="form-group" id="description">
              <label class="control-label col-sm-4">Supplier Information:</label>
              <div class="col-sm-7">
               <textarea class="form-control" placeholder="Enter Description (Optional)" rows="5" id="description" name="description"></textarea>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary add" id="btn_submit"><span class="glyphicon glyphicon-plus-sign"></span> Submit</button>
            <button type="button" class="btn btn-primary add" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Close</button>
          </div>
        </form>
      </div>
    </div>