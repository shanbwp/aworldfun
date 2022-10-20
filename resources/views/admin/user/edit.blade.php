@extends('layouts.master')

@section('title')
Dashboard || GameFun
@endsection
@section('content')
<style>
    .redbg{
        background-color: #c42f35 !important;
    }
</style>
<div class="row">
  <div class="col-md-12">
    <div class="card redbg">
      <div class="card-header redbg">
        <div class="row">
          <div class="col-md-6">
            <h4 class="card-title"> Create User</h4>
          </div>
          <div class="col-md-6 ">
            <h4 class="card-title text-right ">
              <a href="{{route('user-list')}}" class="btn btn-primary">List of Users</a>
            </h4>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <form action="{{route('user-update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" name="name" value="{{$data->name}}" class="form-control" id="name">
            </div>

            <div class="form-group">
              <label for="image">Image:</label>
              <input type="file" name="image" value="{{$data->image}}" class="form-control" id="image">
            </div>
            <div class="form-group">
               <img src="{{asset('assets/images/user/' . $data->image)}}" hieght="50px" width="50px" alt="image">
             </div>
            <div class="form-group">
              <label for="p_name">Phone:</label>
              <input type="text" name="p_name" value="{{$data->p_name}}" class="form-control" id="p_name">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" name="email" value="{{$data->email}}" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="Address">Address:</label>
              <input type="text" name="address" value="{{$data->address}}" class="form-control" id="Address">
            </div>
            <div class="form-group">
              <label for="payment">Payment:</label>
              <input type="text" name="payment" value="{{$data->payment}}" class="form-control" id="Address">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
</div>

@endsection

@section('scripts')

@endsection