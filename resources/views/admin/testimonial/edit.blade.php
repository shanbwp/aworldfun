@extends('layouts.master')

@section('title')
Dashboard || Influencive
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
            <div class="card-header redbg">
            <div class="row">
        <div class="col-md-6"> <h4 class="card-title"> Edit Testimonial</h4></div>
        <div class="col-md-6 "> <h4 class="card-title text-right "> 
        <a href="{{route('testimonial-list')}}" class="btn btn-primary">List of Testimonial</a></h4></div>
              </div>  
              </div>
              <div class="card-body">
              <div class="table-responsive">
                <form action="{{route('testimonial-update',['id'=>$data->id])}}" method="post" enctype='multipart/form-data'>
                @csrf   
                <div class="form-group">
                    <label for="title1">Name:</label>
                    <input type="text" name="name" value="{{$data->name}}" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" value="{{$data->title}}" class="form-control" id="title">
                    </div> 
                    <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" value="{{$data->image}}" class="form-control" id="image">
                    </div>
                    <div class="form-group">
                    <label for="vedio">Vedio:</label>
                    <input type="text" name="vedio" value="{{$data->vedio}}" class="form-control" id="vedio">
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

@section('scripts')

@endsection