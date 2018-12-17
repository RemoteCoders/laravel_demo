<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use \App\Player;

class PlayerController extends Controller
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
     * Update a player.
     *
     * @param Illuminate\Http\Request $request
     * @param $playerId
     * @return Illuminate\Http\Response $response
     */
    public function update(Request $request, $playerId)
    {
        if (empty($request['data']['firstName']) || empty($request['data']['lastName']) || empty($request['data']['teamId'])) {
            abort(400, 'Missing data.');
        }
        $player = Player::findOrFail($playerId);
        $player->first_name = $request['data']['firstName'];
        $player->last_name = $request['data']['lastName'];
        $player->team_id = $request['data']['teamId'];
        $player->save();

        return response(null, Response::HTTP_OK);
    }
}
