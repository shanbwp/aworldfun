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
      <div class="card-header redbg">
        <div class="row">
          <div class="col-md-6">
            <h4 class="card-title"> Edit Game</h4>
          </div>
          <div class="col-md-6 ">
            <h4 class="card-title text-right ">
              <a href="{{route('game-list')}}" class="btn btn-primary">List of Game</a>
            </h4>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <form action="{{route('game-update',['id'=>$data->id])}}" method="post" enctype='multipart/form-data'>
            @csrf
            <!-- <div class="form-group">
                    <label for="portfolio_category_id">Category Name:</label>
                    <select class="form-control" id="selectUser" name="portfolio_category_id" required focus>
                      <option value="" disabled selected>Please select  Category</option>        
                      @foreach($categories as $category)
                      <option value="{{$category->id}}" {{$category->id==$data->portfolio_category_id ?'selected':''}}>{{$category->name }}</option>
                      @endforeach
                    </select>
                    </div> -->
            <div class="form-group">
              <label for="title1">Name:</label>
              <input type="text" name="name" value="{{$data->name}}" class="form-control" id="name">
            </div>
            <!-- <div class="form-group">
              <label for="upload_by">upload_by:</label>
              <input type="text" name="upload_by" value="{{$data->upload_by}}" class="form-control" id="title">
            </div> -->
            <div class="form-group">
              <label for="image">Image:</label>
              <input type="file" name="image" class="form-control" id="image">
              <img src="{{asset('assets/images/portfolio/'.$data->image)}}" hieght="50px" width="50px" alt="image">
            </div>
            <div class="form-group">
              <label for="Vedio_url">Vedio_link:</label>
              <input type="text" name="Vedio_url" value="{{$data->Vedio_url}}" class="form-control" id="Vedio_url">
            </div>
            <div class="form-group">
              <label for="embeded">embeded:</label>
              <input type="text" name="embeded" value="{{$data->embeded}}" class="form-control" id="vedio">
            </div>
            <div class="form-group">
              <label for="slug">slug:</label>
              <input type="text" name="slug" value="{{$data->slug}}" class="form-control" id="vedio">
            </div>
            <div class="form-group">
              <label for="meta_tag">meta_tag:</label>
              <input type="text" name="meta_tag" value="{{$data->meta_tag}}" class="form-control" id="vedio">
            </div>
            <div class="form-group">
              <label for="meta_title">meta_title:</label>
              <input type="text" name="meta_title" value="{{$data->meta_title}}" class="form-control" id="vedio">
            </div>
            <div class="form-group">
              <label for="meta_description">meta_description:</label>
              <input type="text" name="meta_description" value="{{$data->meta_description}}" class="form-control" id="vedio">
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
 