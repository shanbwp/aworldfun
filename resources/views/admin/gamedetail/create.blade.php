@extends('layouts.master')

@section('title')
Dashboard || GameFun
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
        <div class="col-md-6"> <h4 class="card-title"> Create Game</h4></div>
        <div class="col-md-6 "> <h4 class="card-title text-right "> 
        <a href="{{route('game-list')}}" class="btn btn-primary">List of Game</a></h4></div>
              </div>  
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <form action="{{route('game-store')}}" method="post" enctype="multipart/form-data">
                   @csrf
                   <div class="form-group">
                    <label for="category_id">Category Name:</label>
                    <select class="form-control" id="selectUser" name="category_id" required focus>
                      <option value="" disabled selected>Please select  Category</option>        
                      @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name }}</option>
                      @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text"  name="name"  class="form-control" id="name" required>
                    </div>
                    <!-- <div class="form-group">
                    <label for="upload_by">upload By:</label>
                    <input type="text"  name="upload_by"  class="form-control" id="upload_by">
                    </div> -->
                    <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file"  name="image"  class="form-control" id="image">
                    </div>
                    <div class="form-group">
                    <label for="vedio_url">Vedio_url:</label>
                    <input type="text"  name="vedio_url"  class="form-control" id="vedio_url">
                    </div>
                    <div class="form-group">
                    <label for="Embeded">Embeded:</label>
                    <input type="text"  name="Embeded"  class="form-control" id="Embeded">
                    </div>
                    <div class="form-group">
                    <label for="slug">Slug:</label>
                    <input type="text"  name="slug"  class="form-control" id="slug">
                    </div>
                    <div class="form-group">
                    <label for="meta_tag">meta_tag:</label>
                    <input type="text"  name="meta_tag"  class="form-control" id="meta_tag">
                    </div>
                    <div class="form-group">
                    <label for="meta_title">meta_title:</label>
                    <input type="text"  name="meta_title"  class="form-control" id="meta_title">
                    </div>
                    <div class="form-group">
                    <label for="meta_description">meta_description:</label>
                    <input type="text"  name="meta_description"  class="form-control" id="meta_description">
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