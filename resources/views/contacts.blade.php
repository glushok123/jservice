@extends('layouts.app')

@section('content')
<main class="pageWrapper">
			<div class="inside-page contacts-page">
				<div class="container">
					<div class="breadcrumbs prod-breads">

						<ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
							<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="/"
									itemprop="item"><span itemprop="name">🛠 Сервис-центр JSERVICE</span></a><span
									class="divider">/</span>
								<meta itemprop="position" content="1">
							</li>
							<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span span
									itemprop="name">Контакты</span>
								<meta itemprop="position" content="2">
							</li>
						</ol>
					</div>
					<h1 class="heading__title">Контакты</h1>
					<div class="contactContent" itemscope itemtype="http://schema.org/Organization">
						<span class="contacts-block__servicename" itemprop="name"
							style="font-size: 0">JSERVICE</span>
						<div class="prev-part">
							<ul class="listContacts">
								<li class="adressMain" itemprop="address" itemscope
									itemtype="//schema.org/PostalAddress">
									<img src="fonts/map-pin.svg">
									<div class="c-row">
										<span class="adressTitle" itemprop="addressLocality">г. Москва, Шверника, 1к1</span>
										<p>Офис сервисного центра</p>
										<a class="domain-name" itemprop="url" ></a>
									</div>
								</li>
								<li class="phoneCont halfRow">
									<img src="fonts/phone-ic.svg">
									<div class="c-row">
										<div class="contactItem">
											<a class="phoneCont" href="tel:+74951625317"><span itemprop="telephone">+7 (909) 163-64-57</span></a>
										</div>
										<span>горячая линия</span>
									</div>
								</li>
								<li class="clocksWork">
									<img src="fonts/time-ic.svg">
									<div class="c-row">
										<div>ежедневно с 10:00 до 20:00</div>
										<p class="works-desc">Приём заказов, онлайн и телефонные консультации, часы
											работы офиса</p>
									</div>
								</li>
							</ul>
						</div>

						<div class="next-part">
							<div class="map">
								<!-- <span id="map"> -->

								<!-- </span> -->
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
		</main>

@endsection

@section('description', 'JSERVICE — Срочный ремонт техники в Москве с бесплатной диагностикой  ✅ Гарантия до 3 лет. ✅ Получите скидку 25% при первом обращении!')
@section('keywords', 'JSERVICE, Сервис центр по срочному ремонту')
@section('title', 'Cервисный центр по ремонту цифровой техники в Москве 🚀 Федеральная сеть сервис центров JSERVICE')