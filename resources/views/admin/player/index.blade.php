@extends('admin.layout')

@section('content')
	<div class="row">
	<div class="col-md-12">
		<!-- Breadcrumb -->
		<ul class="breadcrumb">
		    <li><a href="#">Dashboard</a></li>
		    <li>Players</li>
		    <li class="active">List</li>
		</ul>


		<!-- Panel start -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Players List</h3>
			</div>
			<div class="panel-body">
				<!-- Players List -->
				<table class="table table-hover">
				  <thead>
				    <tr>
				      <th>Nickname</th>
				      <th>Steam ID</th>
				      <th>Role</th>
				      <th>Team</th>
				      <th>Registration Date</th>
				    </tr>
				  </thead>
				  <tbody>
				    @foreach($players as $player)
						<tr>
							<td>
								<img src="{{ $player->steam_avatar }}?t={{ uniqid() }}" height=22 /> 
								{{ $player->steam_nickname }}
							</td>
							<td>
								<a href="{{$player->steam_url}}" target="_blank">{{ $player->steam_id }}</a>
							</td>
							<td>{{ $player->role }} (level {{ $player->level }})</td>
							<td>{{ $player->team->name }}</td>
							<td>{{ $player->getRegistrationDate()}}</td>
						</tr>
					@endforeach
				  </tbody>
				</table>

{{-- 				<div class="centered">
					{!! $news->render() !!}
				</div> --}}
			</div>
		</div>
		<!-- Panel end -->
	</div>
</div>

@stop