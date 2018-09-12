@extends('layouts.admin.master')
@include('layouts.admin.header')
@include('layouts.admin.aside')
@section('content')
<div class="content-wrapper">
	<section class="content">
		<div class="row"> 
			@if(Session::has('flash_message'))
			<div class="alert alert-danger alert-dismissible col-md-3 pull-right" role="alert" >
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				{{ Session::get('flash_message') }}
			</div>
			@endif
			<div class="box-body table-responsive no-padding">
				<h2 class="text-success" style=" margin: 10px"> View All Registered Students</h2>
				<table class="table table-hover">

					<tr>
						<th>ID</th>
						<th>Full names</th>
						<th>Matriculation Number</th>
						<th>Gender</th>
						<th>Department</th>
						<th>Date and Time of Registration</th>
						<th>Delete Student</th>
					</tr>
					@foreach ($student as $key => $data)
					<tr>
						<td>  {{ $key + 1 }}</td>
						<td>{{$data->firstname}} &nbsp; {{$data->lastname}}</td>
						<td>{{$data->matric}}</td>
						<td>{{$data->gender}}</td>
						<td>{{$data->department}}</td>
						<td>{{$data->created_at}}</td>
						<td>
							<a href="deletestudent&{{$data->id}}"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</section>
</div>

@endsection