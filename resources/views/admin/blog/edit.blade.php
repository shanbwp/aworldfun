@extends('layouts.master')

@section('title')
Dashboard || Blog update
@endsection

@section('content')
<style>
  .redbg {
    background-color: rgb(119, 57, 57) !important;
  }
</style>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6">
            <h4 class="card-title"> Edit Blog</h4>
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
          <form action="{{route('blog-update',['id'=>$data->id])}}" method="post" enctype='multipart/form-data'>
            @csrf
            <div class="form-group">
              <label for="category_id">Category Name:</label>
              <select class="form-control" id="selectUser" name="category_id" required focus>
                <option value="" disabled selected>Please select Category</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}" {{$data->category_id==$category->id?'selected':''}}>{{$category->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="title1">Blog Title:</label>
              <input type="text" name="name" value="{{$data->name}}" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="date">Date:</label>
              <input type="text" name="date" value="{{$data->date}}" class="form-control" id="date">
            </div>
            <div class="form-group">
              <label for="short_description">Short Description:</label>
              <textarea name="short_description" class="form-control" id="short_description">{{$data->short_description}}</textarea>
            </div>
            <div class="form-group">
              <label for="description"> Description:</label>
              <textarea name="description" class="form-control ckeditor" id="description">{{$data->description}}</textarea>
            </div>
            <div class="form-group">
              <label for="upload_by">Create BY:</label>
              <input type="text" name="upload_by" value="{{$data->upload_by}}" class="form-control" id="upload_by">
            </div>
            <div class="form-group">
              <label for="image">Image:</label>
              <input type="file" name="image" class="form-control" id="image">
              <img src="{{asset('assets/images/blog/' . $data->image)}}" hieght="50px" width="50px" alt="image">
            </div>
            <div class="form-group">
              <label for="meta_tag">Meta_Tag:</label>
              <textarea name="meta_tag" class="form-control " id="meta_tag">{{$data->meta_tag}}</textarea>
            </div>
            <div class="form-group">
              <label for="meta_title">Meta_Title:</label>
              <textarea name="meta_title" class="form-control" id="meta_title">{{$data->meta_title}}</textarea>
            </div>
            <div class="form-group">
              <label for="meta_description">Meta_Description:</label>
              <textarea name="meta_description" class="form-control " id="meta_description">{{$data->meta_description}}</textarea>
            </div>
            <div class="form-group">
              <label for="slug"> Slug:</label>
              <input type="text" name="slug" class="form-control" id="slug" value="{{$data->slug}}">
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