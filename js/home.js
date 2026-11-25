/**
 * Скрипты новой главной (шаблон template-home.php)
 * Файл: js/home.js
 * Подключается в functions.php только на этом шаблоне.
 * Табы, аккордеоны, меню и модалки работают на Bootstrap (data-bs-*), здесь — только то, чего в Bootstrap нет.
 */
document.addEventListener('DOMContentLoaded', function () {
	// Слайдер первого экрана: точки, стрелки, подпись слайда, автопрокрутка раз в 6 секунд
	var hero = document.querySelector('.nd-hero');

	if (hero) {
		var slides = hero.querySelectorAll('.nd-hero__slide');
		var dots = hero.querySelector('.nd-hero__dots');
		var caption = hero.querySelector('.nd-hero__caption');
		var current = 0;
		var timer;

		// Создаём по точке на каждый слайд
		slides.forEach(function (slide, i) {
			var dot = document.createElement('button');
			dot.type = 'button';
			dot.setAttribute('aria-label', 'Слайд ' + (i + 1));
			dot.addEventListener('click', function () {
				show(i);
			});
			dots.appendChild(dot);
		});

		// Показать слайд по номеру (по кругу), обновить точку и подпись, перезапустить таймер
		var show = function (index) {
			current = (index + slides.length) % slides.length;
			slides.forEach(function (slide, i) {
				slide.classList.toggle('is-active', i === current);
				dots.children[i].classList.toggle('is-active', i === current);
			});
			caption.textContent = slides[current].dataset.title || '';
			clearInterval(timer);
			if (slides.length > 1) {
				timer = setInterval(function () {
					show(current + 1);
				}, 6000);
			}
		};

		// Стрелки «назад» / «вперёд»
		hero.querySelector('.nd-hero__arrow--prev').addEventListener('click', function () {
			show(current - 1);
		});
		hero.querySelector('.nd-hero__arrow--next').addEventListener('click', function () {
			show(current + 1);
		});

		show(0);
	}

	// Мобильные слайдеры (работы, отзывы, шаги): стрелки прокручивают ленту на одну карточку
	document.querySelectorAll('.nd-slider').forEach(function (slider) {
		var track = slider.querySelector('.nd-slider__track');
		var prev = slider.querySelector('.nd-slider__arrow--prev');
		var next = slider.querySelector('.nd-slider__arrow--next');

		// Шаг прокрутки = ширина карточки + промежуток между карточками
		var step = function () {
			var item = track.children[0];
			return item ? item.offsetWidth + parseFloat(getComputedStyle(track).columnGap || 0) : track.clientWidth;
		};

		prev.addEventListener('click', function () {
			track.scrollBy({ left: -step(), behavior: 'smooth' });
		});
		next.addEventListener('click', function () {
			track.scrollBy({ left: step(), behavior: 'smooth' });
		});
	});

	// Квиз: текст кнопки «Далее» → «Дальше», как в макете (разметка квиза общая с другими страницами)
	document.querySelectorAll('.quiz-section--new input[value="Далее"]').forEach(function (button) {
		button.value = 'Дальше';
	});

	// Кнопки «Рассчитать стоимость» (.js-calc): на мобильном открывают квиз поверх страницы, на десктопе — плавно прокручивают к нему
	var quiz = document.querySelector('.nd-quiz');

	document.querySelectorAll('.js-calc').forEach(function (link) {
		link.addEventListener('click', function (event) {
			event.preventDefault();
			if (window.matchMedia('(max-width: 991.98px)').matches) {
				quiz.classList.add('is-open');
			} else {
				quiz.scrollIntoView({ behavior: 'smooth' });
			}
		});
	});

	// Крестик закрывает квиз, открытый поверх страницы на мобильном
	quiz.querySelector('.nd-quiz__close').addEventListener('click', function () {
		quiz.classList.remove('is-open');
	});
});
