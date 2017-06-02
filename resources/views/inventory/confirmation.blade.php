    <div class="modal fade modalMolder" id="confirmation" role="dialog" >
      <div class="modal-dialog" style="background-color:#ffffff;">
        <form class="form-horizontal" action="/items" id="check" method="POST">
          {!! csrf_field() !!}
          <div class="modal-header headerMolder">
            <h4 class="modal-title"><p>Product Confirmation Dialog </p></h4>
          </div>
          <div class="modal-body">
            <div class="form-group" id="name">
              <label class="control-label col-sm-4">Product Name:</label>
              <div class="col-sm-7">
                <input style="background-color:#ffffff;" type="text" class="form-control" id="name" name="name" readonly>
              </div>
            </div>
            <div class="form-group" id="item_code">
              <label class="control-label col-sm-4">Product Code:</label>
              <div class="col-sm-7">
                <input style="background-color:#ffffff;" type="text" class="form-control" id="item_code" name="item_code" readonly>
              </div>
            </div>
             <div class="form-group" id="item_category">
              <label class="control-label col-sm-4">Product Category:</label>
              <div class="col-sm-7">
                 <input style="background-color:#ffffff;" type="text" class="form-control" id="item_category" name="item_category" readonly>
                <input type="hidden" name="item_category_id" id="item_category_id">
              </div>
            </div>
            <div class="form-group" id="item_supplier">
              <label class="control-label col-sm-4">Product Supplier:</label>
              <div class="col-sm-7">
                <input style="background-color:#ffffff;" type="text" class="form-control" id="item_supplier" name="item_supplier" readonly>
                <input type="hidden" name="item_supplier_id" id="item_supplier_id">
              </div>
            </div>
            <div class="form-group" id="description">
              <label class="control-label col-sm-4">Product Description:</label>
              <div class="col-sm-7">
                <textarea style="background-color:#ffffff;" class="form-control" placeholder="Enter Description (Optional)" rows="5" id="description" name="description" readonly></textarea>
              </div>
            </div>
            <div class="form-group" id="quantity">
              <label class="control-label col-sm-4">Product Quantity:</label>
              <div class="col-sm-7">
                <input style="background-color:#ffffff;" type="text" class="form-control" id="quantity" name="quantity" readonly>
              </div>
            </div>
            <div class="form-group" id="price">
              <label class="control-label col-sm-4">Product Price:</label>
              <div class="col-sm-7">
                <input style="background-color:#ffffff;" type="text" class="form-control" id="price" name="price" readonly>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger add" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> No</button>
            <button type="submit" class="btn btn-success add" id="btn_submit"><span class="glyphicon glyphicon-plus-sign"></span> Yes</button>
          </div>
        </form>
      </div>
    </div>