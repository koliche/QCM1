<?php

namespace App\Http\Controllers;

use index;
use App\Models\Formulaire;
use Illuminate\Http\Request;

class FormulaireController extends Controller
{
    public function afficher(){
        $formulaires=Formulaire::all();
        return view('index')->with(['formulaires'=>$formulaires]);
    }
}
