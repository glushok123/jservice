@extends('layouts.app')

@section('content')

<main class="pageWrapper">

<div class="inside-page ">
    <div class="container">
        <div class="breadcrumbs prod-breads">

            <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="/"
                        itemprop="item"><span itemprop="name">🛠 Сервис-центр JSERVICE</span></a><span
                        class="divider">/</span>
                    <meta itemprop="position" content="1">
                </li>
                <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span span
                        itemprop="name">Гарантия сервиса</span>
                    <meta itemprop="position" content="2">
                </li>
            </ol>
        </div>
        <h1 class="heading__title">Гарантия на запчасти и работу</h1>
        <p>Наша цель - обеспечить вас надежным и качественным обслуживанием. Поэтому мы с уверенностью можем дать вам следующие виды гарантий:</p>
        <div class="d-flex varrInfo">
            <div class="col-md-7">
                <h2 class="abt-ltl-ttl odd-title"><span>1</span> Гарантия на произведенные работы:</h2>
                <p class="regularPargaraph">Мы верим в качество нашей работы и поэтому предоставляем гарантию на все ремонтные работы, выполненные в нашем Сервисном центре. Если у вас возникнут проблемы, связанные с оказанной услугой, мы обязуемся бесплатно устранить их в рамках гарантийного периода. </p>
                <h2 class="abt-ltl-ttl odd-title"><span>2</span> Гарантия на запчасти и детали: </h2>
                <p class="regularPargaraph">Для нас важно, чтобы ваша техника служила вам надежно. Мы предоставляем гарантию на все установленные запчасти и детали. Срок гарантии может варьироваться в зависимости от типа ремонта и используемых компонентов, но, как правило, он составляет не менее 6 месяцев. Если какие-либо установленные детали дадут сбой или будут иметь дефекты, мы заменим их бесплатно.</p>
                <h2 class="abt-ltl-ttl odd-title odd-title-last"><span>3</span> Оригинальные детали и высококачественные аналоги: </h2>
                <p class="regularPargaraph">В JService мы всегда стараемся использовать оригинальные запчасти от производителей. Если оригинальные детали недоступны, мы используем только высококачественные аналоги, которые соответствуют самым высоким стандартам. Все детали, которые мы используем, проходят строгий контроль качества. Установка аналоговых запчастей всегда согласуются с вами до начала ремонта.
                </p>
                <h2 class="abt-ltl-ttl odd-title odd-title-last"><span>4</span> Прозрачная и справедливая политика: </h2>
                <p class="regularPargaraph">Мы ценим ваше доверие и стремимся к прозрачным и справедливым отношениям. Мы всегда предоставляем подробную оценку стоимости ремонта до начала работ, и вы можете быть уверены, что не столкнетесь со скрытыми или непредвиденными расходами.
                </p>
                <p></p>
            </div>
            <div class="col-md-5" itemscope itemtype="http://schema.org/ImageObject">
                <meta itemprop="name" content="Гарантия на ремонт в ASC-Service">
                <img src="images/service-man-01.png" class="varrMan" itemprop="contentUrl">
                <meta itemprop="description"
                    content="Устраним поломку, если возникнет в гарантийный период бесплатно">
            </div>
            <p></p>
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

@section('description', 'ASC-Service — сервисный центр осуществляет ремонт любой техники c гарантией до 3-х лет ✅ Устраним поломку, если возникнет в гарантийный период бесплатно. В предоставляемую гарантию входит послеремонтное обслуживание вашей техники.')
@section('keywords', 'гарантия на ремонт, ASC-Service — сервисный центр')
@section('title', 'Гарантия ASC-Service — сервисный центр по ремонту техники в Москве')