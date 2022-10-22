@extends('layouts.master')

@section('title')
Dashboard || Aworldfun
@endsection

@section('content')
<style>
   .redbg {
      background-color: #175f76  !important;
   }
</style>
<div class="row">
          <div class="col-md-12">
            <div class="card redbg">
            <div class="card-header redbg">
            <div class="row">
        <div class="col-md-6"> <h4 class="card-title"> Edit Slider</h4></div>
        <div class="col-md-6 "> <h4 class="card-title text-right "> 
        <a href="{{route('slider-list')}}" class="btn btn-primary">List of Slider</a></h4></div>
              </div>  
              </div>
              <div class="card-body">
              <div class="table-responsive">
                <form action="{{route('slider-update',['id'=>$data->id])}}" method="post" enctype='multipart/form-data'>
                @csrf   
                <div class="form-group">
                    <label for="title1">Title1:</label>
                    <input type="text" name="title1" value="{{$data->title1}}" class="form-control" id="title1">
                    </div>
                    <div class="form-group">
                    <label for="title1">Title2:</label>
                    <input type="text" name="title2" value="{{$data->title2}}" class="form-control" id="title2">
                    </div> 
                    <div class="form-group">
                    <label for="btn_name">btn_name:</label>
                    <input type="text" name="btn_name" value="{{$data->btn_name}}" class="form-control" id="btn_name">
                    </div> 
                  
                    <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" value="{{$data->image}}" class="form-control" id="image">
                    </div>
                      <!--  <div class="form-group">
                    <label for="bg_image">BackgroundImage:</label>
                    <input type="file" name="bg_image" value="{{$data->bg_image}}" class="form-control" id="bg_image">
                    </div> -->
                    
                    <button type="submit" class="btn btn-primary">Edit</button>
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