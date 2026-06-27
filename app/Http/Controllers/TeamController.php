<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\President;

class TeamController extends Controller
{
    public function create()
    {
        $presidents = President::all();

        return view('team.create', compact('presidents'));
    }

    public function store(Request $request)
    {
        $team = Team::create($request->all());

        return $team;
    }

    public function pruebas()
    {
        $team = Team::find(5);

        if (!$team) {
            return "No existe ningún equipo";
        }

        return [
            'team' => $team,
            'president' => $team->president,
            'players' => $team->players,
            'games' => $team->games
        ];
    }
}
