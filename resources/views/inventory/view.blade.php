@foreach($items as $item)
<div class="modal fade modalMolder" id="{{$item->id}}" role="dialog" >
    <div class="modal-dialog" style="background-color:#ffffff;">
            <form class="form-horizontal">
            <div class="modal-header headerMolder">
                <h4 class="modal-title"><p>Product Information Panel </p></h4>
            </div>
            <div class="modal-body">
            <div class="form-group" id="name">
                <label class="control-label col-sm-4">Product Name:</label>
                <div class="col-sm-7">
                    <input style="background-color:#ffffff;" type="text" class="form-control" id="name" name="name" value="{{$item->name}}" readonly>
                </div>
            </div>
            <div class="form-group" id="item_code">
                <label class="control-label col-sm-4">Product Code:</label>
                <div class="col-sm-7">
                    <input style="background-color:#ffffff;" type="text" class="form-control" id="item_code" name="item_code" value="{{$item->item_code}}" readonly>
                </div>
            </div>
            <div class="form-group" id="item_category">
                <label class="control-label col-sm-4">Product Category:</label>
                <div class="col-sm-7">
                    <input style="background-color:#ffffff;" type="text" class="form-control" id="item_category" name="item_category" value="{{$item->item_category->name}}" readonly>
                </div>
            </div>
            <div class="form-group" id="item_supplier">
            <label class="control-label col-sm-4">Product Supplier:</label>
                <div class="col-sm-7">
                    <input style="background-color:#ffffff;" type="text" class="form-control" id="item_supplier" name="item_supplier" value="{{$item->item_supplier->name}}" readonly>
                </div>
            </div>
            <div class="form-group" id="item_supplier">
                <label class="control-label col-sm-4">Created At:</label>
                <div class="col-sm-7">
                    <input style="background-color:#ffffff;" type="text" class="form-control" id="item_supplier" name="item_supplier" value="{{$item->created_at}}" readonly>
                </div>
            </div>
            <div class="form-group" id="description">
                <label class="control-label col-sm-4">Product Description:</label>
                <div class="col-sm-7">
                    <textarea style="background-color:#ffffff;" class="form-control" placeholder="Enter Description (Optional)" rows="5" id="description"   name="description" readonly>{{$item->description}}</textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger add" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Dismiss</button>
        </div>
        </form>
    </div>
</div>
@endforeach