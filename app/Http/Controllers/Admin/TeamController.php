<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Player;
use App\Http\Requests\TeamRequest;
use Redirect;

class TeamController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$teams = Team::all();
		return view('admin.team.index', ["teams" => $teams]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$players = Player::where('team_id', '=', 1)->orderBy('steam_nickname')->lists('steam_nickname', 'id');
		return view('admin.team.create', ["players" => $players]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(TeamRequest $request)
	{
		$input = $request->all();
		$team = Team::create($input); 
		$team->assignPlayers($input['players_list']);
		return Redirect::route('admin.teams.index');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$team = Team::find($id);
		$players = Player::where('team_id', '=', 1)->orderBy('steam_nickname')->lists('steam_nickname', 'id');

		return view('admin.team.edit', ["team" => $team, 'players' => $players]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, TeamRequest $request)
	{
		$input = $request->all();
		$team = Team::find($id);
		$team->update($input);
		$team->assignPlayers($input['players_list']);
		return Redirect::route('admin.teams.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	public function players($id)
	{
		$team = Team::find($id);
		return $team->players;
	}

}
