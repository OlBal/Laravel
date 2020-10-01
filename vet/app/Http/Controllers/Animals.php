<?php

namespace App\Http\Controllers;

use App\Owner;
use App\Animal;
use Illuminate\Http\Request;
use App\Http\Requests\AnimalRequest;
use App\Http\Requests\OwnerRequest;
use Illuminate\Support\Facades\DB;

class Animals extends Controller
{

    public function show()
    {
       return view("animals", 
        [
           "animals" => Animal::all() 
        ]);
   
    }




    public function newAnimal(){

        $animal = new Animal($request->only(["name", "type", "dob", "weight", "height", "biteyness"]));

        $owner->animals()->save($animal);

    }

      public function destroy(Animal $animal)
    {
        $owner = $animal->owner;
        $animal->delete();
        
        return redirect("/owners/{$owner->id}");
    }

  


}
