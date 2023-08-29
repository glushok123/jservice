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
                        itemprop="name">Новости сервиса</span>
                    <meta itemprop="position" content="2">
                </li>
            </ol>
        </div>

        <h1 class="heading__title">Новости сервиса</h1>

        <div class="d-flex varrInfo">



            <section class="salesSection" id="newsCard">
                <div class="container">


                    <div class="salesWrapper">



                        <!-- // Вывод карточки новости на странице НОВОСТИ -->

                        <div class="newsCard">
                            <img src="images/63bea9e9b5fcf-e0a81b54643c363ad99a485b98f22457.webp"
                                class="newsCard-bg ">
                            <article itemtype="https://schema.org/BlogPosting" itemscope="itemscope">
                                <h3>Несколько неочевидных преимуществ диагностики</h3>
                                <p></p>
                                <p>Бытовая техника и электроника – неотъемлемая часть нашей жизни. Благодаря
                                    современным устройствам значительно упрощается и ускоряется решение
                                    повседневных задач, однако даже самые высокотехнологичные устройства от
                                    именитых производителей не зас...</p>
                                <a href="/news/ura-novyy-sayt">Подробнее</a>
                            </article>
                        </div>



                    </div>


                </div>
            </section>


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

</main>

@endsection

@section('description', 'Подборка новостей и полезных статей от ✅ASC-Service — сервисного центра по ремонту более 50 типов техник ✅ Задавайте вопросы в комментариях')
@section('keywords', 'Новости - специализированный сервисный центр')
@section('title', 'Новости ASC-Service — сервисный центр по ремонту техники в Москве')