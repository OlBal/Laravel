<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Owner as OwnerAPI;

class Owners extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = OwnerAPI::all();
        return $owners;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $owner = OwnerAPI::create($data);
        return $owner;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(OwnerAPI $owner)
    {
        return $owner;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OwnerAPI $owner)
    {
        $data = $request->all();
        $owner->update($data);
        return $owner;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(OwnerAPI $owner)
    {
        $owner->delete();
        return response(null, 204);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $owner
     * @return \Illuminate\Http\Response
     */
    public function animals(OwnerAPI $owner)
    {
       
        return $owner->animals;
    }


}
