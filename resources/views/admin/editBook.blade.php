@extends('layouts.admin.master')
@include('layouts.admin.header')
@include('layouts.admin.aside')
@section('content')
   <div class="content-wrapper">
	<section class="content">
		<div class="row">
			@if(Session::has('flash_message'))
			<div class="alert alert-success alert-dismissible col-md-3 pull-right" role="alert" >
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				{{ Session::get('flash_message') }}
			</div>
			@endif
			<div class="col-md-6">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Book Section</h3>
					</div>
					<form role="form" method="post" action="update&{{$book->id}}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="box-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Name of author</label>
								<input type="text" class="form-control" value="{{$book->author}}" name="author" placeholder="Enter author's name" maxlength="15" required>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Book title</label>
								<input type="text" class="form-control" value="{{$book->title}}" name="title" placeholder="Enter Book's title" required>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">ISBN Number</label>
								<input type="text" class="form-control" value="{{$book->isbn}}" name="isbn" placeholder="Enter Isbn" required>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Year of publication</label>
								<input type="text" class="form-control" value="{{$book->year}}" name="year" placeholder="Enter year of publication" required>
							</div>
							<div class="form-group">
								<div class="form-group">
									<label>Category </label>
									<select class="form-control" value="{{$book->category}}" name="category">
										<option>Shelf 1</option>
										<option>Shelf 2</option>
										<option>Shelf 3</option>
										<option>Shelf 4</option>
										<option>Shelf 5</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="form-group">
									<label>Book Status </label>
									<select class="form-control" value="{{$book->status}}" name="status">
										<option>Returned</option>
										<option>Borrowed</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputFile" value="{{$book->file}}">Upload Book Image</label>
								<input type="file"  name="upload">
							</div>
						</div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-6">
				@if(count($errors)>0)
				<ul>
					@foreach($errors->all() as $error)
					<li class="alert close " data-dismiss="alert" aria-label="Close" style="color: red;list-style: none">{{$error}}</li>
					@endforeach
				</ul>
				@endif
			</div>
		</div>
	</section>
</div>
@endsection

