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
            <div class="card redbg ">
            <div class="card-header redbg">
            <div class="row">
        <div class="col-md-6"> <h4 class="card-title"> Create News</h4></div>
        <div class="col-md-6 "> <h4 class="card-title text-right "> 
        <a href="{{route('news-list')}}" class="btn btn-primary">List of news</a></h4></div>
              </div>  
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <form action="{{route('news-store')}}" method="post" enctype="multipart/form-data">
                   @csrf
                    <div class="form-group">
                    <label for="name">name:</label>
                    <input type="text"  name="name"  class="form-control" id="name">
                    </div>
                    <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text"  name="title"  class="form-control" id="title">
                    </div>
                    <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file"  name="image"  class="form-control" id="image">
                    </div>
                    <div class="form-group">
                    <label for="time">time:</label>
                    <input type="test"  name="time"  class="form-control" id="time">
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