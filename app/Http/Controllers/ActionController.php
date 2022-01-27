<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;


class ActionController extends Controller
{
    public function add(Request $request)  {
        $character = new Character;

        $character->name = $request->name;
        $character->creationYear = $request->creationYear;
        $character->cartoonName = $request->cartoonName;
        $character->designer = $request->designer;
        $character->details = $request->details;

        $character->save();
        return redirect('/list');
    }

    public function delete(Request $request) {
        $character = Character::find($request->id);

        $character->delete();
        return redirect('/list');
    }

    public function updateCharacter(Request $request) {
        $character = Character::find($request->id);

        $character->name = $request->name;
        $character->creationYear = $request->creationYear;
        $character->cartoonName = $request->cartoonName;
        $character->designer = $request->designer;
        $character->details = $request->details;

        $character->save();
        return redirect('/list');
    }

    
}
