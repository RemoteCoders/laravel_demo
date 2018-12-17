<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use \App\Team;

class TeamController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get list of teams.
     *
     * @return object $players
     */
    public function index()
    {
        echo json_encode(
            \App\Team::all()
        );
    }

    /**
     * Get players on a team.
     *
     * @param Illuminate\Http\Request $request
     * @return object $players
     */
    public function getPlayers($teamId)
    {
        echo json_encode(
            \App\Team::find($teamId)->players
        );
    }

    /**
     * Create new team.
     *
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response $response
     */
    public function store(Request $request)
    {
        if (empty($request['data']['teamName'])) {
            abort(400, 'Missing data.');
        }
        $team = new Team();
        $team->name = $request['data']['teamName'];
        $team->save();

        return response($team->jsonSerialize(), Response::HTTP_CREATED);
    }

}
