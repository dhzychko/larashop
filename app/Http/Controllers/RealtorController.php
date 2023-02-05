<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRealtorRequest;
use App\Http\Requests\UpdateRealtorRequest;
use App\Models\Realtor;

class RealtorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Realtor  $realtor
     * @return \Illuminate\Http\Response
     */
    public function edit(Realtor $realtor)
    {
        //
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
