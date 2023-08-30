<?php

namespace App\Http\Controllers;

use App\Models\RepairCategory;
use App\Models\RepairSubCategory;
use App\Models\RepairOrder;
use App\Http\Requests\StoreRepairOrderRequest;
use App\Http\Requests\UpdateRepairOrderRequest;
use Illuminate\Http\Request;
use App\Models\RepairBrand;
use App\Models\RepairService;
use NotificationChannels\Telegram\TelegramUpdates;
use NotificationChannels\Telegram\TelegramMessage;
use Illuminate\Notifications\Notification;

class RepairOrderController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $order = new RepairOrder();

        if ($request->has('form_name')) {
            $order->name_form = $request->form_name;
        }

        if ($request->has('name')) {
            $order->name = $request->name;
        }

        if ($request->has('phone')) {
            $order->phone = $request->phone;
        }


        if ($request->has('url')) {
            $url = $request->url;
            
            if (strpos($url, '/category/')) {
                $array = explode('/', $url);
                $categorySlug = end($array);
                $repairCategory = RepairCategory::where('slug', $categorySlug)->first();

                $order->category = $repairCategory->name;
            }

            if (
                strpos($url, 'sub_category') == true and 
                strpos($url, 'brand')        == false and
                strpos($url, 'service')      == false
               ) {
                $array = explode('/', $url);

                $subCategorySlug = end($array);
                $repairSubCategory = RepairSubCategory::where('slug', $subCategorySlug)->first();

                $order->sub_category = $repairSubCategory->name;
                $repairCategory = RepairCategory::where('id',  $repairSubCategory->parent_id)->first();
                $order->category = $repairCategory->name;
            }

            if (
                strpos($url, 'sub_category') == true and 
                strpos($url, 'brand')        == true and
                strpos($url, 'service') == false
               ) {
                $array = explode('/', $url);

                $brandSlug = end($array);
                $repairBrand = RepairBrand::where('slug', $brandSlug)->first();

                $order->brand = $repairBrand->name;

                $url_new = str_replace('/brand/' . $brandSlug, '', $url);
                $ar = explode('/', $url_new);
                $subCategorySlug = end($ar);
                $repairSubCategory = RepairSubCategory::where('slug', $subCategorySlug)->first();

                $order->sub_category = $repairSubCategory->name;
                $repairCategory = RepairCategory::where('id',  $repairSubCategory->parent_id)->first();
                $order->category = $repairCategory->name;
            }

            if (
                strpos($url, 'sub_category') == true and 
                strpos($url, 'brand')        == false and
                strpos($url, 'service')      == true
               ) {
                $array = explode('/', $url);

                $serviceSlug = end($array);
                $repairService = RepairService::where('slug', $serviceSlug)->first();

                $order->service = $repairService->name;

                $url_new = str_replace('/service/' . $serviceSlug, '', $url);
                $ar = explode('/', $url_new);
                $subCategorySlug = end($ar);
                $repairSubCategory = RepairSubCategory::where('slug', $subCategorySlug)->first();

                $order->sub_category = $repairSubCategory->name;
                $repairCategory = RepairCategory::where('id',  $repairSubCategory->parent_id)->first();
                $order->category = $repairCategory->name;
            }
        }

        $order->save();
        $order->notify(new \App\Notifications\OrdersPublished());

        return response()->json([
            'status' => 'success',
        ]);
    }
}
