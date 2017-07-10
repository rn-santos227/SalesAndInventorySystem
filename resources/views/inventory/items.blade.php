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
                  <i class="fa fa-search" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">Search</span>
                </button>
                <button type="button" class="btn btn-primary" onclick="window.location='/inventory';">
                  <i class="fa fa-plus-circle" aria-hidden="true"></i> <span class="hidden-xs hidden-sm">New Item</span>
                </button>
              </span>
            </div>
          </div>
          <div class="panel-footer" style="padding-left: 50px; padding-right: 50px; ">
            <form class="form-horizontal">
              <div class="form-group">           
                <div class="input-group">
                  <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-search" aria-hidden="true"></i> Search By</span>
                  <select class="form-control" aria-describedby="sizing-addon2">
                    <option>ID Number</option>
                    <option>Product Name</option>
                    <option>Product Code</option>
                    <option>Product Category</option>
                    <option>Product Supplier</option>
                    <option>Product Description</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-list-ul" aria-hidden="true"></i> 
Sort By</span>
                  <select class="form-control" aria-describedby="sizing-addon2">
                    <option>ID Number</option>
                    <option>Product Name</option>
                    <option>Product Code</option>
                    <option>Product Category</option>
                    <option>Product Supplier</option>
                    <option>Date Added</option>
                    <option>Last Update</option>
                    <option>Quantity</option>
                    <option>Price</option>
                    <option>User Added</option>
                  </select>
              </div>
              </div>
          </form>
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
            <th>Quantity</th>
            <th>Price</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        @forelse($items as $item)
        <tr>
          <td>{{$item->name}}</td>
          <td>{{$item->quantity}}</td>
          <td>{{$item->price}}</td>
          <td style="width: 340px;">
            <button class="btn btn-primary" name="view" style="width: 100px;" data-toggle="modal" data-target="#{{$item->id}}">View</button>
            <button class="btn btn-warning" name="view" style="width: 100px;" data-toggle="modal" data-target="#edit{{$item->id}}">Edit</button>
            <button class="btn btn-danger" style="width: 100px;">Remove</button>
          </td>
        </tr>        
        @empty
          <tr rowspan="4"><p>No Item Available</p></tr>
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
    @include('inventory.view')
    @include('inventory.edit')
  </div>
</div>
@endsection
