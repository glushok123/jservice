<?php

namespace App\Http\Controllers;

use App\Models\ProductCategorie;
use App\Models\Product;
use App\Models\Brand;
use App\Http\Requests\StoreProductCategorieRequest;
use App\Http\Requests\UpdateProductCategorieRequest;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Cart;

class ProductCategorieController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productsBuild = Product::with(['brand', 'category', 'images']);
        $countProducts = $productsBuild->count();
        $products = $productsBuild->paginate(15);

        return view('shop.catalog.category', [
            'products' => $products,
            'countProducts' => $countProducts,
        ]);
    }


    public function displayImage($filename)
    {
        $path = storage_path('app/public/product_images/' . $filename);

        if (! File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
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
     * @param  \App\Http\Requests\StoreProductCategorieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductCategorieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductCategorie  $productCategorie
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategorie $productCategorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategorie  $productCategorie
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategorie $productCategorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductCategorieRequest  $request
     * @param  \App\Models\ProductCategorie  $productCategorie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductCategorieRequest $request, ProductCategorie $productCategorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategorie  $productCategorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategorie $productCategorie)
    {
        //
    }
}
