<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designer;

class DesignerController extends Controller
{
    public function listDesigners() {
        $designers = Designer::all();
        return view('listDesigners', ['designers' => $designers]);
    }

    public function addDesigner() {
        
        return view('addDesigner');
    }

    public function updateDesigner($id) {
        $designer = Designer:: findOrFail($id);

        return view('updateFormDesigner', ['designer' => $designer]);
    }

    public function ajouterDesigner(Request $request)  {
        $designer = new Designer;

        $designer->name = $request->name;
        $designer->birthYear = $request->birthYear;
        $designer->nationality = $request->nationality;

        $designer->save();
        return redirect('/listDesigners');
    }

    public function deleteDesigner(Request $request) {
        $designer = Designer::find($request->id);

        $designer->delete();
        return redirect('/listDesigners');
    }

    public function upDesigner(Request $request) {
        $designer = Designer::find($request->id);

        $designer->name = $request->name;
        $designer->birthYear = $request->birthYear;
        $designer->nationality = $request->nationality;

        $designer->save();
        return redirect('/listDesigners');
    }
}
