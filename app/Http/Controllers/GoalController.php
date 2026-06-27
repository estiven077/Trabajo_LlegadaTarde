<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal;
use App\Models\Player;
use App\Models\Game;

class GoalController extends Controller
{
    public function create()
    {
        $players = Player::all();
        $games = Game::all();

        return view('goal.create', compact('players', 'games'));
    }

    public function store(Request $request)
    {
        $goal = Goal::create($request->all());
        return $goal;
    }

    public function pruebas()
    {
        $goal = Goal::find(3);
        if (!$goal) {
            return "No existe ningún gol";
        }

        return [
            'goal' => $goal,
            'player' => $goal->player,
            'game' => $goal->game
        ];
    }
}
