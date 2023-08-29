<?php

namespace App\Http\Controllers;

use App\Models\RepairCategory;
use App\Models\RepairSubCategory;
use App\Http\Requests\StoreRepairCategoryRequest;
use App\Http\Requests\UpdateRepairCategoryRequest;
use App\Models\RepairService;
use App\Models\RepairBrand;

class RepairCategoryController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RepairCategory  $repairCategory
     * @return \Illuminate\Http\Response
     */
    public function show(string $slug)//RepairCategory $repairCategory
    {
        $repairCategory = RepairCategory::where('slug', $slug)->first();

        return view('category.category', [
            'repairCategory' => $repairCategory,
        ]);
    }
    
    public function showSubCategory(string $slug)
    {
        $repairSubCategory = RepairSubCategory::where('slug', $slug)->first();
        $brands = RepairBrand::where('sub_category_id', $repairSubCategory ->id)->get();

        return view('sub_category.sub_category', [
            'repairSubCategory' => $repairSubCategory,
            'brands' => $brands,
        ]);
    }
    
    public function showSubCategoryBrand(string $slugSubCategory, string $slugBrand)
    {

        $repairSubCategory = RepairSubCategory::where('slug', $slugSubCategory)->first();
        $brandActive = RepairBrand::where('sub_category_id', $repairSubCategory ->id)->where('slug', $slugBrand)->first();
        $brands = RepairBrand::where('sub_category_id', $repairSubCategory ->id)->get();

        return view('sub_category.brand.brand', [
            'repairSubCategory' => $repairSubCategory,
            'brandActive' => $brandActive,
            'brands' => $brands,
        ]);
    }
    public function showSubCategoryService(string $slugSubCategory, string $slugService)
    {

        $repairSubCategory = RepairSubCategory::where('slug', $slugSubCategory)->first();
        $service = RepairService::where('slug', $slugService)->first();

        return view('sub_category.service.service', [
            'repairSubCategory' => $repairSubCategory,
            'service' => $service,
        ]);
    }
}
