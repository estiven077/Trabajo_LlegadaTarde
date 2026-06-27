<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\President;

class PresidentController extends Controller
{
    public function create()
    {
        return view('president.create');
    }

    public function store(Request $request)
    {
        $president = President::create($request->all());

        return $president;
    }

    public function pruebas()
    {
        $president = President::find(1);

        if (!$president) {
            return "No existe ningún presidente";
        }

        return [
            'president' => $president,
            'team' => $president->team
        ];
    }
}
