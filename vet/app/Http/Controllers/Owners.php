<?php

namespace App\Http\Controllers;

use App\Owner;
use App\Animal;
use Illuminate\Http\Request;
use App\Http\Requests\OwnerRequest;
use App\Http\Requests\AnimalRequest;
use Illuminate\Support\Facades\DB;

class Owners extends Controller
{

 public function index()
 {
    return view('owners/index', [
        "owners" => Owner::all(),
        //for testing
        // "owners" => collect([]), 
    ]);
 }

 public function show(Owner $owner)
{
    $animals = $owner->animals;

    return view('owners/show', 
    [ 
        'owner' => $owner,
        "animals" => $animals,
    ]); 
}
    
 public function create() 
{
    return view('owners/form'); 
}

 public function edit(Owner $owner) 
{
    return view("owners/edit",
     [
        "owner" => $owner
    ]); 
}

public function editOwner(OwnerRequest $request, Owner $owner)
{
    $data = $request->all();
    $owner->update($data);
    return redirect("/owners/{$owner->id}");        
}

public function createOwner(OwnerRequest $request) 
{
    $data = $request->all();
    $owner = Owner::create($data);
    return redirect("owners");
}

public function createAnimal(Owner $owner, AnimalRequest $request) 
{
    $animal = new Animal($request->all());
    $owner->animals()->save($animal);
    return redirect("owners/{$owner->id}");
}

public function destroy(Owner $owner)
    { 
        $owner->delete();

        return redirect('owners');
    }
}
