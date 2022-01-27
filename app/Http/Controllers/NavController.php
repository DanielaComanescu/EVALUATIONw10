<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;


class NavController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function listCharacters() {
        $characters = Character::all();
        return view('listCharacters', ['characters' => $characters]);
    }

    public function details($id) {
        $character = Character::findOrFail($id);

        return view('detailsCharacter', ['character' => $character]);
    }

    public function add() {
        
        return view('addCharacter');
    }

    public function updateCharacter($id) {
        $character = Character:: findOrFail($id);

        return view('updateForm', ['character' => $character]);
    }

   
}
