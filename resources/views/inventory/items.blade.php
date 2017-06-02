@extends('layouts.app')
@section('content')    

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
    <div class="container-fluid">
      <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">
          <i class="fa fa-compass fa-lg"></i> &nbsp; <b>Item Navigation</b></h4>
          </div>
          <div class="panel-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <span class="glyphicon glyphicon-search"></span> <span class="hidden-xs hidden-sm">Search</span>
                </button>
              </span>
            </div>
          </div>
          <div class="panel-footer">
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
              <button type="button" class="btn btn-primary" onclick="window.location='/inventory';">
                <span class="glyphicon glyphicon-plus-sign"></span> &nbsp; <span class="hidden-xs hidden-sm">Add Item</span>
              </button>

              <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-tag"></span> &nbsp; <span class="hidden-xs hidden-sm">Search By <span class="caret"></span></span> 
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">Name</a></li>
                  <li><a href="#">Item Code</a></li>
                  <li><a href="#">Category</a></li>
                  <li><a href="#">Supplier</a></li>
                  <li><a href="#">Description</a></li>
                </ul>
              </div>

              <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list"></span> &nbsp; <span class="hidden-xs hidden-sm">Sort By <span class="caret"></span></span> 
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">Name</a></li>
                  <li><a href="#">Item Code</a></li>
                  <li><a href="#">Category</a></li>
                  <li><a href="#">Supplier</a></li>
                  <li><a href="#">Date Added</a></li>
                  <li><a href="#">Quantity</a></li>
                  <li><a href="#">Price</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
     <div class="row">
        <table class="table table-bordered table-responsive">
        <thead>
          <tr>
            <th>Product Name</th>
            <th>Item Code</th>
            <th>Category</th>
            <th>Supplier</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        @forelse($items as $item)
        <tr>
          <td>{{$item->name}}</td>
          <td>{{$item->item_code}}</td>
          <td>{{$item->item_category->name}}</td>
          <td>{{$item->item_supplier->name}}</td>
          <td>{{$item->quantity}}</td>
          <td>{{$item->price}}</td>
          <td style="width: 230px;">
            <button class="btn btn-warning" style="width: 100px;">Update</button>
            <button class="btn btn-danger" style="width: 100px;">Deactivate</button>
          </td>
        </tr
>        @empty
          <p>No Item Available</p>
        @endforelse
        </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
          {{ $items->links()}}
      </div>
    </div>
  </div>
</div>
@endsection
