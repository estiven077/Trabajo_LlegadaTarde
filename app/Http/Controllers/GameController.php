<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function create()
    {
        return view('game.create');
    }

    public function store(Request $request)
    {
        $game = Game::create($request->all());
        return $game;
    }

    public function pruebas()
    {
        $game = Game::find(4);
        if (!$game) {
            return "No existe ningún partido";
        }

        return [
            'game' => $game,
            'goals' => $game->goals,
            'teams' => $game->teams
        ];
    }
}
