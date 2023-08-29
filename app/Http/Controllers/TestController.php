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

class TestController extends Controller
{
    public function test()
    {
        dd("STOP");
        ini_set('post_max_size', '5000M');         // Максимальный размер данных 
        ini_set('upload_max_filesize', '100M');    // Максимальный размер файлов
        ini_set('max_execution_time', '600000');   // Максимальное время выполнения скрипта
        ini_set('max_input_time', '600000');       // Максимальное время обработки данных
        ini_set('memory_limit', '16000M');         // Максимальное значение оперативки

        $nameCategory = 'Ремонт компьютерной техники';

        $dom = new Dom;
        $dom->loadFromUrl('https://asc-rem.ru/remont-kompyuternoy-tehniki');

        $seo_title = trim($dom->find('title')[0]->innerHtml);
        $seo_title = str_replace('ASC', 'JSERVICE', $seo_title);
        $seo_description = trim($dom->find('meta[name="description"]')[0]->tag->content['value']);
        $seo_keywords = trim($dom->find('meta[name="keywords"]')[0]->tag->content['value']);
        $seo_keywords = str_replace('ASC-Service', 'JSERVICE', $seo_keywords);

        $price = trim($this->getPrice($dom)->innerHtml);
        $time = trim($this->getTime($dom)->innerHtml);
        $desc = trim($this->getDesc($dom)->innerHtml);
        $imgSrc = $this->getImg($dom);

        $imageCategory = file_get_contents("https://asc-rem.ru/" . $imgSrc);
        $ext = substr(strrchr($imgSrc, '.'), 1);
        $filename = uniqid();
        file_put_contents(public_path('images/upload/' . $filename . '.' . $ext), $imageCategory);

        $arrSubCategory = $this->getSrcSubCategory($dom);
        $arrSubCategory = $this->getTypePrice($dom, $arrSubCategory);
        $reviews = $this->getReviews($dom);

        $arrSubCategory = $this->getInfoSubCategory($arrSubCategory);

        $category = new RepairCategory();

        if (!empty(RepairCategory::where('name', $nameCategory)->first())) {
            $category = RepairCategory::where('name', $nameCategory)->first();
        }

        $category->name = trim($nameCategory);
        $category->title = trim($dom->find('.catalog-heading__title')[0]->innerHtml);
        $category->image = trim($filename . '.' . $ext);
        $category->min_price = trim($price);
        $category->min_time = trim($time);
        $category->description = trim($desc);

        $category->seo_title = trim($seo_title);
        $category->seo_description = trim($seo_description);
        $category->seo_keywords = trim($seo_keywords);

        $category->save();

        foreach ($reviews as $item) {
            $image= file_get_contents("https://asc-rem.ru" . $item['src']);
            $ext = substr(strrchr($item['src'], '.'), 1);
            $filename = uniqid();
            file_put_contents(public_path('images/upload/' . $filename . '.' . $ext), $image);
        
            $review = new RepairReview();
            $review->user_name = $item['name_user'];
            $review->name_image = $filename . '.' . $ext;
            $review->comment = trim($item['comment']);
            $review->date = $item['date'];
            $review->category_id = $category->id;
            $review->save();
        }

        $countSubCategory = 0;

        foreach($arrSubCategory as $key => $value) {
            $countSubCategory += 1;

            switch ($countSubCategory) {
                case 1:
                    $arrayBrands = $this->array_1;
                    break;
                case 2:
                    $arrayBrands = $this->array_2;
                    break;
                case 3:
                    $arrayBrands = $this->array_3;
                    break;
                case 4:
                    $arrayBrands = $this->array_4;
                    break;
            }

            $imageSmall = file_get_contents("https://asc-rem.ru" . $arrSubCategory[$key]['small_img_src']);
            $extImageSmall = substr(strrchr($arrSubCategory[$key]['small_img_src'], '.'), 1);
            $filenameImageSmall = uniqid();
            file_put_contents(public_path('images/upload/' . $filenameImageSmall . '.' . $extImageSmall), $imageSmall);

            $imageFull = file_get_contents("https://asc-rem.ru" . $arrSubCategory[$key]['full_img_src']);
            $extImageFull = substr(strrchr($arrSubCategory[$key]['full_img_src'], '.'), 1);
            $filenameImageFull = uniqid();
            file_put_contents(public_path('images/upload/' . $filenameImageFull . '.' . $extImageFull), $imageFull);

            $subCategory = new RepairSubCategory();
            $subCategory->name = $key;
            $subCategory->title = $arrSubCategory[$key]['title'];
            $subCategory->image = $filenameImageFull . '.' . $extImageFull;
            $subCategory->small_image = $filenameImageSmall . '.' . $extImageSmall;
            $subCategory->min_price = $arrSubCategory[$key]['price'];
            $subCategory->min_time = $arrSubCategory[$key]['time'];
            $subCategory->description = $arrSubCategory[$key]['desc'];
            $subCategory->template_description_brand = '';

            $subCategory->seo_title =  $arrSubCategory[$key]['seo_title'];
            $subCategory->seo_description = $arrSubCategory[$key]['seo_description'];
            $subCategory->seo_keywords = $arrSubCategory[$key]['seo_keywords'];

            $subCategory->parent_id = $category->id;
            $subCategory->save();

            foreach($arrSubCategory[$key]['service'] as $s) {
                $service = new RepairService();
                $service->name = $s['name'];
                $service->title = $s['name'] . ' в Москве';
                $service->min_price = $s['price'];
                $service->min_time = $s['time'];
                $service->description_header = $s['desc'];
                $service->sub_category_id = $subCategory->id;

                $service->seo_title = $s['seo_title'];
                $service->seo_description = $s['seo_description'];
                $service->seo_keywords = $s['seo_keywords'];

                $service->save();
            }

            foreach($arrSubCategory[$key]['question'] as $s) {
                $question = new RepairQuestionSubCategory();
                $question->question = $s['question'];
                $question->answer = $s['answer'];
                $question->sub_category_id = $subCategory->id;
                $question->save();
            }

            foreach($arrSubCategory[$key]['photogallery'] as $s) {
                $image = file_get_contents("https://asc-rem.ru" . $s);
                $ext = substr(strrchr($s, '.'), 1);
                $filename = uniqid();
                file_put_contents(public_path('images/upload/' . $filename . '.' . $ext), $image);

                $image = new RepairImageSubCategory();
                $image->name = $filename . '.' . $ext;
                $image->sub_category_id = $subCategory->id;
                $image->save();
            }

            foreach ($arrSubCategory[$key]['reviews'] as $item) {
                $image= file_get_contents("https://asc-rem.ru" . $item['src']);
                $ext = substr(strrchr($item['src'], '.'), 1);
                $filename = uniqid();
                file_put_contents(public_path('images/upload/' . $filename . '.' . $ext), $image);

                $review = new RepairReview();
                $review->user_name = $item['name_user'];
                $review->name_image = $filename . '.' . $ext;
                $review->comment = trim($item['comment']);
                $review->date = $item['date'];
                $review->sub_category_id = $subCategory->id;
                $review->save();
            }
        }

        dd(
            $price,
            $time,
            $desc,
            $imgSrc,
            $arrSubCategory,
            $reviews,
        );

    }

