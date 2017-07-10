
@extends('layouts.app')
@section('content')
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script>
$(document).ready(function() {
    $("#s_quantity").keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    $("#s_price").keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
            (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    $("#btn_confirm").click(function() {

        $("input[name='name']").val($("input[name='s_name']").val());
        $("input[name='item_code']").val($("input[name='s_item_code']").val());
        $("input[name='item_category']").val($("#s_item_category_id option:selected").text());
        $("input[name='item_supplier']").val($("#s_item_supplier_id option:selected").text());
        $("input[name='item_category_id']").val($("#s_item_category_id option:selected").val());
        $("input[name='item_supplier_id']").val($("#s_item_supplier_id option:selected").val());
        $("textarea[name='description']").val($("textarea[name='s_description']").val());
        $("input[name='quantity']").val($("input[name='s_quantity']").val());
        $("input[name='price']").val($("input[name='s_price']").val());
    });

    $("#check").submit(function() {
      (this).children("input[name='item_category']").remove();
      (this).children("input[name='item_supplier'").remove();
    });
});
</script>


@include('layouts.menu')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-0">
      <div class="nav-side-menu submenu">
        @include('navigation.dashboard')
       </div>
     </div>
  </div>
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Inventory System</h1>
    @include('inventory.add')
    @include('inventory.categories.category')    
    @include('inventory.suppliers.supplier')
    @include('inventory.confirmation')
  </div>
</div>
@endsection
