@extends('layouts.app')

@section('content')
<main class="pageWrapper">

<div class="archiveWrapper pageCat">
    <div class="container">
        <div class="breadcrumbs prod-breads">

            <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="/"
                        itemprop="item"><span itemprop="name">🛠 Сервис-центр JSERVICE</span></a><span
                        class="divider">/</span>
                    <meta itemprop="position" content="1">
                </li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span
                        itemprop="name">{{ $repairCategory->name }}</span>
                    <meta itemprop="position" content="2">
                </li>
            </ol>
        </div>
        <div class="offer-part brand-offer">
            <div class="catalog-heading brands-heading">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="catalog-heading__title brands-heading__title">{{ $repairCategory->title }}</h1>
                        <div class="offer-part__info">
                            <div class="offer-part__item ruble">
                                <div class="offer-part__item-icon">
                                    <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="10" stroke="white"
                                            stroke-width="1.5" />
                                        <path d="M9 14H12" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path
                                            d="M10 12V8.2C10 8.0142 10 7.9213 10.0123 7.84357C10.0801 7.41567 10.4157 7.08008 10.8436 7.01231C10.9213 7 11.0142 7 11.2 7H13.5C14.8807 7 16 8.11929 16 9.5C16 10.8807 14.8807 12 13.5 12H10ZM10 12V17M10 12H9"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </div>
                                <div class="offer-part__item-label">Стоимость:</div>
                                <div class="offer-part__item-text">{{ $repairCategory->min_price }}</div>
                            </div>
                            <div class="offer-part__item">
                                <div class="offer-part__item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" height="37"
                                        fill="var(--violet)">
                                        <path
                                            d="M11 40.485V47H7v2h36v-2h-4v-6.515a6.954 6.954 0 0 0-2.051-4.95L26.414 25l10.535-10.535A6.955 6.955 0 0 0 39 9.515V3h4V1H7v2h4v6.515c0 1.871.729 3.628 2.051 4.95L23.586 25 13.051 35.535A6.955 6.955 0 0 0 11 40.485zm3.465-27.435A4.967 4.967 0 0 1 13 9.515V3h24v6.515a4.969 4.969 0 0 1-1.465 3.536L25 23.586 14.465 13.05zM25 26.414 35.535 36.95A4.967 4.967 0 0 1 37 40.485V47H13v-6.515c0-1.336.521-2.592 1.465-3.536L25 26.414z" />
                                    </svg>
                                </div>
                                <div class="offer-part__item-label">Время ремонта:</div>
                                <div class="offer-part__item-text">{{ $repairCategory->min_time }}</div>
                            </div>
                            <div class="offer-part__item offer-part__item-price">
                                <div class="offer-part__item-icon">
                                    <svg width="50" height="50" viewBox="0 0 50 50" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M24.8905 31.0199C28.2757 31.0199 31.0199 28.2757 31.0199 24.8905C31.0199 21.5054 28.2757 18.7612 24.8905 18.7612C21.5054 18.7612 18.7612 21.5054 18.7612 24.8905C18.7612 28.2757 21.5054 31.0199 24.8905 31.0199Z"
                                            stroke="var(--violet)" stroke-width="2.18905"
                                            stroke-miterlimit="10" />
                                        <path
                                            d="M47 27.7363V22.2637L40.2139 20.2935C39.995 19.4179 39.5572 18.5423 39.1194 17.6667L42.6219 11.3184L38.6816 7.37811L32.3333 10.8806C31.4577 10.4428 30.5821 10.2239 29.7065 9.78607L27.7363 3H22.2637L20.2935 9.78607C19.4179 10.005 18.5423 10.4428 17.6667 10.8806L11.3184 7.37811L7.37811 11.3184L10.8806 17.6667C10.4428 18.5423 10.005 19.4179 9.78607 20.2935L3 22.2637V27.7363L9.78607 29.7065C10.005 30.5821 10.4428 31.4577 10.8806 32.3333L7.37811 38.4627L11.3184 42.403L17.4478 38.9005C18.3234 39.3383 19.199 39.7761 20.0746 39.995L22.0448 46.7811H27.5174L29.4876 39.995C30.3632 39.7761 31.2388 39.3383 32.1144 38.9005L38.2438 42.403L42.1841 38.4627L38.9005 32.3333C39.3383 31.4577 39.7761 30.5821 39.995 29.7065L47 27.7363Z"
                                            stroke="var(--violet)" stroke-width="2.18905"
                                            stroke-miterlimit="10" />
                                    </svg>
                                </div>
                                <div class="offer-part__item-label">Диагностика:</div>
                                <div class="offer-part__item-text">бесплатно</div>
                            </div>
                        </div>
                        <div class="offer-part__text">
                            {!! $repairCategory->description !!}
                        </div>
                        <div class="offer-part__contacts">
                            <div class="offer-part__phone">
                                <div class="offer-part__phone-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" height="24"
                                        fill="var(--violet)">
                                        <path
                                            d="M23.45 20.93a3 3 0 0 0-4.25 0l-1.45 1.45a26.14 26.14 0 0 1-4.51-3.62 26.62 26.62 0 0 1-3.62-4.51l1.45-1.45a3 3 0 0 0 0-4.25L8.24 5.73a2.93 2.93 0 0 0-2.11-.88h0A3 3 0 0 0 4 5.73L2.64 7.08A6.37 6.37 0 0 0 1 12.33c.32 3.75 2.78 8.26 6.57 12.06S15.92 30.64 19.67 31a7.87 7.87 0 0 0 .84 0 6.07 6.07 0 0 0 4.41-1.64L26.27 28a3 3 0 0 0 .88-2.13 2.93 2.93 0 0 0-.88-2.11zm1.41 5.66L23.5 27.94a4.57 4.57 0 0 1-3.66 1c-3.25-.28-7.39-2.58-10.81-6S3.31 15.41 3 12.16a4.53 4.53 0 0 1 1-3.66L5.41 7.14a1 1 0 0 1 .71-.29h0a1 1 0 0 1 .71.29L9.66 10a1 1 0 0 1 0 1.41l-2 2a1 1 0 0 0-.16 1.21 27.49 27.49 0 0 0 4.33 5.58 27.49 27.49 0 0 0 5.58 4.33 1 1 0 0 0 1.21-.16l2-2a1 1 0 0 1 1.41 0l2.83 2.83h0a1 1 0 0 1 .29.71A1 1 0 0 1 24.86 26.59zM26.6 5.39A14.92 14.92 0 0 0 16 1a1 1 0 1 0 0 2A13 13 0 0 1 29 16.11a1 1 0 0 0 1 1h0a1 1 0 0 0 1-1A14.91 14.91 0 0 0 26.6 5.39z" />
                                        <path
                                            d="M20.91,11.11a6,6,0,0,1,1.77,4.31,1,1,0,0,0,1,1h0a1,1,0,0,0,1-1,8,8,0,0,0-8-8.1,1,1,0,1,0,0,2A6,6,0,0,1,20.91,11.11Z" />
                                    </svg>
                                </div>
                                <div class="offer-part__phone-content">
                                    <div class="offer-part__phone-label">Горячая линия:</div>
                                    <a class="offer-part__phone-number" href="tel:+74951625317">+7 (495)
                                        162-53-17</a>
                                </div>
                            </div>
                            <button class="primary-button offer-part__cb js-open-modal"
                                data-modal="2">Оставить заявку</button>
                        </div>
                    </div>
                    <div class="col-md-6" itemscope itemtype="http://schema.org/ImageObject">
                        <meta itemprop="name" content="Ремонт ">
                        <img class="b-img" itemprop="image" src="/images/upload/{{ $repairCategory->image }}">
                        <meta itemprop="description"
                            content="Наша компания профессионально ремонтирует цифровую и компьютерную технику">
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

        </div>


        <section class="productCategories-section">
            <div class="container">
                <h2 class="titleH2">Ремонтируем</h2>
                <div class="mainCategoriesList-wrapper">
                    @foreach ($repairCategory->sub_category as $sub_category)
                        <div class="mainCategoriesList-wrapper__item">
                            <a href="{{ route('sub_category.show', ['slug_sub_category' => $sub_category->slug]) }}">
                                <img src="/images/upload/{{ $sub_category->small_image}}">
                                <h3 class="mainCategoriesList__title">{{ $sub_category->name }}</h3>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>




        <div class="category-price-section" id="type-price">
            <h2 class="catalog-h2">Цены на ремонт</h2>
            <div class="repair-wrapper" itemscope itemtype="http://schema.org/Service">

                @foreach ($repairCategory->sub_category as $sub_category)
                    <div class="title-table">{{ $sub_category->name }}</div>
                    <div class="worksTable worksTable--closed">
                        <div class="tableHeading">
                            <div class="headCol clm-1">Вид ремонтных работ</div>
                            <div class="headCol clm-2 col-mob-hide">Стоимость</div>
                            <div class="headCol clm-3">Время</div>
                            <div class="headCol clm-4"></div>
                        </div>
                        <div class="tableBody" itemprop="offers" itemscope
                        itemtype="http://schema.org/AggregateOffer">

                        @foreach ($sub_category->service as $service)
                            <div class="contentRow" itemprop="offers" itemscope
                                itemtype="http://schema.org/Offer">
                                <div class="itemCol clm-1">
                                    <div class="fix-title fix-width" rel="bookmark">
                                        <a href="{{ route('sub_category.service.show', ['slug_sub_category' => $sub_category->slug, 'slug_service' => $service->slug]) }}">
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
                        <div class="worksTable__footer__updated">Цены обновлены <span
                                class="worksTable__footer__updated--dashed">21 августа </span></div>
                        <img src="/fonts/payment.svg" class="worksTable__footer__payment">
                        <img src="/fonts/credit.svg" class="worksTable__footer__credit">
                    </div>
                </div>
                @endforeach
            </div>
        </div>



        <div class="reviewsSection">
            <div class="container">
                <h2 class="titleH2">Отзывы о нас</h2>
                <div class="reviews-wrapper">
                    <div class="reviews-container pc__vers" id="reviews-block">

                        @foreach ($repairCategory->review as $rewiew)
                            <div class="restyling-review">
                                <div class="restyling-card">
                                    <div class="restyling-header">
                                        <div>
                                            <span>{{ $rewiew->user_name }}</span>
                                        </div>
                                        <div>
                                            <img class="reviewAuthor__soc" src="/images/upload/{{ $rewiew->name_image }}">
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

                            @foreach ($repairCategory->review as $rewiew)
                            <div class="swiper-slide">
                                <div class="restyling-card">
                                    <div class="restyling-header">
                                        <div>
                                            <span>{{ $rewiew->user_name }}</span>
                                        </div>
                                        <div>
                                            <img class="reviewAuthor__soc" src="/images/upload/{{ $rewiew->name_image }}">
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
        </div>

        <div class="stepItem-section" id="steps-section">
            <div class="container">
                <ul class="adsList-ul">
                    <li>
                        <div class="adsItem">Оставьте заявку на ремонт</div>
                        <img src="/images/step-01.png">
                        <div class="circle"></div>
                    </li>
                    <li>
                        <div class="adsItem">Менеджер рассчитает стоимость</div>
                        <img src="/images/step-02.png">
                        <div class="circle"></div>
                    </li>
                    <li>
                        <div class="adsItem">Вы сдадите устройство сами/курьером</div>
                        <img src="/images/step-03.png">
                        <div class="circle"></div>
                    </li>
                    <li>
                        <div class="adsItem">Мастер выполнит диагностику</div>
                        <img src="/images/step-04.png">
                        <div class="circle"></div>
                    </li>
                    <li>
                        <div class="adsItem">Получит согласие на ремонт</div>
                        <img src="/images/step-05.png">
                        <div class="circle"></div>
                    </li>
                    <li>
                        <div class="adsItem">Ваше устройство исправно!</div>
                        <img src="/images/step-06.png">
                        <div class="circle"></div>
                    </li>
                </ul>
            </div>
        </div>

        @include('form.form_bottom_order')

    </div>

    <div class="next-part">
        <div class="map">
            <!-- <span id="map"> -->

            <!-- </span> -->
        </div>
    </div>
</div>
</main>

@endsection

@section('description', $repairCategory->seo_description )
@section('keywords', $repairCategory->seo_keywords)
@section('title', $repairCategory->seo_title)