@extends('layouts.master')

@section('title')
Dashboard || Aworldfun
@endsection

@section('content')
<style>
	.redbg {
		background-color: #175f76 !important;
	}
</style>
<div class="row">
	<div class="col-md-12">
		<div class="card redbg">
			<div class="card-header redbg">
				<div class="row">
					<div class="col-md-6 ">

						<h4 class="card-title">List of All Sliders</h4>
					</div>
					<div class="col-md-6 ">
						<h4 class="card-title text-right "><a href="{{route('slider-create')}}" class="btn btn-primary">Add New Shop</a></h4>
					</div>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table mb-0">
						<thead>

							<tr>
								<th>Title1</th>
								
								<th>Images</th>
								<th>Actions </th>
							</tr>
						</thead>
						<tbody>
							@foreach($results as $key)
							<tr>
								<td> {{$key->title1}}</td>
								<td><img src="{{asset('assets/images/slider/' . $key->image)}}" hieght="100px" width="100px" alt="image"></td>
								
								<td> <a href="{{route('slider-edit',$key->id)}}"><i class="fa fa-edit"></i> </a>
									<a href="{{route('slider-delete',$key->id)}}"><i class="fa fa-trash"></i> </a>
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