<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Reponse;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function afficher($id){
    $ListeQCM=Question::where("id_formulaire",$id)->get();
    $ListeReponse=Reponse::all();
    return view('questions')->with(['listeQCM'=>$ListeQCM,'listeReponse' => $ListeReponse]);

    }
}
