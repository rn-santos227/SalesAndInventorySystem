    <div class="container-fluid">
      <div class="row">
        <div class="col-md-9 col-md-offset-0 container-fluid">
          <form class="form-horizontal" id="add">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4><i class="fa fa-cube fa-lg"></i> &nbsp; <b>Add New Product</b></h4>
                <p style="color: red;">Please fill up all the required field ( <i class="fa fa-asterisk fa-sm red"></i> ).</p>
              </div>
              <div class="panel-body">
                <div class="form-group" id="s_name">
                  <label class="control-label col-sm-4"><i class="fa fa-asterisk fa-sm red"></i> Product Name:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="s_name" name="s_name" placeholder="Enter Product Name">
                  </div>
                </div>
                <div class="form-group" id="s_item_code">
                  <label class="control-label col-sm-4"><i class="fa fa-asterisk fa-sm red"></i> Product Code:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="s_item_code" name="s_item_code" placeholder="Enter Product Code (Barcode/QR Code)" required>
                  </div>
                </div>
                <div class="form-group" id="s_item_category_id">
                  <label class="control-label col-sm-4"><i class="fa fa-asterisk fa-sm red"></i> Product Category:</label>
                  <div class="col-sm-7">
                    <section class="flexbox">
                      <div class="stretch">
                        <select class="form-control" id="s_item_category_id" name="s_item_category_id" required>
                          @forelse($item_categories as $item_category)
                            <option value="{{$item_category->id}}">{{ $item_category->name }}</option>
                          @empty
                            <option value="0">Uncategorized</option>
                          @endforelse
                        </select>
                      </div>
                      <div class="normal">
                        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#addCategory"><span class="glyphicon glyphicon-plus"></span></button>
                      </div>
                    </section>
                  </div>
                </div>
                <div class="form-group" id="s_item_supplier_id">
                  <label class="control-label col-sm-4"><i class="fa fa-asterisk fa-sm red"></i> Product Supplier:</label>
                  <div class="col-sm-7">
                    <section class="flexbox">
                      <div class="stretch">
                        <select class="form-control" id="s_item_supplier_id" name="s_item_supplier_id" required>
                          @forelse($item_suppliers as $item_supplier)
                            <option value="{{$item_supplier->id}}">{{ $item_supplier->name }}</option>
                          @empty
                            <option value="0">Default</option>
                          @endforelse
                        </select>
                      </div>
                      <div class="normal">
                        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#addSupplier"><span class="glyphicon glyphicon-plus"></span></button>
                      </div>
                    </section>
                  </div>
                </div>
                <div class="form-group" id="s_description">
                  <label class="control-label col-sm-4">Product Information:</label>
                  <div class="col-sm-7">
                    <textarea class="form-control" placeholder="Enter Information (Optional)" rows="5" id="s_description" name="s_description"></textarea>
                  </div>
                </div>
                <div class="form-group" id="s_quantity">
                  <label class="control-label col-sm-4"><i class="fa fa-asterisk fa-sm red"></i> Product Quantity:</label>
                  <div class="col-sm-7">
                    <input type="number" class="form-control" id="s_quantity" name="s_quantity" value = "1" min="1" placeholder="Enter Product Quantity" required>
                  </div>
                </div>
                <div class="form-group" id="s_price">
                  <label class="control-label col-sm-4"><i class="fa fa-asterisk fa-sm red"></i> Product Price:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="s_price" name="s_price" value = "1" min="1" placeholder="Enter Product Price" required>
                  </div>
                </div>
              </div>
              <div class="panel-footer clearfix">
                <button type="button" class="btn btn-primary add" onclick="window.location='/items';"><span class=" glyphicon glyphicon-circle-arrow-left"></span> &nbsp; Back</button>
                <button type="button" class="btn btn-primary add pull-right" id="btn_confirm" data-toggle="modal" data-target="#confirmation"><span class="glyphicon glyphicon-plus-sign"></span> &nbsp; Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>