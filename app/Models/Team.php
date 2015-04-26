<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\Player;

class Team extends Model {

	protected $table = 'teams';
	protected $fillable = ['name'];
	protected $hidden = [];

	public function players()
	{
		return $this->hasMany('App\Models\Player');
	}


	public function getCreationDate()
	{
		return Carbon::parse($this->created_at)->format('M d, Y h:i');
	}

	
	public function assignPlayers($players_list)
	{
		if(count($players_list))
		{
			$this->unassignPlayers();
			foreach($players_list as $id)
			{
				$player = Player::find($id);
				$player->team_id = $this->id;
				$player->save();
			}
		}
	}


	public function unassignPlayers()
	{
		$players = Player::where('team_id', '=', $this->id)->get();
		
		if($players->count())
			foreach($players as $player)
			{
				$player->team_id = 1;
				$player->save();
			}
	}
}
