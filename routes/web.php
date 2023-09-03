<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () { return view('welcome'); });
Route::get('/varranty', function () { return view('varranty'); });
Route::get('/out-store', function () { return view('out-store'); });
Route::get('/news', function () { return view('news'); });
Route::get('/contacts', function () { return view('contacts'); });
Route::get('/privacy-policy', function () { return view('privacy_policy'); });
Route::get('/cookies', function () { return view('cookies'); });
Route::get('/search', function () { return view('search'); });

Route::post('/sendform', 'RepairOrderController@create');

Route::group(['prefix' => 'sales', 'as' => 'sales.'], function () {
    Route::get('/', function () { return view('sales'); });
    Route::get('/sale_1', function () { return view('sales.sale_1'); });
    Route::get('/sale_2', function () { return view('sales.sale_2'); });
    Route::get('/sale_3', function () { return view('sales.sale_3'); });
});

Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
    Route::get('/{slug}', 'RepairCategoryController@show')->name('show');
});

Route::group(['prefix' => 'sub_category', 'as' => 'sub_category.'], function () {
    Route::get('/{slug_sub_category}', 'RepairCategoryController@showSubCategory')->name('show');
    Route::get('/{slug_sub_category}/service/{slug_service}', 'RepairCategoryController@showSubCategoryService')->name('service.show');
    Route::get('/{slug_sub_category}/brand/{slug_brand}', 'RepairCategoryController@showSubCategoryBrand')->name('brand.show');
    Route::get('/{slug_sub_category}/brand/{slug_brand}/service/{slug_service}', 'RepairCategoryController@showSubCategoryBrandService')->name('sub_category_brand_service.show');
});

/* Sitemap */
Route::get('/sitemap', 'SitemapController@index');
Route::get('/sitemap/category', 'SitemapController@category');
Route::get('/sitemap/sub_category', 'SitemapController@sub_category');

/*Route::get('test2', 'Test2Controller@test2');
Route::get('ttest', 'TestController@test');
Route::get('ttest2/{user1}/{user2}', 'TestController@test2');


Route::group(['prefix' => 'catalog', 'as' => 'catalog.'], function () {
    Route::get('/', 'ProductCategorieController@index')->name('index');
});

Route::get('product_images/{filename}', 'ProductCategorieController@displayImage')->name('displayImage');

Route::get('cart', 'CartController@cartList')->name('cart.list');
Route::post('cart', 'CartController@addToCart')->name('cart.store');
Route::post('update-cart', 'CartController@updateCart')->name('cart.update');
Route::post('remove', 'CartController@removeCart')->name('cart.remove'); // you can use delete method
Route::post('clear', 'CartController@clearAllCart')->name('cart.clear'); // you can use delete method

*/
/** CATCH-ALL ROUTE for Backpack/PageManager - needs to be at the end of your routes.php file **/

/*
Route::get('{page}/{subs?}', ['uses' => '\App\Http\Controllers\PageController@index'])
    ->where(['page' => '^(((?=(?!admin))(?=(?!\/)).))*$', 'subs' => '.*']);
*/

