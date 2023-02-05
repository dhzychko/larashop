<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreRealtorRequest;
use App\Http\Requests\UpdateRealtorRequest;
use App\Models\Realtor;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\RealtorResource;
use App\Http\Resources\V1\RealtorCollection;

class RealtorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return new RealtorCollection(Realtor::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRealtorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRealtorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Realtor  $realtor
     * @return \Illuminate\Http\Response
     */
    public function show(Realtor $realtor)
    {
        return new RealtorResource($realtor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRealtorRequest  $request
     * @param  \App\Models\Realtor  $realtor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRealtorRequest $request, Realtor $realtor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Realtor  $realtor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Realtor $realtor)
    {
        //
    }
}
