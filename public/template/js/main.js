window.onload = function () {
	if (document.querySelector('.reviewsSlider')) {
		var galleryTop = new Swiper('.reviewsSlider', {
			spaceBetween: 40,
			loop: true,
			loopedSlides: 2,
			slidesPerView: 'auto',
			navigation: {
				prevEl: ".reviewSilder-arrows .leftArrow",
				nextEl: ".reviewSilder-arrows .rightArrow"
			},
			slidesPerView: 'auto',
			centeredSlides: true,
			breakpoints: {
				320: {
					slidesPerView: 1,
					loop: true,
					spaceBetween: 20,
					centeredSlides: false,
					grabCursor: true,
				},
				340: {
					slidesPerView: 1,
					loop: true,
					grabCursor: true,
					spaceBetween: 20,
					centeredSlides: false,
				},
				768: {
					slidesPerView: 2,
					effect: 'coverflow',
					spaceBetween: 15,
					centeredSlides: true,
					grabCursor: true,
					touchRatio: 0.2,
				},
				1024: {
					slidesPerView: 'auto',
					spaceBetween: 40,
					centeredSlides: true,
				},
			}
		});

		new Swiper('.swiper-master-slider', {
			loop: true,
			autoplay: true,
			autoplaySpeed: 3000,
			speed: 800,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			breakpoints: {
				320: {
					slidesPerView: 1,
					spaceBetween: 10,
				},
				760: {
					autoplay: false,
				},
				1024: {
					autoplay: false,
					slidesPerView: 2,
					spaceBetween: 20
				}
			}

		});


		new Swiper('.swiper-menu', {
			loop: false,
			autoplay: true,
			autoplaySpeed: 3000,
			speed: 800,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			breakpoints: {
				320: {
					slidesPerView: 1,
					slidesPerGroup: 1,
					spaceBetween: 10,
				},
				760: {
					slidesPerView: 2,
					slidesPerGroup: 2,
					autoplay: false,
				},
				1024: {
					autoplay: false,
					slidesPerView: 4,
					slidesPerGroup: 4,
					spaceBetween: 10
				}
			},
			scrollbar: {
				el: '.swiper-scrollbar',
			},

		});
	}


	// страница УСТРОЙСТВО слайдер ОТЗЫВЫ 
	if (document.querySelector('.swiper__mobile')) {
		new Swiper('.swiper__mobile', {
			loop: true,
			autoplay: true,
			autoplaySpeed: 3000,
			speed: 800,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			pagination: {
				el: '.swiper-pagination',
			},
			breakpoints: {
				320: {
					slidesPerView: 1,
					spaceBetween: 10,
				},
				760: {
					autoplay: false,
				},
				1024: {
					autoplay: false,
					slidesPerView: 2,
					spaceBetween: 20
				}
			}
		});
	}





	var youtube = document.querySelectorAll(".gallery-block__item.video");
	for (var i = 0; i < youtube.length; i++) {
		youtube[i].addEventListener("click", function () {
			var iframe = document.createElement("iframe");
			iframe.setAttribute("frameborder", "0");
			iframe.setAttribute("allowfullscreen", "");
			iframe.setAttribute("width", "100%");
			iframe.setAttribute("height", "100%");
			iframe.setAttribute("src", "https://www.youtube.com/embed/" + this.dataset.link + "?rel=0&showinfo=0&autoplay=1");
			iframe.setAttribute("allow", "autoplay");
			this.innerHTML = "";
			this.appendChild(iframe);
		});
	}
};

