<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\Api\V1\StoreNeighbourhoodRequest;
use App\Http\Requests\Api\V1\UpdateNeighbourhoodRequest;
use App\Models\Neighbourhood;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\NeighbourhoodResource;
use App\Http\Resources\V1\NeighbourhoodCollection;

class NeighbourhoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new NeighbourhoodCollection(Neighbourhood::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNeighbourhoodRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNeighbourhoodRequest $request)
    {
        return new NeighbourhoodResource(Neighbourhood::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Neighbourhood  $neighbourhood
     * @return \Illuminate\Http\Response
     */
    public function show(Neighbourhood $neighbourhood)
    {
        return new NeighbourhoodResource($neighbourhood);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNeighbourhoodRequest  $request
     * @param  \App\Models\Neighbourhood  $neighbourhood
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNeighbourhoodRequest $request, Neighbourhood $neighbourhood)
    {
        $neighbourhood->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Neighbourhood  $neighbourhood
     * @return \Illuminate\Http\Response
     */
    public function destroy(Neighbourhood $neighbourhood)
    {
        //
    }
}
