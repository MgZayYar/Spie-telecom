@extends('backend.master');

@section('content')
<div class="row shadow mb-4 container-fluid" style="padding: 20px;">
	<div class="col-lg-11">
		<h1 class="h3 mb-2 text-gray-800">Edit Plan</h1>
			</div>
				<div class="col-lg-1 pl-5 ">            
				<a href="{{route('plans.index')}} "> <button type="button" class="btn btn-info active">Back</button></a>
			</div>
		</div>
	<div class="container-fluid">
<div class="card shadow mb-4">
<div class="card-body">
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
<form method="post" action="{{route('plans.update',$plans->id)}}" enctype="multipart/form-data">
	@csrf
		@method('PUT') 
			<div class="form-group row">
				<div class="col-lg-2">
				<label for="name" class="form-label text-md-right">Name</label>
			</div> 
		<div class="col-lg-10">
	<input type="text" name="name" id="name" class="form-control" placeholder="Plan Name" required="" value="{{$plans->name}}">
</div>
</div>
	<div class="form-group mb-0">
		<button type="submit" class="btn btn-success">Done </button>
			</div>
				</form>
				</div>
			</div>
	</div>
@endsection

