@extends('layouts.app')

@section('content')
<main class="pageWrapper">

    <div class="inside-page page-news">
        <div class="container">
            <div class="breadcrumbs prod-breads">

                <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="/"
                            itemprop="item"><span itemprop="name">🛠 Сервис-центр JSERVICE</span></a><span
                            class="divider">/</span>
                        <meta itemprop="position" content="1">
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span span
                            itemprop="name">Акции</span>
                        <meta itemprop="position" content="2">
                    </li>
                </ol>
            </div>

            <h1 class="heading__title">Акции сервисного центра</h1>

            <section class="salesSection" id="anchor-stock">
                <div class="container">

                    @include('sales.template')

                </div>
            </section>

            <div class="archiveEndform">
                <div class="lastForm">
                    <div class="lf-content">
                        <div class="lfTitle">Оставьте заявку на ремонт</div>
                        <p class="lfText">Мы выполним ремонт любой степени сложности, работоспособность ваших
                            устройств будет восстановлена грамотными сервисными инженерами в максимально
                            короткие сроки.</p>
                        <form>
                            <input type="text" inputmode="tel" name="phone" class="msPhone"
                                placeholder="+7 (9__) ___-__-__">
                            <input type="submit" value="Отправить заявку" class="msSubmit" disabled="disabled">
                        </form>
                        <div class="success"></div>
                        <p class="confrm form-mt-s">Отправляя данную форму, Вы соглашаетесь с <a
                                href="/privacy-policy">политикой конфиденциальности</a> нашего сайта</p>
                    </div>
                    <img src="images/endform.png" class="enPhoneImg">
                </div>

            </div>
        </div>
    </div>

    <div class="next-part">
        <div class="map">
            <!-- <span id="map"> -->

            <!-- </span> -->
        </div>
    </div>

</main>

@endsection

@section('description', 'АСЦ — Срочный ремонт техники в Москве с бесплатной диагностикой ✅ Гарантия до 3 лет. ✅ Получите
скидку 25% при первом обращении!')
@section('keywords', 'Акции на ремонт')
@section('title', 'Акции — специализированный сервисный центр в Москве')