jQuery(document).ready(function ($) {

	$('.worksTable__footer__showmore').click(function (event) {
		$('.worksTable').toggleClass('worksTable--closed');
		var text = $(this).text();
		$(this).text(
			text == "Показать прайс полностью" ? "Скрыть прайс" : "Показать прайс полностью"
		);
	});

	$(".js-question").each(function () {
		$(this).parents('.js-faq-item').not('.is-active').find('.js-ask').hide();
	});

	$(".js-question").click(function () {
		var this_quest = $(this);
		if (this_quest.parents('.js-faq-item').hasClass('is-active')) {
			this_quest.parents('.js-faq-item').removeClass('is-active');
			this_quest.parents('.js-faq-item').find('.js-ask').slideUp();
		} else {
			this_quest.parents('.js-faq-item').addClass('is-active');
			this_quest.parents('.js-faq-item').find('.js-ask').slideDown();
			this_quest.parents('.js-faq-item').siblings(".js-faq-item.is-active").find('.js-ask').slideToggle();
			this_quest.parents('.js-faq-item').siblings(".js-faq-item.is-active").removeClass('is-active');
		}
	});

	$(".js-arrow").click(function () {
		var this_quest = $(this);
		if (this_quest.parents('.js-faq-item').hasClass('is-active')) {
			this_quest.parents('.js-faq-item').removeClass('is-active');
			this_quest.parents('.js-faq-item').find('.js-ask').slideUp();
		} else {
			this_quest.parents('.js-faq-item').addClass('is-active');
			this_quest.parents('.js-faq-item').find('.js-ask').slideDown();
			this_quest.parents('.js-faq-item').siblings(".js-faq-item.is-active").find('.js-ask').slideToggle();
			this_quest.parents('.js-faq-item').siblings(".js-faq-item.is-active").removeClass('is-active');
		}
	});

	$('.js-open-modal').click(function (event) {
		event.preventDefault();

		var modalName = $(this).attr('data-modal');
		var modal = $('.js-modal[data-modal="' + modalName + '"]');

		modal.addClass('is-show');
		$('.js-modal-overlay').addClass('is-show');
	});

	$('.js-modal-close').click(function () {
		$('.js-modal').removeClass('is-show');
		$('.js-modal-overlay').removeClass('is-show');
	});

	$('.js-modal-overlay').click(function () {
		$('.js-modal.is-show').removeClass('is-show');
		$(this).removeClass('is-show');
	});

	$('.otherItems .otherLabel').on('click', function (e) {
		e.preventDefault();
	});

	$('.otherItems').hover(function () {
		clearTimeout($.data(this, 'timer'));
		$('.catalogOther-div', this).stop(true, true).slideDown(200);
	}, function () {
		$.data(this, 'timer', setTimeout($.proxy(function () {
			$('.catalogOther-div', this).stop(true, true).slideUp(200);
		}, this), 100));
	});

	$('#main-header').before('<div class="ghostHeader"></div>');
	var height = $('#main-header').height();
	$('.ghostHeader').height(height);

	if ($(this).scrollTop() > 1) {
		$('#main-header').addClass("sticky");
		$('.ghostHeader').addClass("shown");
	}
	$(window).scroll(function () {
		if ($(this).scrollTop() > 1) {
			$('#main-header').addClass("sticky");
			$('.ghostHeader').addClass("shown");
		} else {
			$('#main-header').removeClass("sticky");
			$('.ghostHeader').removeClass("shown");
		}
	});

	$('[inputmode="tel"]').mask("+7 (000) 000-00-00", {
		placeholder: '+7 (___) ___-__-__'
	});


	$("[inputmode='tel']").click(function () {
		if ($(this).val().length < 4) {
			$(this).val('+7 (');
		}
	});
	$("[inputmode='tel']").on('keyup change', function () {
		var phoneLenth = $(this).val().length;
		if (phoneLenth < 5) {
			$(this).val('+7 (');
		}
	});

	const prefixNumber = (str) => {
		if (str === "7") {
			return "+7 (";
		}
		if (str === "8") {
			return "+7 (";
		}
		if (str === "9") {
			return "+7 (";
		}
		return "+7 (";
	};

	$(function () {
		$('.lazy').Lazy();
	});


	$('.adressCity').click(function () {
		$('.two-modal-select-citys').addClass('show-select-citys bg_shadow');
		startOnClick();
	});


	$('.two-modal-select-citys .content .close').click(function () {
		$('.two-modal-select-citys').removeClass('show-select-citys bg_shadow');
	});

	function startOnClick() {
		$(document).mouseup(function (e) { // событие клика по веб-документу
			let div = $(".two-modal-select-citys .content"); // тут указываем ID элемента
			// если клик был не по нашему блоку && и не по его дочерним элементам
			if (!div.is(e.target) && div.has(e.target).length === 0) {
				$('.two-modal-select-citys').removeClass('show-select-citys bg_shadow');
			}
		});
	}



	// Поиск города
	$(".price-search").keyup(function () {
		var searchTerm = $(".price-search").val();                    // Запрос в поле инпут ПОИСК
		var listItem = $('.two-modal-select-citys a');              // Список всех городов
		var searchSplit = searchTerm.replace(/\s/g, "'):containsi('"); // Разделяем слова по контейнерам
		$.extend($.expr[':'], {
			'containsi': function (elem, i, match, array) {
				return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
			}
		});
		$(".two-modal-select-citys a").not(":containsi('" + searchSplit + "')").each(function (e) {
			$(this).addClass('hiding out').removeClass('in');
			setTimeout(function () {
				$('.out').addClass('hidden');
			}, 100);
		});
		$(".two-modal-select-citys a:containsi('" + searchSplit + "')").each(function (e) {
			$(this).removeClass('hidden out').addClass('in');
			setTimeout(function () {
				$('.in').removeClass('hiding');
			}, 100);
		});
		$(".two-modal-select-citys a:containsi('" + searchSplit + "')").each(function (e) {
			$(this).removeClass('hidden out').addClass('in');
			setTimeout(function () {
				$('.in').removeClass('hiding');
			}, 0);
		});
	});

	$('.btn-faq-close').click(function () {
		$(this).find('button').toggleClass('close-faq');
		$(this).parent().next().slideToggle('slow');
	});
	$('.btn-close-filter').click(function () {
		$(this).toggleClass('close');
		if ($(this).hasClass('close')) {
			$(this).text('Показать')
		} else {
			$(this).text('Скрыть')
		}
		$('.cat-aside').slideToggle('slow');
	});



	// Попап "Спасибо!" ----------------------------------------------------------
	$('[type="submit"]').attr('disabled', 'disabled');
	$('.swal2-styled.swal2-confirm').addClass('btn-secondary');
	$('form').on('ready keyup', function () {
		let form = $(this).find('[inputmode="tel"]').val().length;
		// console.log(form);
		if (form == 18) {
			$(this).find('[type="submit"]').attr('disabled', null);
		} else {
			$(this).find('[type="submit"]').attr('disabled', 'disabled');
		}
	});
	// Попап "Спасибо!" **********************************************************



	// Передаем название в модальное окно по смыслу которрому мы кликнули --------
	$('.js-open-modal').on('click', function () {
		let btn = $(this).parents();
		let container1 = '.popap-response-service .name-service .text-1';
		let container2 = '.popap-response-service .name-service .text-2';

		// Если выбираем в прайсе "ЗАКАЗАТЬ"
		if (btn.hasClass('contentRow')) {
			$('.popap-response-service').show();
			let val = $(this).parents('.contentRow').children('.clm-1').text();
			$(container1).text("Услуга:");
			$(container2).text(val.toLowerCase());
		}
		// Если кликаем в шапке ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ или Оставить заявку на гл. Экране
		else if (btn.hasClass('catalog-heading')) {
			$('.popap-response-service').show();
			let val = $('.catalog-heading h1').text();
			$(container1).text("Услуга:");
			$(container2).text(val.toLowerCase());
		}
		// Если кликаем на поломки
		else if ($(this).hasClass('malfunction')) {
			$('.popap-response-service').show();
			let val = $(this).find('.malfunction__name').text();
			$(container1).text("Услуга:");
			$(container2).text(val.toLowerCase());
		}
		else {
			$('.popap-response-service').hide();
		}

	});
	// Передаем название в модальное окно по смыслу которому мы кликнули ********



	// **** Каталог в мобильном меню
	$('.btn-mobile-catalog .catalog-uslug').click(function () {
		// if ( !$(this).hasClass('show') ) {
			$('.btn-mobile-catalog').toggleClass('show');
			$('.mob-menu-catalog').toggleClass('show-catalog');
		// } 
	});

	// $('.catalog-uslug').click(function () {
	// 	$('.mob-menu-catalog').removeClass('show-catalog');
	// 	$('.btn-mobile-catalog').removeClass('show');
	// });
	// ---- Каталог в мобильном меню


	// Ограниченый вывод городов в мобильной версии на странице контакты
	$('.btn-all-citys').click(function () {
		$('.city-branch .citys').toggleClass('showMob_city');
	})

});



