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
               <div class="col-md-6 ">
                  <h4 class="card-title">List of News</h4>
               </div>
               <div class="col-md-6 ">
                  <h4 class="card-title text-right "><a href="{{route('news-create')}}" class="btn btn-primary">Add New contact</a></h4>
               </div>
            </div>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table mb-0">
                  <thead>
                     <tr>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>time</th>
                        
                        <th>Actions </th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($results as $key)
                     <tr>
                        <td> {{$key->name}}</td>
                        <td> {{$key->title}}</td>
                        <td> {{$key->time}}</td>
                        <td><img src="{{asset('assets/images/news/' . $key->image)}}" hieght="50px" width="50px" alt="image"></td>
                       
                        <td> <a href="{{route('news-edit',$key->id)}}" class="py-2 px-3 badge btn-primary" >Edit </a>
                        <a href="{{route('news-delete',$key->id)}}"  class="py-2 px-3 badge btn-danger"  >Delete </a>
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