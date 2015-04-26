<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {

	protected $table = 'teams';
	protected $fillable = ['name'];
	protected $hidden = [];

	public function players()
	{
		return $this->hasMany('App\Models\Player');
	}

}
