<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AnimalRequest;
use App\Animal;

class Animals extends Controller
{

    public function list()
    {
       return view('owners/animals', 
        [
           "animals" => Animal::all() 
        ]);
   
    }

    // public function show(Animal $animal) {

    //     return view('owner}/animal', [ 
    //         'animal' => $animal
    //     ]); 
    
    //  }


}
