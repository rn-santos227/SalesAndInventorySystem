    <div class="modal fade modalMolder" id="addCategory" role="dialog" >
      <div class="modal-dialog" style="background-color:#ffffff;">
        <form class="form-horizontal" action="/categories" method="POST">
          {!! csrf_field() !!}
          <div class="modal-header headerMolder">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><p> <span class="glyphicon glyphicon-list"></span> &nbsp; Add New Category</p></h4>
          </div>
          <div class="modal-body">
            <p><b>Please fill up tPhe following fields:</b></p>
            <div class="form-group" id="name">
              <label class="control-label col-sm-4">Category Name:</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Category Name">
              </div>
            </div>
            <div class="form-group" id="ref_id">
              <label class="control-label col-sm-4">Category Code:</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" id="ref_id" name="ref_id" placeholder="Enter Category Code">
              </div>
            </div>
            <div class="form-group" id="description">
              <label class="control-label col-sm-4">Category Description:</label>
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