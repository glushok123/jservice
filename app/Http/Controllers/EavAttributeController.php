<?php

namespace App\Http\Controllers;

use App\Models\EavAttribute;
use App\Http\Requests\StoreEavAttributeRequest;
use App\Http\Requests\UpdateEavAttributeRequest;

class EavAttributeController extends Controller
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
     * @param  \App\Http\Requests\StoreEavAttributeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEavAttributeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EavAttribute  $eavAttribute
     * @return \Illuminate\Http\Response
     */
    public function show(EavAttribute $eavAttribute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EavAttribute  $eavAttribute
     * @return \Illuminate\Http\Response
     */
    public function edit(EavAttribute $eavAttribute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEavAttributeRequest  $request
     * @param  \App\Models\EavAttribute  $eavAttribute
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEavAttributeRequest $request, EavAttribute $eavAttribute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EavAttribute  $eavAttribute
     * @return \Illuminate\Http\Response
     */
    public function destroy(EavAttribute $eavAttribute)
    {
        //
    }
}
