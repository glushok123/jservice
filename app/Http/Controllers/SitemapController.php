<?php
namespace App\Http\Controllers;
 
use App\Models\RepairCategory;
use App\Models\RepairSubCategory;
use App\Models\RepairService;
use App\Models\RepairBrand;
 
use Illuminate\Http\Request;
 
class SitemapController extends Controller
{
    public function index()
	{
	  $category = RepairCategory::orderBy('updated_at', 'desc')->first();
      $sub_category = RepairSubCategory::orderBy('updated_at', 'desc')->first();
 
	  return response()->view('sitemap.index', [
	      'category' => $category,
	      'sub_category' => $sub_category,
	  ])->header('Content-Type', 'text/xml');
	}
 
	public function category()
	{
	    $categorys = RepairCategory::orderBy('updated_at', 'desc')->get();

	    return response()->view('sitemap.category', [
	        'categorys' => $categorys,
	    ])->header('Content-Type', 'text/xml');
	}
    public function sub_category()
	{
	    $sub_categorys = RepairSubCategory::orderBy('updated_at', 'desc')->get();

	    return response()->view('sitemap.sub_category', [
	        'sub_categorys' => $sub_categorys,
	    ])->header('Content-Type', 'text/xml');
	}
}