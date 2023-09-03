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
            'HP',
            '/remont-serverov/hp'
        ),
        array(
            'Huawei',
            '/remont-serverov/huawei'
        ),
        array(
            'Lenovo',
            '/remont-serverov/lenovo'
        ),
        array(
            'Dell',
            '/remont-serverov/dell'
        ),
        array(
            'Fujitsu',
            '/remont-serverov/fujitsu'
        ),
        array(
            'Sitronics',
            '/remont-serverov/sitronics'
        ),
        array(
            'HPE',
            '/remont-serverov/hpe'
        ),
        array(
            '﻿Karma',
            '/remont-serverov/karma'
        ),
        array(
            '﻿Qtech',
            '/remont-serverov/qtech'
        ),
        array(
            'Xfusion',
            '/remont-serverov/xfusion'
        ),
        array(
            'Yadro',
            '/remont-serverov/yadro'
        ),
        array(
            'Рикор',
            '/remont-serverov/rikor'
        ),
        array(
            'Sugon',
            '/remont-serverov/sugon'
        ),
        array(
            'Cisco',
            '/remont-serverov/cisco'
        ),
        array(
            'Oracle',
            '/remont-serverov/oracle'
        ),
        array(
            'IBM System',
            '/remont-serverov/ibm-system'
        ),
        array(
            'FusionServer',
            '/remont-serverov/fusionserver'
        )
    );

    public function test2()
    {
        dd("STOP");
        ini_set('post_max_size', '5000M');         // Максимальный размер данных 
        ini_set('upload_max_filesize', '100M');    // Максимальный размер файлов
        ini_set('max_execution_time', '600000');   // Максимальное время выполнения скрипта
        ini_set('max_input_time', '600000');       // Максимальное время обработки данных
        ini_set('memory_limit', '16000M');         // Максимальное значение оперативки

        foreach ($this->array as $i) {
            if (!empty(RepairBrand::where('name', $i[0])->first())){
                continue;
            }

            print_r($i);
            $dom = new Dom;
            $dom->loadFromUrl('https://jservces.ru' . $i[1]);
            $blockImage = $dom->find('.catalog-picture')[0];
            $imagePatch = $blockImage->find('img')[0]->tag->src['value'];

            $brand = new RepairBrand();

            if (!empty($imagePatch)) {
                $imageBrand = file_get_contents("https://jservces.ru" . $imagePatch);
                $ext = substr(strrchr($imagePatch, '.'), 1);
                $filename = uniqid();
                file_put_contents(public_path('images/upload/' . $filename . '.' . $ext), $imageBrand);
                $brand->image = $filename . '.' . $ext;
            }else {
                $brand->image = ' ';
            }

            $brand->name = $i[0];
            $brand->title = 'Ремонт ' . $i[0];
            $brand->sub_category_id = 27;
            $brand->save();
        }
 
        dd('STOP');
    }
}