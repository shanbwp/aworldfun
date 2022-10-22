@extends('layouts.master')

@section('title')
Dashboard || Aworldfun
@endsection

@section('content')
<style>
   .redbg {
      background-color: black !important;
   }
</style>
<div class="row">
  <div class="col-md-12">
    <div class="card redbg">
      <div class="card-header redbg" >
        <div class="row">
          <div class="col-md-6">
            <h4 class="card-title"> Edit category</h4>
          </div>
          <div class="col-md-6 ">
            <h4 class="card-title text-right ">
              <a href="{{route('category-list')}}" class="btn btn-primary">List of category</a>
            </h4>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <form action="{{route('category-update',['id'=>$data->id])}}" method="post" enctype='multipart/form-data'>
            @csrf
            
            <div class="form-group">
              <label for="title1">Name:</label>
              <input type="text" name="name" value="{{$data->name}}" class="form-control" id="name">
            </div>
         
            <div class="form-group">
              <label for="slug"> Slug:</label>
              <input type="text" name="slug" value="{{$data->slug}}" class="form-control " id="slug"> 
            </div>  
            
            <button type="submit" class="btn btn-primary">Edit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
</div>

@endsection 