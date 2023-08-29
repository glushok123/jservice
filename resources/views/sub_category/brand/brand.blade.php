@extends('layouts.app')

@section('content')

<main class="pageWrapper">
			<div class="archiveWrapper">
				<div class="container">
					<div class="breadcrumbs prod-breads">

						<ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
							<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="/"
									itemprop="item"><span itemprop="name">🛠 Сервис-центр JSERVICE</span></a><span
									class="divider">/</span>
								<meta itemprop="position" content="1">
							</li>
							<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span 
									itemprop="name">{{ str_replace(' в Москве', '', $repairSubCategory->title) }}</span>
								<meta itemprop="position" content="2"><span
                                class="divider">/</span>
							</li>
                            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span 
                                itemprop="name">{{ $brandActive->name }}</span>
                            <meta itemprop="position" content="3">
                            </li>
						</ol>
					</div>
					<div class="offer-part brand-offer">
						<div class="catalog-heading brands-heading">
							<div class="row">
								<div class="col-md-6">
									<h1 class="catalog-heading__title brands-heading__title">{{  str_replace('в Москве', $brandActive->name . ' в Москве', $repairSubCategory->title) }}</h1>
									<div class="offer-part__info">


										<div class="offer-part__item ruble">
											<div class="offer-part__item-icon">
												<svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<circle cx="12" cy="12" r="10" stroke="#1C274C"
														stroke-width="1.5" />
													<path d="M9 14H12" stroke="#1C274C" stroke-width="1.5"
														stroke-linecap="round" />
													<path
														d="M10 12V8.2C10 8.0142 10 7.9213 10.0123 7.84357C10.0801 7.41567 10.4157 7.08008 10.8436 7.01231C10.9213 7 11.0142 7 11.2 7H13.5C14.8807 7 16 8.11929 16 9.5C16 10.8807 14.8807 12 13.5 12H10ZM10 12V17M10 12H9"
														stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" />
												</svg>
											</div>
											<div class="offer-part__item-label">Стоимость:</div>
											<div class="offer-part__item-text">{{ $repairSubCategory->min_price }}</div>
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
											<div class="offer-part__item-text">{{ $repairSubCategory->min_time }}</div>
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
                                        {!! str_replace('BRAND_NAME', $brandActive->name, $repairSubCategory->template_description_brand) !!}
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
									<meta itemprop="name" content="Ремонт ноутбуков">
									<img class="b-img" itemprop="image"
										src="/images/upload/{{ $repairSubCategory->image }}">
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
					<div class="warning-banner" id="special-bnr">
						<div class="warning-banner__media">
							<img src="/images/delivery-gift.png" class="warning-banner__image">
						</div>
						<div class="warning-banner__content">
							<div class="warning-banner__title h3">Специальное предложение -25% на весь прайс!</div>
							<div class="warning-banner__text">Запишитесь на ремонт через наш сайт и <span
									class="warning-banner__text-label js-open-modal" data-modal="2">получите скидку
									25%</span> на все услуги без ожиданий и переплат!</div>
						</div>
					</div>

					<!-- Если прайса нет, то блок непоказывается -->


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
                                                    <a href="{{ route('sub_category.service.show', ['slug_sub_category' => $repairSubCategory->slug, 'slug_service' => $service->slug]) }}">
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


					<!-- /* Если прайса нет, то блок непоказывается -->

					<script>
						(function (t, p) {
							window.Marquiz ? Marquiz.add([t, p]) : document.addEventListener('marquizLoaded', function () {
								Marquiz.add([t, p])
							})
						})('Widget', {
							id: '64217dbe283e820025cf243b',
							position: 'right',
							delay: 10,
							autoOpen: 5
						})
					</script>
					<div id="photogallery">
						<div class="warning-banner" id="gallery-bnr">
							<div class="warning-banner__media">
								<img src="/images/engineer.png" class="warning-banner__image">
							</div>
							<div class="warning-banner__content">
								<h2 class="warning-banner__title h3">Фотогалерея работ</h2>
							</div>
						</div>
						<div class="gallery-block">
                            @foreach ($repairSubCategory->image_gallery as $image)
                                <div class="gallery-block__item">
                                    <img src="/images/upload/{{ $image->name }}">
                                </div>
                            @endforeach
						</div>
					</div>
				</div>


				<div class="brands-section">
					<div class="container">
						<h2 class="catalog-h2 123">Ремонт любых производителей</h2>
						<div class="brand-items showBrands">

	
							@foreach ($brands as $brand)
								<div itemscope itemtype="http://schema.org/ImageObject" class="brand-item">
									<a class="brand-items__item" href="{{ route('sub_category.brand.show', ['slug_sub_category' => $repairSubCategory->slug, 'slug_brand' => $brand->slug]) }}" rel="nofollow">
										<img itemprop="image" src="/images/upload/{{ $brand->image }}"
											alt="ремонт {{ $brand->name }}">
									</a>
								</div>
							@endforeach


						</div>

						<a class="moreBrands-defoult"></a>
					</div>
				</div>

				<div id="faq-section">
					<div class="container">
						<h2 class="catalog-h2 mb-42">Часто спрашивают</h2>

						<div class="faq__group">

							<!-- Блок с карточками - FAQ -->

                            @foreach ($repairSubCategory->question as $question)
							<div class="faq__item js-faq-item ">
								<div class="faq__item-group">
									<div class="faq__item-content">
										<div class="faq__item-question js-question">
											<h3>{{ $question->question }} </h3>
										</div>
										<div class="faq__item-ask js-ask" style>
                                            {!! $question->answer !!}
										</div>
									</div>
									<div class="faq__item-arrow js-arrow">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M19.5 9L12 16.5L4.5 9" stroke="#1C1B21" stroke-linecap="round"
												stroke-linejoin="round" />
										</svg>
									</div>
								</div>
							</div>
                            @endforeach



							<!-- /* Блок с карточками - FAQ */ -->

						</div>
					</div>
				</div>



				<div class="section-like">
					<div class="container">
						<h2 class="catalog-h2">Нам доверяют ремонт ноутбуков</h2>
						<div class="container-like">

							<div class="like-card">
								<div class="logo-like">
									<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path
											d="M12 1a9.002 9.002 0 0 0-6.366 15.362c1.63 1.63 5.466 3.988 5.693 6.465.034.37.303.673.673.673.37 0 .64-.303.673-.673.227-2.477 4.06-4.831 5.689-6.46A9.002 9.002 0 0 0 12 1z"
											fill="#F43" />
										<path d="M12 13.079a3.079 3.079 0 1 1 0-6.158 3.079 3.079 0 0 1 0 6.158z"
											fill="#fff" />
									</svg>
									<!-- <span>Яндекс</span> -->
								</div>
								<div>
									<div class="star-img-like"><img src="/images/starOn.png">4.9</div>

									<div>165 отзыв</div>

								</div>
							</div>

							<div class="like-card">
								<div class="logo-like">
									<svg xmlns="http://www.w3.org/2000/svg" width="162" height="69" fill="none">
										<mask id="a" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="22" y="18"
											width="34" height="33">
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M30.202 18.015L31.614 18l14.687.006c.223.002.362.005.5.009.728.019 1.463.061 2.183.19a7.41 7.41 0 0 1 2.075.676c.652.328 1.25.756 1.767 1.269a6.878 6.878 0 0 1 1.283 1.746c.34.657.553 1.33.684 2.052.13.712.173 1.438.192 2.158.01.33.014.66.015.991l.002.589v13.037c0 .392 0 .785-.002 1.178-.002.33-.005.66-.015.99-.02.72-.062 1.447-.192 2.158a7.202 7.202 0 0 1-.684 2.052 6.897 6.897 0 0 1-1.283 1.747 6.975 6.975 0 0 1-1.767 1.269 7.406 7.406 0 0 1-2.075.676c-.72.128-1.455.17-2.183.19L44.607 51l-13.906-.008a27.229 27.229 0 0 1-.499-.01c-.728-.018-1.463-.061-2.183-.189a7.405 7.405 0 0 1-2.074-.676 6.963 6.963 0 0 1-3.052-3.016 7.236 7.236 0 0 1-.684-2.052c-.13-.711-.172-1.438-.191-2.157-.01-.33-.013-.661-.015-.991L22 41.31V28.275c0-.392 0-.785.003-1.177.002-.33.006-.66.015-.991.02-.72.062-1.446.191-2.158a7.231 7.231 0 0 1 .684-2.052 6.95 6.95 0 0 1 3.051-3.016 7.409 7.409 0 0 1 2.075-.676c.72-.128 1.455-.17 2.183-.19z"
												fill="#fff" />
										</mask>
										<g mask="url(#a)">
											<path fill="#19AA1E" d="M22 17.998h33.003v33.003H22z" />
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M22 17.998h33.003v10.828L22 23.67v-5.672z" fill="#FFB919" />
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M22 47.39l33.003-5.156V51H22v-3.61z" fill="#82D714" />
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M22 23.018l11.52 1.8c1.434-.908 3.14-1.406 4.981-1.406 2.55 0 4.842.955 6.51 2.631.21.212.408.433.595.663l9.397 1.468v1.305l-8.443-1.32a8.472 8.472 0 0 1 .965 3.914c0 1.768-.395 3.531-1.213 5.301l-.024.054-.348.744h-.82c-1.696 0-2.82.507-3.556 1.406-.577.705-.911 1.657-1.023 2.695l-.004.032-.016.166-.007.072-.014.141c-.043.464-.071.857-.086 1.177l14.589-2.28v1.305L22 48.043v-1.305l14.605-2.282-.006-.293-.002-.082-.002-.043-.002-.065c-.013-.355-.046-.81-.098-1.362l-.01-.105-.018-.181c-.104-1.044-.433-2.007-1.01-2.723-.727-.905-1.84-1.42-3.523-1.43h-.872l-.347-.744c-.834-1.788-1.238-3.569-1.238-5.355 0-2.246.911-4.418 2.515-6.03l.14-.137L22 24.322v-1.304z"
												fill="#fff" />
											<path fill-rule="evenodd" clip-rule="evenodd"
												d="M38.501 24.701c4.608 0 7.735 3.546 7.735 7.372 0 1.536-.335 3.134-1.117 4.81-4.533 0-5.652 3.246-5.864 5.29l-.014.135c-.071.73-.113 1.315-.124 1.755l-1.228.192v-.04a23.516 23.516 0 0 0-.132-1.945l-.003-.036c-.196-2.039-1.291-5.351-5.87-5.351-.783-1.676-1.118-3.274-1.118-4.81 0-3.826 3.128-7.372 7.735-7.372z"
												fill="#0073FA" />
										</g>
										<path fill-rule="evenodd" clip-rule="evenodd"
											d="M70.864 24c-5.084 0-8.896 3.023-8.864 8.273h4.725c-.065-2.1 1.303-4.137 4.139-4.137 2.15 0 3.519 1.4 3.519 3.182 0 1.846-1.5 2.864-3.91 4.01-3.161 1.495-5.051 2.195-8.473 3.308v6.046h17.596v-4.137H68.387c1.633-.665 3.223-1.395 4.66-2.068 3.812-1.781 6.06-3.786 6.06-7.381 0-4.328-3.323-7.096-8.243-7.096zm15.901 4.454h9.124v-4.136H82.203v20.364h4.562V28.454zm16.293-4.136h-4.562v20.364h4.529l8.505-13.014v13.014h4.562V24.318h-4.562l-8.472 13.014V24.318zM139 37.045h-4.725c-.717 2.26-2.9 3.819-5.474 3.819-3.748 0-6.192-3.15-6.192-6.364s2.379-6.364 6.322-6.364c2.607 0 4.627 1.56 5.344 3.819H139c-.684-4.55-4.366-7.955-10.199-7.955-6.452 0-10.754 4.423-10.754 10.5S122.349 45 128.801 45c5.833 0 9.515-3.34 10.199-7.955z"
											fill="#262626" />
										<deepl-alert xmlns="" />
										<deepl-alert xmlns="" />
										<deepl-alert xmlns="" />
									</svg>
									<!-- <span>2гис</span> -->
								</div>
								<div>
									<div class="star-img-like"><img src="/images/starOn.png">4.8</div>
									<div>230 отзыв</div>
								</div>
							</div>

							<div class="like-card">
								<div class="logo-like">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="48px"
										height="48px">
										<path fill="#48b564"
											d="M35.76,26.36h0.01c0,0-3.77,5.53-6.94,9.64c-2.74,3.55-3.54,6.59-3.77,8.06	C24.97,44.6,24.53,45,24,45s-0.97-0.4-1.06-0.94c-0.23-1.47-1.03-4.51-3.77-8.06c-0.42-0.55-0.85-1.12-1.28-1.7L28.24,22l8.33-9.88	C37.49,14.05,38,16.21,38,18.5C38,21.4,37.17,24.09,35.76,26.36z" />
										<path fill="#fcc60e"
											d="M28.24,22L17.89,34.3c-2.82-3.78-5.66-7.94-5.66-7.94h0.01c-0.3-0.48-0.57-0.97-0.8-1.48L19.76,15	c-0.79,0.95-1.26,2.17-1.26,3.5c0,3.04,2.46,5.5,5.5,5.5C25.71,24,27.24,23.22,28.24,22z" />
										<path fill="#2c85eb"
											d="M28.4,4.74l-8.57,10.18L13.27,9.2C15.83,6.02,19.69,4,24,4C25.54,4,27.02,4.26,28.4,4.74z" />
										<path fill="#ed5748"
											d="M19.83,14.92L19.76,15l-8.32,9.88C10.52,22.95,10,20.79,10,18.5c0-3.54,1.23-6.79,3.27-9.3	L19.83,14.92z" />
										<path fill="#5695f6"
											d="M28.24,22c0.79-0.95,1.26-2.17,1.26-3.5c0-3.04-2.46-5.5-5.5-5.5c-1.71,0-3.24,0.78-4.24,2L28.4,4.74	c3.59,1.22,6.53,3.91,8.17,7.38L28.24,22z" />
									</svg>
									<!-- <span>Google</span> -->
								</div>
								<div>
									<div class="star-img-like"><img src="/images/starOn.png">4.9</div>
									<div>54 отзыв</div>
								</div>
							</div>

						</div>
					</div>
				</div>



				<div class="reviewsSection">
					<!--div class="container block-gallery-reviews">
						<div class="gallery-block" id="clients-gallery">
							<div class="gallery-block__item">
								<img src="/images/63aad51f937ac-7e31056dad9798e6cb01f03b13648b56.jpg">
							</div>
							<div class="gallery-block__item">
								<img src="/images/63aad50c5a9c1-e2ecb2d7613a6c2046afe2b6882d6f6a.jpg">
							</div>
							<div class="gallery-block__item">
								<img src="/images/63aad519e3434-da938f38970ad13e043cbfb2915efa2d.jpg">
							</div>
							<div class="gallery-block__item">
								<img src="/images/63aad516edf00-1838880bb04c5497ca867e505178d5ba.jpg">
							</div>
							<div class="gallery-block__item">
								<img src="/images/63aad512d3893-09b2a7cb80d99dbebc3ee8a92091a2d5.jpg">
							</div>
							<div class="gallery-block__item">
								<img src="/images/63aad51cd7950-776adb38ae6576b192f3b255c7858785.jpg">
							</div>
							<div class="gallery-block__item">
								<img src="/images/63aad50fe5f1b-0bdb041d36e660362ed2421bf3ce6ac6.jpg">
							</div>
						</div>
					</!--div-->

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

                                        @foreach ($repairSubCategory->review as $rewiew)
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
                    @endif

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
		</main>


@endsection

@section('description', $brandActive->name . '|' . $repairSubCategory->seo_description )
@section('keywords', $brandActive->name . ',' . $repairSubCategory->seo_keywords)
@section('title', $brandActive->name . '|' . $repairSubCategory->seo_title)