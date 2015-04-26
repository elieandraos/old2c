@extends('admin.layout')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<!-- Breadcrumb -->
			<ul class="breadcrumb">
			    <li><a href="#">Dashboard</a></li>
			    <li>Team</li>
			    <li class="active">Create</li>
			</ul>

			<h1 class="h1">Create Team</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			{!! Form::open(['route' => 'admin.teams.store', 'class' => 'form-horizontal', 'role' => 'form', 'enctype' => 'multipart/form-data']) !!}
				@include('admin.team._form')
			{!! Form::close() !!}
		</div>
	</div>
@stop