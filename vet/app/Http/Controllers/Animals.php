<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;

class Animals extends Controller
{

    public function index()
    {
       return view('owners/animals', [
           "animals" => Animal::all(),
           //for testing
           // "owners" => collect([]), 
       ]);
   
    }

    public function show(Owner $animal) {

        return view('owners/{owner}/animal', [ 
            'animal' => $aniaml
        ]); 
    
     }

}
