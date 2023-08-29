<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('product', 'ProductCrudController');
    Route::crud('brand', 'BrandCrudController');
    Route::crud('product-categorie', 'ProductCategorieCrudController');
    Route::crud('eav-attribute', 'EavAttributeCrudController');
    Route::crud('eav-attributes-categories', 'EavAttributesCategoriesCrudController');
    Route::crud('eav-attributes-values', 'EavAttributesValuesCrudController');
    Route::crud('eav-enums', 'EavEnumsCrudController');
    Route::crud('product-image', 'ProductImageCrudController');
    Route::crud('repair-category', 'RepairCategoryCrudController');
    Route::crud('repair-sub-category', 'RepairSubCategoryCrudController');
    Route::crud('repair-service', 'RepairServiceCrudController');
    Route::crud('repair-review', 'RepairReviewCrudController');
    Route::crud('repair-question-sub-category', 'RepairQuestionSubCategoryCrudController');
    Route::crud('repair-brand', 'RepairBrandCrudController');
    Route::crud('repair-order', 'RepairOrderCrudController');
}); // this should be the absolute last line of this file