    public function getPrice($dom)
    {
        $b1 = $dom->find('.catalog-heading');
        $info = $b1->find('.offer-part__info');
        $price = $info->find('.ruble');
        $price = $price->find('.offer-part__item-text');

        return $price;
    }

    public function getTime($dom)
    {
        $b1 = $dom->find('.catalog-heading');
        $info = $b1->find('.offer-part__info');
        $time = $info->find('.offer-part__item')[1];
        $time = $time->find('.offer-part__item-text');

        return $time;
    }

    public function getDesc($dom)
    {
        $b1 = $dom->find('.catalog-heading');
        $info = $b1->find('.offer-part__text');

        return $info;
    }

    public function getImg($dom)
    {
        $b1 = $dom->find('.catalog-heading');
        $img = $b1->find('.b-img')[0]->tag->src['value'];

        return $img;
    }

    public function getSrcSubCategory($dom)
    {
        $array = [];

        $b1 = $dom->find('.productCategories-section');
        $b1 = $b1->find('.mainCategoriesList-wrapper__item');

        foreach($b1 as $item) {
            $src = $item->find('a')[0]->tag->href['value'];
            $name = $item->find('.mainCategoriesList__title')[0];
            $img = $item->find('img')[0]->tag->src['value'];

            $array[$name->innerHtml] = [
                'src' => $src,
                'small_img_src' => $img,
            ];
        }

        return $array;
    }
    
