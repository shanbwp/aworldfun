@extends('layouts.master')
@section('title') Dashboard || Blog @endsection
@section('content')
<style>
    .redbg{
        background-color: rgb(87, 38, 38) !important;
    }
</style>
<div class="row">
   <div class="col-md-12">
      <div class="card">
         <div class="card-header redbg">
            <div class="row">
               <div class="col-md-6 ">
                  <h4 class="card-title ">List of Blog</h4>
               </div>
               <div class="col-md-6 ">
                  <h4 class="card-title text-right "><a href="{{route('blog-create')}}" class="btn btn-primary">Add New blog</a></h4>
               </div>
            </div>
         </div>
         <div class="card-body redbg">
            <div class="table-responsive ">
               <table class="table mb-0">
                  <thead > 
                     <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>UploadBy</th>
                        <th>Status</th> 
                        <th>Image</th>
                        <th>Actions </th>
                     </tr>
                  </thead>
                  <tbody >
                     @foreach($results as $key)
                     <tr>
                        <td> {{$key->name}}</td>
                        <td> {{$key->date}}</td>
                        <td> {{$key->upload_by}}</td>
                        <td> {{$key->status}}</td> 
                        <td><img src="{{asset('assets/images/blog/' . $key->image)}}" hieght="50px" width="50px" alt="image"></td>
                        <td> <a href="{{route('blog-edit',$key->id)}}" class="py-2 px-3 badge btn-primary" >Edit </a>
                        <a href="{{route('blog-delete',$key->id)}}"  class="py-2 px-3 badge btn-danger"  >Delete </a>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('scripts')
@endsection