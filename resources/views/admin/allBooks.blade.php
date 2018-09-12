@extends('layouts.admin.master')
@include('layouts.admin.header')
@include('layouts.admin.aside')
@section('content')
<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<a href="/admin/addbook"><button type="button" class="btn btn-success btn-lg" aria-label="Left Align" style="margin:10px 0 20px 20px;">
				<span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp; Book Details
			</button></a>
			@if(Session::has('flash_message'))
			<div class="alert alert-info alert-dismissible col-md-3 pull-right" role="alert" >
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				{{ Session::get('flash_message') }}
			</div>
			@endif
			
			<div class="box-body table-responsive no-padding">
				<table class="table table-hover"> 
					<tr>
						<th>ID</th>
						<th>Name of author</th>
						<th>Book title</th>
						<th>Isbn</th>
						<th>Category</th>
						<th>Status</th>
                        <th>Year</th>
						<th>Edit </th>
						<th>Delete </th>
					</tr>
					@foreach ($books as $key => $data)
					<tr>
						<td>{{ $key + 1 }}</td>
						<td>{{$data->author}}</td>
						<td>{{$data->title}}</td>
						<td>{{$data->isbn}}</td>
						<td>{{$data->category}}</td>
						<td>{{$data->status}}</td>
                        <td>{{$data->year}}</td>
						<td>
							<a href="edit&{{$data->id}}"><button class="btn btn-primary"><span class="glyphicon glyphicon-user"></span></button></a>
						</td>
						<td>
							<a href="deletehostel&{{$data->id}}"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</section>
</div>
@endsection