    public function getTypePrice($dom, $arrSubCategory)
    {
        $array = [];

        $b1 = $dom->find('.category-price-section');
        $tables = $b1->find('.worksTable');
        $arrayName = $b1->find('.title-table');

        $count = 0;

        foreach($tables as $item) {
            $nameSubCategory = trim($arrayName[$count]->text);
            $row = $item->find('.contentRow');

            $ar = [];

            foreach($row as $i) {
                $name = $i->find('.itemCol')[0];
                $name = $name->find('span')[0];

                $price = $i->find('.itemCol')[1];
                $price = $price->find('.price-cost')[0];

                $time = $i->find('.itemCol')[2];
                $time = $time->find('div')[0];

                $src = $i->find('.itemCol')[0];

                if (empty($src->find('a')[0])){
                    continue;
                }

                $src = $src->find('a')[0]->tag->href['value'];

                $dom2 = new Dom;
                $dom2->loadFromUrl('https://asc-rem.ru' . $src);

                $desc = $dom2->find('.catalog-heading')[0];
                $desc = $desc->find('.col-md-6')[0]->innerHtml;

                $seo_title = trim($dom2->find('title')[0]->innerHtml);
                $seo_title = str_replace('ASC', 'JSERVICE', $seo_title);
                $seo_description = trim($dom2->find('meta[name="description"]')[0]->tag->content['value']);
                $seo_keywords = trim($dom2->find('meta[name="keywords"]')[0]->tag->content['value']);
                $seo_keywords = str_replace('ASC-Service', 'JSERVICE', $seo_keywords);

                $ar[] = [
                    'name' => $name->innerHtml,
                    'price' => $price->innerHtml,
                    'time' => $time->innerHtml,
                    'desc' => $desc,
                    'seo_title' => $seo_title,
                    'seo_description' => $seo_description,
                    'seo_keywords' => $seo_keywords,
                ];
            }

            $arrSubCategory[$nameSubCategory]['service'] = $ar;
            $count = $count + 1;
        }

        return $arrSubCategory;
    }

    public function getReviews($dom)
    {
        $array = [];
        $b1 = $dom->find('.reviewsSection');
        $rewiews = $b1->find('.restyling-review');

        foreach($rewiews as $rewiew) {
            $header = $rewiew->find('.restyling-header');
            $content = $rewiew->find('.reviewContent');
            $date = $rewiew->find('.date');
            $date = $date->find('div')->innerHtml;

            $nameUser = $header->find('span')[0]->innerHtml;
            $src = $header->find('img')[0]->tag->src['value'];
            $comment = $content->find('p')->innerHtml;
            
            $array[] = [
                'name_user' => $nameUser,
                'src' => $src,
                'comment' => $comment,
                'date' => trim(str_replace('<strong>Дата:</strong>', '', $date)),
            ];
        }

        return $array;
    }

    public function getQuestion($dom)
    {
        $array = [];

        $b_q = $dom->find('.faq__item');

        foreach($b_q as $item) {
            $question = $item->find('h3')->innerHtml;
            $answer = $item->find('.faq__item-ask')->innerHtml;

            $array[] = [
                'question' => $question,
                'answer' => $answer,
            ];
        }

        return $array;
    }

    public function getPhotogallery($dom)
    {
        $array = [];

        $b_q = $dom->find('#photogallery');
        $b_q = $b_q->find('.gallery-block__item');

        foreach($b_q as $item) {
            if (!empty($item->find('img')[0])){
                $img = $item->find('img')[0]->tag->src['value'];

                $array[] = $img;
            }
        }

        return $array;
    }

    public function getInfoSubCategory($arrSubCategory)
    {
        foreach($arrSubCategory as $key => $value) {
            $dom = new Dom;
            $dom->loadFromUrl('https://asc-rem.ru' . $arrSubCategory[$key]['src']);
            $price = $this->getPrice($dom)->innerHtml;
            $time = $this->getTime($dom)->innerHtml;
            $desc = $this->getDesc($dom)->innerHtml;
            $imgSrc = $this->getImg($dom);

            $arrSubCategory[$key]['price'] = $price;
            $arrSubCategory[$key]['time'] = $time;
            $arrSubCategory[$key]['desc'] = $desc;
            $arrSubCategory[$key]['full_img_src'] = $imgSrc;
            $arrSubCategory[$key]['question'] = $this->getQuestion($dom);
            $arrSubCategory[$key]['reviews'] = $this->getReviews($dom);
            $arrSubCategory[$key]['photogallery'] = $this->getPhotogallery($dom);

            $seo_title = trim($dom->find('title')[0]->innerHtml);
            $seo_title = str_replace('ASC', 'JSERVICE', $seo_title);

            $seo_description = trim($dom->find('meta[name="description"]')[0]->tag->content['value']);

            $seo_keywords = trim($dom->find('meta[name="keywords"]')[0]->tag->content['value']);
            $seo_keywords = str_replace('ASC-Service', 'JSERVICE', $seo_keywords);

            $arrSubCategory[$key]['seo_title'] = $seo_title;
            $arrSubCategory[$key]['seo_description'] = $seo_description;
            $arrSubCategory[$key]['seo_keywords'] = $seo_keywords;

            $arrSubCategory[$key]['title'] = trim($dom->find('.catalog-heading__title')[0]->innerHtml);;
        }

        return $arrSubCategory;
    }
}