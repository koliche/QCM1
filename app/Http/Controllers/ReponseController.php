<?php

namespace App\Http\Controllers;

use App\Models\Reponse;
use Illuminate\Http\Request;

class ReponseController extends Controller
{
    public function afficher(Request $request)
    {
        $request = $request->all();
        $i = 0;
        foreach ($request as $item) {
            if ($item == 1) $i++;
        }
        return view("reponses")->with(["score"=>$i]);
    }
}
