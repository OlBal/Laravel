<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Animal;
use App\Http\Requests\API\AnimalRequest;
use App\Http\Resources\API\AnimalResource;




class Animals extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animal = Animal::all();
        return $animal;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnimalRequest $request)
    {
        $data = $request->all();
        $owner = Animal::create($data);
        return $animal;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        return $animal;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnimalRequest $request, Animal $animal)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return response(null, 204);
    }
}
