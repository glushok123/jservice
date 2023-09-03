@extends('layouts.app')

@section('content')

@php
use App\Models\RepairSubCategory;

$subCategorys = RepairSubCategory::select('id', 'name', 'slug', 'small_image')->orderBy('id', 'ASC')->get();
@endphp


<style>
.brand-item {
    filter: none;
}

.brand-items.showBrands .brand-item:nth-child(n+13) {
    display: none;
}
</style>
<main class="pageWrapper">
    <section class="mpBlock">
        <div class="container flex">
            <div class="lp-block">
                <h1 class="mpBlock-title color-white">Ремонт цифровой техники в Москве</h1>
                <ul class="title-list">
                    <li class="mpBlock-p "><img src="images/yes.png" alt>Ремонт от 500р.</li>
                    <li class="mpBlock-p"><img src="images/yes.png" alt>Бесплатный забор вашей техники.</li>
                    <li class="mpBlock-p"><img src="images/yes.png" alt>Гарантия от 6 месяцев.</li>
                </ul>
                <form>
                    <input type="hidden" name="form_name" value="Форма на главном экране сайта">
                    <input type="text" name="phone" inputmode="tel" class="msPhone">
                    <input type="submit" value="Отправить заявку" class="msSubmit" disabled="disabled">
                    <div class="confirm mpBlock__confirm d-flex">
                        <input type="checkbox" class="msCheck" checked>
                        <div class="privacy__text">Отправляя данную форму, Вы соглашаетесь с <a
                                href="/privacy-policy">политикой конфиденциальности</a> нашего сайта</div>
                    </div>
                </form>
                <div class="success"></div>
            </div>
            <div class="rp-block">
                <img class="offer-phones" src="images/итог.png">
            </div>
        </div>
    </section>

    <span class="order-block-section">


        <section class="productCategories-section">
            <div class="container">
                <h2 class="titleH2">Ремонтируем</h2>
                <div class="mainCategoriesList-wrapper brand-items showBrands">

                    @foreach ($subCategorys as $subCategory)
                    <div class="mainCategoriesList-wrapper__item brand-item">
                        <a href="{{ route('sub_category.show', ['slug_sub_category' => $subCategory->slug]) }}">
                            <img src="images/upload/{{ $subCategory->small_image }}">
                            <h3 class="mainCategoriesList__title">{{ $subCategory->name }}</h3>
                        </a>
                    </div>
                    @endforeach

                </div>
                <a class="moreCats show-more-cat">Больше категорий</a>
            </div>
        </section>

        <section class="advsSection">
            <div class="container">


                <div class="mainAdvs flex">
                    <div class="mainAdvs-item">
                        <div class="maTitle color-white">Удобное расположение в центре города</div>
                        <div class="maCount">1</div>
                        <img src="images/ad-1.png" class="maImg">
                    </div>
                    <div class="mainAdvs-item">
                        <div class="maTitle color-white">Бесплатная диагностика вашего устройства</div>
                        <div class="maCount">2</div>
                        <img src="images/ad-2.png" class="maImg">
                    </div>
                    <div class="mainAdvs-item">
                        <div class="maTitle color-white">Только качественные детали и запчасти</div>
                        <div class="maCount">3</div>
                        <img src="images/ad-3.png" class="maImg">
                    </div>
                    <div class="mainAdvs-item">
                        <div class="maTitle color-white">Выгодный ремонт с гарантией</div>
                        <div class="maCount">4</div>
                        <img src="images/ad-4.png" class="maImg">
                    </div>
                </div>

            </div>
            <br><br>
        </section>
    </span>
    <section class="saleForm-section">
        <div class="container">
            <div class="formSale">
                <div class="fsMain">
                    <div class="fsTitle mb-discont">Получите скидку 25%<br> на первые ремонтные работы</div>
                    <p>Если вам понравились условия работы с нашим сервисным центром, то мы с радостью
                        предоставим скидку на ремонт любого устройства в размере 25%!</p>
                    <button class="getConsult js-open-modal" data-modal="2">Получить скидку</button>
                    <img src="images/sale-img.png">
                </div>
                <div class="fsBg"></div>
                <div class="fsOverlay"></div>
            </div>
        </div>
    </section>
    <section class="salesSection" id="anchor-stock">
        <div class="container">
            <h2 class="titleH2">Акции сервисного центра</h2>
            @include('sales.template')
        </div>
    </section>

    @include('form.form_bottom_order')

    <section class="stepItem-section">
        <div class="container">

            <h2 class="stepTitle">Делаем ремонт качественно и в максимально короткие сроки</h2>
            <div class="stepDiv">
                <p class="paragraph">Это возможно благодаря тому, что на нашем складе имеются все необходимые
                    детали, запчасти и расходники, а наши сервисные инженеры постоянно повышают свою
                    квалификацию, проходят обучение и переобучение. Мы имеем все возможности для того, чтобы
                    выполнять оперативный высококлассный ремонт. Мастера, на счету которых сотни успешно
                    отремонтированных устройств, строго придерживаются корпоративной культуры ремонта.</p>
                <p class="paragraph">JService - это, в первую очередь, команда отлично знающих своё дело
                    специалистов. Все они имеют высшее образование, обширный практический опыт, теоретические
                    знания. Сегодня им под силу справиться с задачами любой сложности, любой направленности и
                    любой специфики.</p>
            </div>


            <ul class="adsList-ul">
                <li>
                    <div class="adsItem">Оставьте заявку на ремонт</div>
                    <img src="images/step-01.png">
                    <div class="circle"></div>
                </li>
                <li>
                    <div class="adsItem">Менеджер рассчитает стоимость</div>
                    <img src="images/step-02.png">
                    <div class="circle"></div>
                </li>
                <li>
                    <div class="adsItem">Вы сдадите устройство сами/курьером</div>
                    <img src="images/step-03.png">
                    <div class="circle"></div>
                </li>
                <li>
                    <div class="adsItem">Мастер выполнит диагностику</div>
                    <img src="images/step-04.png">
                    <div class="circle"></div>
                </li>
                <li>
                    <div class="adsItem">Получит согласие на ремонт</div>
                    <img src="images/step-05.png">
                    <div class="circle"></div>
                </li>
                <li>
                    <div class="adsItem">Ваше устройство исправно!</div>
                    <img src="images/step-06.png">
                    <div class="circle"></div>
                </li>
            </ul>
        </div>
    </section>

    <section class="reviewsSection">
        <div class="container">
            <h2 class="titleH2">Популярные отзывы</h2>
            <div class="reviewsSlider swiper-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="reviewHeader">
                            <div class="reviewMedia">
                                <img src="images/review-04.jpg">
                            </div>
                            <div class="rheaderContent">
                                <div class="reviewTitle">Мне все понравилось</div>
                                <div class="reviewAuthor">Леся О., 10/10/2021</div>
                                <ul class="rating">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="reviewContent">
                            <p>Посещала данный сервис. Для замены стекла на телефоне. Приняли по записи быстро,
                                мастер дал полную консультацию по вариантам ремонта и стоимости, произвели
                                ремонт в течении 4-х часов, визуально все сделано хорошо.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="reviewHeader">
                            <div class="reviewMedia">
                                <img src="images/review-03.jpg">
                            </div>
                            <div class="rheaderContent">
                                <div class="reviewTitle">Благодарю!</div>
                                <div class="reviewAuthor">Никита Л., 01/04/2021</div>
                                <ul class="rating">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="reviewContent">
                            <p>Всем привет, хочу выразить благодарность сервису за оперативный ремонт моего
                                моноблока. Починили оперативно за адекватную сумму, за что большое спасибо.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="reviewHeader">
                            <div class="reviewMedia">
                                <img src="images/review-02.jpg">
                            </div>
                            <div class="rheaderContent">
                                <div class="reviewTitle">Рекомендую</div>
                                <div class="reviewAuthor">Роман К., 13/03/2021</div>
                                <ul class="rating">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="reviewContent">
                            <p>Изображение по краям ЖК-монитора стало еле-еле заметным. Самостоятельно настроить
                                не смог, обратился в СЦ. Мастер заменил две ленты светодиодов в подсветке
                                монитора. Цена замены - не большая. Изображение - отличное. Ремонтом очень
                                доволен. Огромное спасибо мастеру за помощь.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="reviewHeader">
                            <div class="reviewMedia">
                                <img src="images/review-01.jpg">
                            </div>
                            <div class="rheaderContent">
                                <div class="reviewTitle">Спасибо за работу!</div>
                                <div class="reviewAuthor">Анна О., 25/09/2021</div>
                                <ul class="rating">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="reviewContent">
                            <p>Благодарю за проделанную работу, отдельное спасибо руководителю отдела Дмитрию,
                                помог принять правильное решение и грамотно проконсультировал. Спасли мой
                                утопленный девайс в кратчайшие сроки. Удачи и процветания сервису!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reviewSilder-arrows">
                <div class="leftArrow arrow">
                    << /div>
                        <div class="rightArrow arrow">>
                        </div>
                </div>
                <div class="reviewsSublay">
                    <div class="rs-01"></div>
                    <div class="rs-02"></div>
                </div>
            </div>
    </section>

    <div class="next-part">
        <div class="map">
            <!-- <span id="map"> -->

            <!-- </span> -->
        </div>
    </div>
</main>
@endsection

@section('description', 'JSERVICE — Срочный ремонт техники в Москве с бесплатной диагностикой ✅ Гарантия до 3 лет. ✅
Получите скидку 25% при первом обращении!')
@section('keywords', 'JSERVICE-Рем-Сервис, Сервис центр по срочному ремонту')
@section('title', 'Cервисный центр по ремонту цифровой техники в Москве 🚀 Федеральная сеть сервис центров JSERVICE')