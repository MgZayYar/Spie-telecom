@extends('backend.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="row shadow  mb-4 container-fluid" style="padding: 20px;">
		<div class="col-lg-11">
			<h1 class="h3 mb-3 text-gray-800">Plan</h1>
				</div>
				<div class=" col-lg-1 ">
			<a href="{{route('plans.create')}}"> <button type="button" class="btn btn-info active">Add</button></a>
		</div>
	</div>
<div class="card-table ">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Actions</th>
		</tr>
	</tfoot>

	<tbody>
		@php $i=1; @endphp

		@foreach($plans as $row)
		<tr>
			<td>{{$i++}} </td>
			<td>{{$row->name}}</td>
			<td>
			<div class="row" >
			<a href="{{route('plans.edit',$row->id)}}" class="btn btn-info" style="width: 100; height: 50; margin: 5px;">Edit</a>

			<form method="post" action="{{route('plans.destroy',$row->id)}}" onsubmit="return confirm('Are you sure?')">
				@csrf
				@method('DELETE')
				<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger" style="width: 100; height: 50; margin: 5px;">
			</form>

			</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection


@section('script')
<script type="text/javascript" src="{{asset('backendtemplate/vendor/datatables/jquery.dataTables.min.js')}} "></script>

<script type="text/javascript" src="{{asset('backendtemplate/js/demo/datatables-demo.js')}} "></script>

<script type="text/javascript" src="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.js')}} "></script>
@endsection
