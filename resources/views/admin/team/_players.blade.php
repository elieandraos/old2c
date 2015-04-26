<!-- Button trigger modal -->
<a class="btn btn-info btn-trans btn-xs btn-action " data-toggle="modal" data-target="#team-players-{{$team->id}}">
	<i class="fa fa-users"></i>
</a>


<!-- Default bootstrap modal example -->
<div class="modal" id="team-players-{{$team->id}}" tabindex="-1" role="dialog" aria-labelledby="label-{{$team->id}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="label-{{$team->id}}">{{ $team->name }}</h4>
      </div>
      <div class="modal-body">
        
  			<table width="80%" class='table table-hover'>
  				<tr>
  					<th>Player</th>
  					<th>Role/Level</th>
  				</tr>
  				@foreach($team->players as $player)
  					<tr>
  						<td>{{ $player->steam_nickname }}</td>
  						<td>{{ $player->role }} ({{$player->level}})</td>
  					</tr>	
  				@endforeach
  			</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>