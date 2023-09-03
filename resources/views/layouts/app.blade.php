<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="title" content="@yield('title')" />
    <meta name="robots" content="index,follow" />
    <meta name="revisit-after" content="2 days">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <meta property="og:type" content="website">
    <meta property="og:title" content="Срочный ремонт техники и электроники в Москве">
    <meta property="og:description"
        content="Бесплатная диагностика за 30 минут даже при отказе от ремонта. Среднее время ремонта до 50 минут. Гарантия на ремонт и запчасти до 3-х лет.">

    <meta property="og:site_name" content="Федеральная сеть сервисных центров в Москве">
    <meta property="og:image" content="images/offer-img.png">
    <meta property="og:image:secure_url" content="images/offer-img.png">
    <meta property="og:image:width" content="679">
    <meta property="og:image:height" content="386">
    <meta property="og:image:alt" content="Специализированный сервисный центр по ремонту и диагностике любой техники">
	<meta name="yandex-verification" content="36467b293afb8d2c" />
    <meta name="yandex-verification" content="433a1c48ea310135" />

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--link href="{{ asset('js/bootstrap/bootstrap.css') }}" rel="stylesheet">
	<script src="{{ asset('js/bootstrap/bootstrap.js') }}" defer></script>
	<script src="{{ asset('js/jquery/jquery.js') }}" defer></script -->

    <script type="text/javascript" async charset="utf-8" src="{{ asset('template/js/all.js') }}"></script>
    <script async src="{{ asset('template/js/tag.js') }}"></script>
    <script src="{{ asset('template/js/rrweb.min.js') }}"></script>

    <link rel="icon" href="/images/JService знак.png">
    <link rel="stylesheet" href="{{ asset('template/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/media.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/adaptive.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/new-style.css') }}">
</head>

<style>
.breadcrumb {
    margin-bottom: 0px;
}
.color-white{
    /*color: white;*/
}
</style>

@php
use App\Models\RepairCategory;

$categorys = RepairCategory::select('id', 'name', 'slug')->orderBy('sort', 'ASC')->get();
@endphp

