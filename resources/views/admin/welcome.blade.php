@extends('layouts.admin.master')
@include('layouts.admin.header')
@include('layouts.admin.aside')
@section('content')
<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-lg-4 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3>{{count ($student)}}<h3>
						<p>Registered Students</p>
					</div>
					<div class="icon">
						<span class="glyphicon glyphicon-education"></span>
					</div>
					<a href="#" class="small-box-footer">More info <span class="glyphicon glyphicon-menu-right"></span></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-4 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-green">
					<div class="inner">
						<h3>{{count($user)}}</h3>

						<p>Registered admins</p>
					</div>
					<div class="icon">
						<span class="glyphicon glyphicon-user"></span>
					</div>
					<a href="#" class="small-box-footer">More info <span class="glyphicon glyphicon-menu-right"></span></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-4 col-xs-6">
				<!-- small box -->

				<div class="small-box bg-yellow">
					<div class="inner">
						<h3>{{count($book)}}</h3>
						<p>All Books</p>
					</div>
					<div class="icon">
						<span class="glyphicon glyphicon-book"></span>
					</div>
					<a href="#" class="small-box-footer">More info <span class="glyphicon glyphicon-menu-right"></span></a>
				</div>
			</div>
		</div>
	</section>
</div>
<style type="text/css">
	.glyphicon-user, .glyphicon-book, .glyphicon-education{
		font-size: 45px;
		margin-top: 20px
	}
	.glyphicon-user:hover, .glyphicon-book:hover, .glyphicon-education:hover{
		font-size: 75px;
		margin-top: 20px
	}
</style>
@endsection

