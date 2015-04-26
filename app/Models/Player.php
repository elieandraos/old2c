<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Player extends Model {

	protected $table = 'players';
	protected $fillable = ['steam_id','steam_nickname',  'steam_url', 'steam_avatar', 'role', 'level', 'team_id'];
	protected $hidden = [];

	public function team()
	{
		return $this->belongsTo('App\Models\Team');
	}


	public function getRegistrationDate()
	{
		return Carbon::parse($this->created_at)->format('M d, Y h:i');
	}
}
