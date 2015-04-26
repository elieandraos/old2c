@extends('admin.layout')

@section('content')
	<div class="row">
	<div class="col-md-12">
		<!-- Breadcrumb -->
		<ul class="breadcrumb">
		    <li><a href="#">Dashboard</a></li>
		    <li>Teams</li>
		    <li class="active">List</li>
		</ul>


		<!-- Panel start -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Teams List</h3>
			</div>
			<div class="panel-body">
				<!-- Players List -->
				<table class="table table-hover">
				  <thead>
				    <tr>
				      <th>Name</th>
				      <th>Date Created</th>
				      <th>Actions</th>
				    </tr>
				  </thead>
				  <tbody>
				    @foreach($teams as $team)
						<tr>
							<td>{{ $team->name }}</td>
							<td>{{ $team->getCreationDate()}}</td>
							<td>
								@if($team->id != 1)
								<a href="{{ route('admin.teams.edit', $team->id) }}">
									<button type="button" class="btn btn-info btn-trans btn-xs btn-action " data-toggle="tooltip" data-placement="top" title="Edit Team">
										<i class="fa fa-pencil-square-o"></i>
									</button>
								</a>
								@endif
							</td>
						</tr>
					@endforeach
				  </tbody>
				</table>

			</div>
		</div>
		<!-- Panel end -->
	</div>
</div>

@stop