<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Owner as OwnerAPI;
use App\Http\Requests\API\OwnerRequest;
use App\Http\Resources\API\OwnerResource;
use App\Treatments;


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
    public function store(OwnerRequest $request)
    {
        $data =  $request->only('name','date_of_birth','biteyness','treatments');
        $owner = OwnerAPI::create($data);
        $treatments = OwnerAPI::fromStrings($request->get("treatments")); 
        $article->tags()->sync($tags->pluck("id")->all());
        return new OwnerResource($owner);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $owner
     * @return \Illuminate\Http\Response
     */
    public function show(OwnerAPI $owner)
    {
        return new OwnerResource($owner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OwnerRequest $request, OwnerAPI $owner)
    {
        $data = $request->only('name','date_of_birth','biteyness','treatments');
        $treatments = Treatment::fromStrings($request->get('treatments'));
        $owner->update($data);
        new OwnerResource($owner);
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
