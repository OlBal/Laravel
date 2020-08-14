<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;
use App\Http\Requests\OwnerRequest;

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

 public function show(Owner $owner) {

    return view('owners/show', [ 
        'owner' => $owner
    ]); 

 }
    
 public function create() {
    return view('owners/form'); 
}

public function createOwner(OwnerRequest $request) {

    $data = $request->all();

    $owner = Owner::create($data);

    return redirect("owners");

}

public function edit(Owner $owner) {

    $owner = Owner::find($owner);

    return view('owners/edit')->with('owner', $owner); 
}



}
