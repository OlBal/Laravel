<?php

namespace App\Http\Controllers;

use App\Animal;

class Animals extends Controller
{
    public function index() 
    {
        $animals = Animal::paginate(10);
        return view("animals",['page' => 'Animals','animals' => $animals]);
    }

    public function show(Animal $animal) 
    {
        $owner = $animal->owner; 
        return view("animals",['page' => 'Animal','animal' => $animal, 'owner' => $owner]);
    }

        public function edit(Owner $owner, Animal $animal)
    {
        return view("animals/edit", [
            "owner" => $owner,
            "animal" => $animal
        ]);
    }

    public function editAnimal(AnimalRequest $request, Animal $animal)
    {
        $data = $request->all();
        $animal->update($data);
        return redirect("/animals/{$animal->id}");        
    }

    public function destroy(Animal $animal)
    {
        $owner = $animal->owner;
        $animal->delete();
        
        return redirect("/animals");
    }
}