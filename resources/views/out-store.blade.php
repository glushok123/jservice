@extends('layouts.app')

@section('content')

<main class="pageWrapper">

    <!-- Style CSS and Script JS -->

    <!-- ---- -->

    <!-- **** -->

    <div class="inside-page our-sklad">
        <div class="container">
            <div class="breadcrumbs prod-breads">

                <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="/"
                            itemprop="item"><span itemprop="name">🛠 Сервис-центр JSERVICE</span></a><span
                            class="divider">/</span>
                        <meta itemprop="position" content="1">
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span span
                            itemprop="name">Наш склад</span>
                        <meta itemprop="position" content="2">
                    </li>
                </ol>
            </div>
            <h1 class="heading__title">О нашем складе</h1>
            <div class="d-flex">
                <div class="col-md-7 gal-left-part">
                    <p class="regularPargaraph">Мы понимаем, что быстрый и эффективный ремонт техники невозможен без доступа к широкому ассортименту высококачественных запчастей и компонентов. Наш склад запчастей - это не просто хранилище, это фундамент нашей способности обеспечивать вас надежными решениями для ремонта мобильной и бытовой техники.</p>
                    <h2>1. Обширный ассортимент: </h2>
                    <p class="regularPargaraph">На складе представлены наиболее востребованные запчасти для ремонта мобильной и бытовой техники. Ассортимент нашего склада насчитывает более 5 000 наименований оригинальных и совместимых запчастей для ремонта техники ведущих производителей.
                    </p>
                    <h2>2. Оригинальные и высококачественные детали:  </h2>
                    <p class="regularPargaraph">Мы работаем напрямую с поставщиками и производителями, что позволяет поддерживать оптимальные цены и постоянно пополнять ассортимент.</p>
                    <h2>3. Сроки доставки: </h2>
                    <p class="regularPargaraph">Благодаря небольшой удаленности нашего склада от Сервисного центра, мы можем оперативно приступить к ремонту и сократить его время.</p>
                </div>
                <div class="col-md-5">
                    <div id="gallery-1" class="gallery galleryid-12 gallery-columns-2 gallery-size-full">

                        <a href="/public/img/objects/wqd.jpg">
                            <figure class="gallery-item" itemscope itemtype="http://schema.org/ImageObject">
                                <div class="gallery-icon landscape">
                                    <meta itemprop="name"
                                        content="Наш сервисный центр специализируется на ремонте различной техники, успешно работая с 2016 года.">
                                    <img class="header-offer__img" src="images/wqd.jpg" itemprop="contentUrl">
                                    <meta itemprop="description"
                                        content="Отправьте заявку для получения бесплатной онлайн-консультации.">
                                </div>
                            </figure>
                        </a>

                        <a href="/public/img/objects/qwd.jpg">
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <img src="images/qwd.jpg" class="attachment-full size-full">
                                </div>
                            </figure>
                        </a>

                        <a href="/public/img/objects/gal-02.jpg">
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <img src="images/gal-02.jpg" class="attachment-full size-full">
                                </div>
                            </figure>
                        </a>

                        <a href="/public/img/objects/gal-01.jpg">
                            <figure class="gallery-item">
                                <div class="gallery-icon landscape">
                                    <img src="images/gal-01.jpg" class="attachment-full size-full">
                                </div>
                            </figure>
                        </a>

                    </div>

                </div>
            </div>
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


    <script src="js/lightgallery.min.js"></script>
</main>

@endsection

@section('description', 'АСЦ — Срочный ремонт техники в Москве с бесплатной диагностикой ✅ Гарантия до 3 лет. ✅ Получите
скидку 25% при первом обращении!')
@section('keywords', 'ASC-Рем-Сервис, Сервис центр по срочному ремонту')
@section('title', 'Cервисный центр по ремонту цифровой техники в Москве 🚀 Федеральная сеть сервис центров ASC')