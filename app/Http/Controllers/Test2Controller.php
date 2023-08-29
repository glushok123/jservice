<?php

namespace App\Http\Controllers;

use App\Models\Test;

use App\Services\Test\TestService;
use PHPHtmlParser\Dom;

use App\Models\RepairCategory;
use App\Models\RepairSubCategory;
use App\Models\RepairImageSubCategory;
use App\Models\RepairQuestionSubCategory;
use App\Models\RepairService;
use App\Models\RepairBrand;
use App\Models\RepairReview;

class Test2Controller extends Controller
{
    public $array = array(
        array(
            'MSI',
            '/remont-videokart/msi'
        ),
        array(
            'Xiaomi',
            '/remont-videokart/xiaomi'
        ),
        array(
            'Sapphire',
            '/remont-videokart/sapphire'
        ),
        array(
            'Asus',
            '/remont-videokart/asus'
        ),
        array(
            'AMD',
            '/remont-videokart/amd'
        ),
        array(
            'Nvidia',
            '/remont-videokart/nvidia'
        ),
        array(
            'Evga',
            '/remont-videokart/evga'
        ),
        array(
            'Getac',
            '/remont-videokart/getac'
        ),
        array(
            'GeForce',
            '/remont-videokart/geforce'
        ),
        array(
            'Gigabyte',
            '/remont-videokart/gigabyte'
        ),
        array(
            'Lenovo',
            '/remont-videokart/lenovo'
        ),
        array(
            'Intel',
            '/remont-videokart/intel'
        )
    );

    public function test2()
    {
        dd('STOP');
        ini_set('post_max_size', '5000M');         // Максимальный размер данных 
        ini_set('upload_max_filesize', '100M');    // Максимальный размер файлов
        ini_set('max_execution_time', '600000');   // Максимальное время выполнения скрипта
        ini_set('max_input_time', '600000');       // Максимальное время обработки данных
        ini_set('memory_limit', '16000M');         // Максимальное значение оперативки

        foreach ($this->array as $i) {
            $dom = new Dom;
            $dom->loadFromUrl('https://asc-rem.ru' . $i[1]);
            $blockImage = $dom->find('.catalog-picture')[0];
            $imagePatch = $blockImage->find('img')[0]->tag->src['value'];

            $imageBrand = file_get_contents("https://asc-rem.ru" . $imagePatch);
            $ext = substr(strrchr($imagePatch, '.'), 1);
            $filename = uniqid();
            file_put_contents(public_path('images/upload/' . $filename . '.' . $ext), $imageBrand);

            $brand = new RepairBrand();
            $brand->name = $i[0];
            $brand->title = 'Ремонт ' . $i[0];
            $brand->sub_category_id = 29;
            $brand->image = $filename . '.' . $ext;
            $brand->save();
        }
 
        dd('STOP');
    }
}