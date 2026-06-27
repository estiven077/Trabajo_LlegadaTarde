<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Team;

class PlayerController extends Controller
{
    public function create()
    {
        $teams = Team::all();

        return view('player.create', compact('teams'));
    }

    public function store(Request $request)
    {
        $player = Player::create($request->all());

        return $player;
    }

    public function pruebas()
    {
        $player = Player::find(2);

        if (!$player) {
            return "No existe ningún jugador";
        }

        return [
            'player' => $player,
            'team' => $player->team,
            'goals' => $player->goals
        ];
    }
}