if (document.querySelector('#gallery-1')) {
	// lightGallery
	lightGallery(document.querySelector('#gallery-1'), {
		thumbnail: true,
	});
}



// <!-- Отправка GET-запроса для "ЯНДЕКС.ПОИСК", через FORM -->
jQuery(document).ready(function ($) {

	// Получаем ссылку для атрибута 'action'
	//const link = 'https://' + window.location.hostname + '/search';
	//$('.custom-search').attr('action', link);

	// Получаем ключ Яндекс для того чтобы работал поиск
	//let idSearch = $('.ya-site-form').attr('data-bem');
	//let arr = JSON.parse(idSearch);
	//$('[name="searchid"]').val(arr['searchid']);



	// закрыть модальное окно СПАСИБО
	$('.bg-modal-yes .close').on('click', function () {
		$('.bg-modal-yes').css('display', 'none');
	});

	$(document).mouseup(function (e) {              // событие клика по веб-документу
		var div = $(".bg-modal-yes .modal-content"); // тут указываем ID элемента
		if (!div.is(e.target)                       // если клик был не по нашему блоку
			&& div.has(e.target).length === 0) {        // и не по его дочерним элементам
			$('.bg-modal-yes').css('display', 'none');
		}
	});

	$(document).on('keydown', function (e) {
		if (e.keyCode == 27)
			$('.bg-modal-yes').css('display', 'none');
	});



	// Проверка на доступ к отправке
	$('form').on('input change', function () {

		let num = $(this).find('[inputmode="tel"]').val().length;
		let check = $(this).find('[type="checkbox"]').is(':checked');
		let noCheck = $(this).find('[type="checkbox"]').length;

		if (num != 18) {
			$(this).find('[type="submit"]').removeClass('yes');
		} else {
			if (noCheck == true) {
				if (check == true) {
					$(this).find('[type="submit"]').addClass('yes');
				} else {
					$(this).find('[type="submit"]').removeClass('yes');
				}
			} else {
				$(this).find('[type="submit"]').addClass('yes');
			}
		}

		if (num >= 3 && num <= 17) {
			$(this).find('[inputmode="tel"]').blur(function () {
				$(this).parent('form').next().removeClass('green').text('');
				$(this).parent('form').next().addClass('red').text('Пожалуйста, введите телефон полностью');
			});
		} else if (num == 18) {
			$(this).find('[inputmode="tel"]').blur(function () {
				$(this).parent('form').next().removeClass('red').text('');
				$(this).parent('form').next().addClass('green').text('Обращение можно отправить!');
			});
		} else {
			$(this).find('[inputmode="tel"]').blur(function () {
				$(this).parent('form').next().removeClass('green red').text('');
			});
		}

	});


	// Отзывы на странице устройства, кнопка "Чиатть ещё"
	$('.load-text button').click(function () {
		$(this).toggleClass('show');
		$(this).parent().prev().toggleClass('active');
	});

	$('.all-size-malfunction').click(function () {
		$(this).toggleClass('newText');
		$(this).prev().toggleClass('active');
	});


	$('.moreBrands-defoult').click(function () {
		$(this).toggleClass('updText');
		$('.brand-items').toggleClass('showBrands');
	});
	
	$('.show-more-cat').click(function () {
		$(this).toggleClass('updText');
		$('.brand-items').toggleClass('showBrands');
	});



	// Когда жмем в шшапке на кнопку СРОЧНЫЙ РЕМОНТ 
	const clickBtn = $('.catalogModal.js-open-modal.button-puls.primary-button[data-modal="2"]');
	clickBtn.on('click', function () {
		$('.modal[data-modal="2"] .titleModal').text('Вызвать курьера');
	});
	// при закрытии модального окна возвращаем надпись
	$('.modal__cross.js-modal-close, .overlay.js-modal-overlay').on('click', function () {
		$('.modal[data-modal="2"] .titleModal').text('Бесплатная консультация');
	});
	// --- 



	$('nav .iteam-cell').mouseenter(function () {
		$(this).find('.dropDown_menu').css('display', 'flex');
	});

	$('nav .iteam-cell').mouseleave(function () {
		$(this).find('.dropDown_menu').css('display', 'none');
	});
	// --- 
	$('.lvl_menu_1').mouseenter(function () {
		$(this).find('.lvl_menu_2').css('display', 'flex');
	});

	$('.lvl_menu_1').mouseleave(function () {
		$(this).find('.lvl_menu_2').css('display', 'none');
	});
	// --- 
	$('.pageCat .title-table').click(function () {
		$(this).toggleClass('active');
		$(this).next().slideToggle();
	});




	$('.click__drop_menu').click(function () {
		$(this).find('span').toggleClass('rotate-180');
		$(this).next().slideToggle();
		$('.btn-mobile-catalog').addClass('show');
	});

});
