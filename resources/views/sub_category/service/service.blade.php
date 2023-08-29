@extends('layouts.app')

@section('content')
    <main class="pageWrapper">
        <div class="archiveWrapper type-malfunction-page">
            <div class="container">
                <div class="breadcrumbs prod-breads">

                    <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="/"
                                itemprop="item"><span itemprop="name">🛠 Сервис-центр JSERVICE</span></a><span
                                class="divider">/</span>
                            <meta itemprop="position" content="1">
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a
                                href="{{ route('sub_category.show', ['slug_sub_category' => $repairSubCategory->slug]) }}"
                                itemprop="item"><span itemprop="name">
                                    {{ str_replace(' в Москве', '', $repairSubCategory->title) }}
                                </span></a><span class="divider">/</span>
                            <meta itemprop="position" content="2">
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span span
                                itemprop="name">
                                {{ str_replace(' в Москве', '', $service->title) }}
                            </span>
                            <meta itemprop="position" content="3">
                        </li>
                    </ol>
                </div>

                <div class="offer-part brand-offer">
                    <div class="catalog-heading brands-heading">
                        <div class="catalog-heading__bg"></div>
                        <div class="row" itemscope itemtype="https://schema.org/Product">
                            <div class="col-md-6">
                                {!! $service->description_header !!}
                            </div>
                            <div class="col-md-6">
                                <div class="icon-garant">
                                    <svg width="72" height="72" viewBox="0 0 72 72" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_d_59_969)">
                                            <rect x="11" y="6" width="50" height="50" rx="25"
                                                fill="url(#paint0_linear_59_969)" />
                                            <path
                                                d="M37.52 33.49H34.16L33.53 19.99H38.12L37.52 33.49ZM35.84 40.3C34.52 40.3 33.44 39.19 33.44 37.9C33.44 36.58 34.52 35.47 35.84 35.47C37.16 35.47 38.27 36.58 38.27 37.9C38.27 39.19 37.16 40.3 35.84 40.3Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <filter id="filter0_d_59_969" x="0" y="0" width="72"
                                                height="72" filterUnits="userSpaceOnUse"
                                                color-interpolation-filters="sRGB">
                                                <feflood flood-opacity="0" result="BackgroundImageFix" />
                                                <fecolormatrix in="SourceAlpha" type="matrix"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <femorphology radius="9" operator="erode" in="SourceAlpha"
                                                    result="effect1_dropShadow_59_969" />
                                                <feoffset dy="5" />
                                                <fegaussianblur stdDeviation="10" />
                                                <fecomposite in2="hardAlpha" operator="out" />
                                                <fecolormatrix type="matrix"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 1 0" />
                                                <feblend mode="normal" in2="BackgroundImageFix"
                                                    result="effect1_dropShadow_59_969" />
                                                <feblend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_59_969"
                                                    result="shape" />
                                            </filter>
                                            <lineargradient id="paint0_linear_59_969" x1="61" y1="6"
                                                x2="0.908193" y2="35.3087" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#B721FF" />
                                                <stop offset="1" stop-color="#21D4FD" />
                                            </lineargradient>
                                        </defs>
                                    </svg>
                                    <span>гарантия 12 месяцев</span>
                                </div>
                                <img class="b-img" itemprop="image" src="/images/upload/{{ $repairSubCategory->image }}">
                                <div class="priceRow__cost mobile">
                                    <b>Стоимость:</b> {{ $service->min_price }}
                                </div>
                                <div class="time-repair">
                                    Время ремонта: <span>{{ $service->min_time }}</span>
                                </div>
                            </div>
                            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                <meta itemprop="price" content="4700.00">
                                <link itemprop="availability" href="http://schema.org/InStock">
                                <meta itemprop="priceCurrency" content="RUB">
                                <meta itemprop="model" content="Кофемашина">
                                <meta itemprop="description"
                                    content="Диагностика у кофемашин со срочным выездом на дом или офис в Москве всего от 4700 рублей. Бесплатная диагностика за 30 минут - даже при отказе от ремонта. Среднее время ремонта - 2 часа. Гарантия на ремонт и запчасти - до 3-х лет.">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainAdvs mainAdvs__mini flex">
                    <div class="mainAdvs-item">
                        <div class="maTitle">Удобное расположение в центре города</div>
                        <img src="/images/ad-1.png" class="maImg">
                    </div>
                    <div class="mainAdvs-item">
                        <div class="maTitle">Бесплатная диагностика вашего устройства</div>
                        <img src="/images/ad-2.png" class="maImg">
                    </div>
                    <div class="mainAdvs-item">
                        <div class="maTitle">Только качественные детали и запчасти</div>
                        <img src="/images/ad-3.png" class="maImg">
                    </div>
                    <div class="mainAdvs-item">
                        <div class="maTitle">Выгодный ремонт с гарантией</div>
                        <img src="/images/ad-4.png" class="maImg">
                    </div>
                </div>

                <div class="warning-banner" id="special-bnr">
                    <div class="warning-banner__media">
                        <figure>
                            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-src="/public/img/objects/first-sale.png" class="warning-banner__image lazy"
                                loading="lazy">
                        </figure>
                    </div>
                    <div class="warning-banner__content">
                        <div class="warning-banner__title h3">Получите скидку -25% на первые ремонтные работы!</div>
                        <div class="warning-banner__text">Первый раз в нашем центре? <span
                                class="warning-banner__text-label js-open-modal" data-modal="2">Получите скидку
                                25%</span> на все услуги, записавшись на ремонт через сайт!</div>
                    </div>
                </div>

                <div class="category-price-section" id="type-price">
                    <h2 class="catalog-h2">Цены на ремонт</h2>
                    <div class="repair-wrapper" itemscope itemtype="http://schema.org/Service">
                        <div class="worksTable worksTable--closed">
                            <div class="tableHeading">
                                <div class="headCol clm-1">Вид ремонтных работ</div>
                                <div class="headCol clm-2 col-mob-hide">Стоимость</div>
                                <div class="headCol clm-3">Время</div>
                                <div class="headCol clm-4"></div>
                            </div>
                            <div class="tableBody" itemprop="offers" itemscope
                                itemtype="http://schema.org/AggregateOffer">

                                @foreach ($repairSubCategory->service as $service)
                                    <div class="contentRow" itemprop="offers" itemscope
                                        itemtype="http://schema.org/Offer">
                                        <div class="itemCol clm-1">
                                            <div class="fix-title fix-width" rel="bookmark">
                                                <a
                                                    href="{{ route('sub_category.service.show', ['slug_sub_category' => $repairSubCategory->slug, 'slug_service' => $service->slug]) }}">
                                                    <span itemprop="name">{{ $service->name }}</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="itemCol clm-2 col-mob-hide">
                                            <div class="price-cost price-cost--free">{{ $service->min_price }}</div>
                                        </div>
                                        <div class="itemCol clm-3">
                                            <div class itemprop="price">{{ $service->min_time }}</div>
                                        </div>
                                        <div class="itemCol clm-4">
                                            <button class="get-table js-open-modal" data-modal="2">Заказать</button>
                                        </div>
                                    </div>
                                @endforeach



                            </div>
                            <style>
                                .price-cost:not(.price-cost--free)::after {
                                    content: ' руб.';
                                }
                            </style>

                            <div class="worksTable__footer">

                                <!--button class="worksTable__footer__showmore">Показать прайс полностью</!--button-->

                                <div class="worksTable__footer__updated">Цены обновлены <span
                                        class="worksTable__footer__updated--dashed">22 августа </span></div>
                                <img src="/fonts/payment.svg" class="worksTable__footer__payment">
                                <img src="/fonts/credit.svg" class="worksTable__footer__credit">
                            </div>
                        </div>
                    </div>
                </div>



                <div class="reviewsSection">
                    @if (!empty($repairSubCategory->review))
                        <div class="container">
                            <h2 class="titleH2">Отзывы о нас</h2>
                            <div class="reviews-wrapper">
                                <div class="reviews-container pc__vers" id="reviews-block">
                                    @foreach ($repairSubCategory->review as $rewiew)
                                        <div class="restyling-review">
                                            <div class="restyling-card">
                                                <div class="restyling-header">
                                                    <div>
                                                        <span>{{ $rewiew->user_name }}</span>
                                                    </div>
                                                    <div>
                                                        <img class="reviewAuthor__soc"
                                                            src="/images/upload/{{ $rewiew->name_image }}">
                                                    </div>
                                                </div>
                                                <div class="reviewContent">
                                                    {!! $rewiew->comment !!}
                                                </div>
                                                <div class="load-text">
                                                    <button></button>
                                                </div>
                                                <div class="date">
                                                    <ul class="rating">
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                    </ul>
                                                    <div><strong>Дата:</strong> {{ $rewiew->date }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>



                                <div class="swiper mobile__vers swiper__mobile">
                                    <div class="swiper-wrapper">

                                        @foreach ($repairSubCategory->review as $rewiew)
                                            <div class="swiper-slide">
                                                <div class="restyling-card">
                                                    <div class="restyling-header">
                                                        <div>
                                                            <span>{{ $rewiew->user_name }}</span>
                                                        </div>
                                                        <div>
                                                            <img class="reviewAuthor__soc"
                                                                src="/images/upload/{{ $rewiew->name_image }}">
                                                        </div>
                                                    </div>
                                                    <div class="reviewContent">
                                                        {!! $rewiew->comment !!}
                                                    </div>
                                                    <div class="load-text">
                                                        <button></button>
                                                    </div>
                                                    <div class="date">
                                                        <ul class="rating">
                                                            <li></li>
                                                            <li></li>
                                                            <li></li>
                                                            <li></li>
                                                            <li></li>
                                                        </ul>
                                                        <div><strong>Дата:</strong> {{ $rewiew->date }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <!-- If we need pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <br><br>

                @include('form.form_bottom_question')
            </div>





            <div class="next-part">
                <div class="map">
                    <!-- <span id="map"> -->

                    <!-- </span> -->
                </div>
            </div>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script>
        $('.title-list img').each(function() {
            $(this).attr('src', $(this).attr('src').replace("/public/img/icons", "/images"));
        });
    </script>
@endsection

@section('description', $service->seo_description)
@section('keywords', $service->seo_keywords)
@section('title', $service->seo_title)
