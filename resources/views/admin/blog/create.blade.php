@extends('layouts.master')

@section('title')
Dashboard || GameFun
@endsection
@section('content')
<style>
    .redbg{
        background-color: rgb(85, 24, 24) !important;
    }
</style>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6">
            <h4 class="card-title"> Create Blog</h4>
          </div>
          <div class="col-md-6 ">
            <h4 class="card-title text-right ">
              <a href="{{route('blog-list')}}" class="btn btn-primary">List of Blog</a>
            </h4>
          </div>
        </div>
      </div>
      <div class="card-body redbg">
        <div class="table-responsive">
          <form action="{{route('blog-store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">Blog Title:</label>
              <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="date">Date:</label>
              <input type="text" name="date" class="form-control" id="date">
            </div>
            <div class="form-group">
              <label for="country">UploadBy:</label>
              <input type="text" name="upload_by" class="form-control" id="upload_by">
            </div>
            
            <div class="form-group">
              <label for="short_description">Short Description:</label>
              <textarea name="short_description" class="form-control" id="short_description"></textarea> 
            </div>
            <div class="form-group">
              <label for="description"> Description:</label>
              <textarea name="description" class="form-control ckeditor" id="description"></textarea> 
            </div>
            
            <div class="form-group">
              <label for="image">Image:</label>
              <input type="file" name="image" class="form-control" id="image">
            </div>
            <div class="form-group">
              <label for="meta_tag">Meta_Tag:</label>
              <input name="meta_tag" class="form-control " id="meta_tag">
            </div>
            <div class="form-group">
              <label for="meta_title">Meta_Title:</label>
              <input name="meta_title" class="form-control " id="meta_title">
            </div>
            <div class="form-group">
              <label for="meta_description">Meta_Description:</label>
              <textarea name="meta_description" class="form-control " id="meta_description"></textarea> 
            </div>
            <div class="form-group">
              <label for="slug"> Slug:</label>
              <input type="text" name="slug" class="form-control " id="slug"> 
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