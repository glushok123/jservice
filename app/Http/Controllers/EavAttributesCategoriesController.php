<?php

namespace App\Http\Controllers;

use App\Models\EavAttributesCategories;
use App\Http\Requests\StoreEavAttributesCategoriesRequest;
use App\Http\Requests\UpdateEavAttributesCategoriesRequest;

class EavAttributesCategoriesController extends Controller
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
     * @param  \App\Http\Requests\StoreEavAttributesCategoriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEavAttributesCategoriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EavAttributesCategories  $eavAttributesCategories
     * @return \Illuminate\Http\Response
     */
    public function show(EavAttributesCategories $eavAttributesCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EavAttributesCategories  $eavAttributesCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(EavAttributesCategories $eavAttributesCategories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEavAttributesCategoriesRequest  $request
     * @param  \App\Models\EavAttributesCategories  $eavAttributesCategories
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEavAttributesCategoriesRequest $request, EavAttributesCategories $eavAttributesCategories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EavAttributesCategories  $eavAttributesCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(EavAttributesCategories $eavAttributesCategories)
    {
        //
    }
}