<body class='wp-custom-logo home'>
    <div class="ya-site-form ya-site-form_inited_no"
	data-bem="{&quot;action&quot;:&quot;https://jservice.glushok.ru/search&quot;,&quot;arrow&quot;:false,&quot;bg&quot;:&quot;transparent&quot;,&quot;fontsize&quot;:12,&quot;fg&quot;:&quot;#000000&quot;,&quot;language&quot;:&quot;ru&quot;,&quot;logo&quot;:&quot;rb&quot;,&quot;publicname&quot;:&quot;Поиск по jservice.glushok.ru&quot;,&quot;suggest&quot;:true,&quot;target&quot;:&quot;_self&quot;,&quot;tld&quot;:&quot;ru&quot;,&quot;type&quot;:2,&quot;usebigdictionary&quot;:true,&quot;searchid&quot;:3184057,&quot;input_fg&quot;:&quot;#000000&quot;,&quot;input_bg&quot;:&quot;#ffffff&quot;,&quot;input_fontStyle&quot;:&quot;normal&quot;,&quot;input_fontWeight&quot;:&quot;normal&quot;,&quot;input_placeholder&quot;:&quot;&quot;,&quot;input_placeholderColor&quot;:&quot;#000000&quot;,&quot;input_borderColor&quot;:&quot;#7f9db9&quot;}">
    </div>
    <div id="page" class="site">
        <header id="main-header" class="site-header" itemscope itemtype="http://schema.org/WPHeader">
            <div class="container positionCustom">
                <div class="topHeader">
                    <div class="menu-mainmenu-container">
                        <nav itemscope itemtype="https://schema.org/SiteNavigationElement">
                            <ul id="menu-mainmenu" class="menu">
                                <li id="menu-item-16" class="menu-item menu-item-16" itemprop="name">
                                    <a itemprop="url" href="/varranty">Гарантия сервиса</a>
                                </li>
                                <li id="menu-item-17" class="menu-item menu-item-17" itemprop="name">
                                    <a itemprop="url" href="/out-store">Наш склад</a>
                                </li>
                                <li id="menu-item-17" class="menu-item menu-item-17" itemprop="name">
                                    <a itemprop="url" href="/news">Новости</a>
                                </li>
                                <li id="menu-item-18" class="menu-item menu-item-18" itemprop="name">
                                    <a itemprop="url" href="/sales">Акции</a>
                                </li>
                                <li id="menu-item-19" class="menu-item menu-item-19" itemprop="name">
                                    <a itemprop="url" href="/contacts">Контакты</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="topInfo">
                        <div class="points">
                            <img src="/fonts/russia.svg">
                            <span class="media-large">Доставка на ремонт в сервисный центр и обратно – 0₽</span>
                            <span class="media-medium">Доставка курьером – 0₽</span>
                        </div>
                        <span class="jobTime"><span class="jobTime__label">Режим работы:</span> ежедневно с 10:00 до
                            20:00</span>
                    </div>
                </div>
                <div class="middleHeader">
                    <div class="logoPart-header">
                        <a href="/" class="custom-logo-link" rel="home" style='text-align: center;'>
                            <img src="/images/JService1.png" alt="" style="height: 60px;" align='center' class="mx-auto"
                                style='text-align: center;'>
                        </a>
                    </div>
                    <div class="searchPart-header">
                        <div class="desk-hidden menuMobile js-open-modal" data-modal="3"></div>
                        <button class="catalogModal js-open-modal button-puls primary-button" data-modal="2">
                            <img src="/images/JService знак.png">Срочный ремонт
                            <span class="shine"></span>
                        </button>

                        <div class="search-form" id="searchform" itemscope itemtype="https://schema.org/WebSite">
                            <meta itemprop="url" content="https://asc-rem.ru">
                            <form class="search-form custom-search" id="searchform" itemprop="potentialAction" itemscope
                                itemtype="https://schema.org/SearchAction">
                                <meta itemprop="target" content="https://asc-rem.ru/search/?s={s}">
                                <input type="hidden" name="searchid">
                                <input type="text" name="text" class="search-form__input" placeholder="Поиск по сайту.."
                                    autocomplete="off" itemprop="query-input">
                                <input type="hidden" name="web" value="0">
                                <button id="searchsubmit" data-search="body" class="headerSubmit"></button>
                            </form>
                            <div class="ajax-search" data-search="header"></div>
                        </div>

                    </div>
                    <div class="contactPart-header">
                        <div class="adressHeader">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512" style="margin-right:10px;"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#436193}</style><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                            <div>
                                <div class="adressCity">г. Москва</div>
                                <div class="adressStrt">Шверника, 1к1</div>
                            </div>
                        </div>
                        <div class="phoneHeader">
                            <a id="header__pc_phone" class="phone-trigger p-trigger" href="tel:+79091636457"
                                data-phone="2">8 (909) 163-64-57</a>
                            <a id="header__mob_phone" class="catalogModal js-open-modal button-puls primary-button"
                                href="tel:+79091636457">
                                8 (909) 163-64-57
                                <span class="shine"></span>
                            </a>
                        </div>
                        <div class="phoneHeader">
                            <a id="header__pc_phone" class="phone-trigger p-trigger" href="tel:+74951625317"
                                data-phone="1">+7 (495) 162-53-17</a>
                            <a id="header__mob_phone" class="catalogModal js-open-modal button-puls primary-button"
                                href="tel:+74951625317">
                                +7 (495) 162-53-17 <span class="shine"></span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="bottomHeader">
                    <div class="menu-catalog-container" itemscope itemtype="https://schema.org/SiteNavigationElement">
                        <nav class>
                            <ul id="menu-catalog" class="menu">

                                @foreach ($categorys as $category)
                                <li id="menu-item-26" class="menu-item menu-item-26 iteam-cell" itemprop="name">
                                    <a itemprop="url" href="{{ route('category.show', ['slug' => $category->slug]) }}">
                                        <span>{{ $category->name }}</span>
                                    </a>
                                    <div class="dropDown_menu">
                                        <ul class>
                                            @foreach ($category->sub_category as $sub_category)

                                            <li class="lvl_menu_1">
                                                <a
                                                    href="{{ route('sub_category.show', ['slug_sub_category' => $sub_category->slug]) }}">{{ $sub_category->name}}</a>
                                                <div class="lvl_menu_2">
                                                    <ul class="head-col-all  @if (count($sub_category->brands) > 20) head-column-4 @elseif(count($sub_category->brands) > 10) head-column-2 @else head-column-1 @endif">

                                                        @foreach ($sub_category->brands as $brand)
                                                        <li><a
                                                                href="{{ route('sub_category.brand.show', ['slug_sub_category' => $sub_category->slug, 'slug_brand' => $brand->slug]) }}">{{ $brand->name }}</a>
                                                        </li>
                                                        @endforeach

                                                    </ul>
                                                </div>
                                            </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <meta itemprop="headline" content="JService — сервисный центр в Москве">
            <meta itemprop="description"
                content="АСЦ — Срочный ремонт техники в Москве с бесплатной диагностикой  ✅ Гарантия до 3 лет. ✅ Получите скидку 25% при первом обращении!">
            <meta itemprop="keywords" content="JSERVICE, Сервис центр по срочному ремонту">

        </header>
        @yield('content')

        @include('layouts.footer')

        <!-- Footer -->

</body>

</html>