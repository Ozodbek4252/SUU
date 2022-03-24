@extends('front.layout.app')

@section('content')

	<!-- ОБРАТНАЯ СВЯЗЬ -->

	<div class="popup-layer"></div>

	<div class="feedback">
		<div class="feedback-content">
			<div class="feedback__title">
				Оставить заявку
			</div>
			<div class="feedback__text">
				Вам необходимо зарегистрироваться для заказа в компании <strong>suu.uzbekistan</strong>
			</div>
			<div class="feedback-form">
				<input type="text" placeholder="Имя">
				<input type="text" placeholder="Фамилия">
				<input type="tel" placeholder="Телефон" class="form__tel" maxlength="19" required="" pattern="^[0-9-+\s()]*$">
				<textarea placeholder="Текст"></textarea>
				<div class="feedback-form__check">
					<label>
						<input type="checkbox">
						<span>Я прочитал согласие с политикой конфиденциальности</span>
					</label>
				</div>
				<button type="submit" class="btn">Оставить заявку</button>
			</div>
		</div>
	</div>

	<!-- АВТОРИЗАЦИЯ -->

{{--	<div class="login">--}}
{{--		<div class="feedback-content">--}}
{{--			<div class="feedback__title">--}}
{{--				Зарегистрироваться--}}
{{--			</div>--}}
{{--			<div class="feedback__text">--}}
{{--				Вам необходимо зарегистрироваться для заказа в компании <strong>suu.uzbekistan</strong>--}}
{{--			</div>--}}
{{--			<div class="feedback-form">--}}
{{--				<div class="feedback-date">--}}
{{--					<select id="dobday"></select>--}}
{{--					<select id="dobmonth"></select>--}}
{{--					<select id="dobyear"></select>--}}
{{--				</div>--}}
{{--				<input type="text" placeholder="Имя">--}}
{{--				<input type="text" placeholder="Фамилия">--}}
{{--				<input type="email" placeholder="Ваш электронный адрес">--}}
{{--				<p>Пароль</p>--}}
{{--				<input type="password" placeholder="Новый пароль">--}}
{{--				<input type="password" placeholder="Подтвердите пароль">--}}
{{--				<div class="feedback-form__check">--}}
{{--					<label>--}}
{{--						<input type="checkbox">--}}
{{--						<span>Я прочитал согласие с политикой конфиденциальности</span>--}}
{{--					</label>--}}
{{--				</div>--}}
{{--				<button type="submit" class="btn">Оставить заявку</button>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--	</div>--}}

	<!-- МОБИЛЬНОЕ МЕНЮ -->

	<div class="mobile-menu">
		<div class="mobile-menu__head">
			<div class="mobile-menu__logo">
				<a href="index.blade.php">
					<img src="img/logo.svg" alt="SUU" title="SUU">
				</a>
			</div>
			<div class="mobile-menu__close">
				<div class="header-mobile header-mobile__open">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
		<ul class="menu">
			<li>
				<a href="#main" data-menuanchor="main">
					Главная
				</a>
			</li>
			<li>
				<a href="#about" data-menuanchor="about">
					О компании
				</a>
			</li>
			<li>
				<a href="#products" data-menuanchor="products">
					Продукция
				</a>
			</li>
			<li>
				<a href="#services" data-menuanchor="services">
					Услуги
				</a>
			</li>
			<li>
				<a href="#news" data-menuanchor="news">
					Новости
				</a>
			</li>
			<li>
				<a href="#contact" data-menuanchor="contact">
					Контакты
				</a>
			</li>
		</ul>
		<ul class="side__follow">
			<li>
				<a href="#" target="_blank" rel="_nofollow">
					<img src="img/fb.svg" alt="Facebook">
				</a>
			</li>
			<li>
				<a href="#" target="_blank" rel="_nofollow">
					<img src="img/inst.svg" alt="Instagram">
				</a>
			</li>
			<li>
				<a href="#" target="_blank" rel="_nofollow">
					<img src="img/tg.svg" alt="Telegram">
				</a>
			</li>
		</ul>
		<div class="mobile-menu__lang">
			<a href="#">РУ</a>
			<a href="#">UZ</a>
			<a href="#">EN</a>
		</div>
	</div>


	<!-- ХЭДЕР СТАТИЧЕСКИЙ, ОТЛИЧАЕТСЯ ОТ ГЛАВНОГО -->





	<!-- О НАС -->

	<section class="about-main">
		<div class="container">
			<div class="about-main__content">
				<h1 class="about__title section__title">
					ПРИРОДНАЯ ПИТЬЕВАЯ ВОДА
				</h1>
				<div class="about__text section__text">
					<img src="img/logo-gray.svg" alt="SUU">
					В наше время все заботятся о своем здоровье и потребляют только чистую воду В наше время все заботятся о своем здоровье и потребляют только чистую воду.
				</div>
			</div>
		</div>
	</section>
	<section class="about-water">
		<div class="about-water__left">
			<img src="img/about-left-ice.png" alt="img" class="ice">
			<img src="img/about-left.png" alt="img" class="water">
		</div>
		<div class="about-water__bottle">
			<img src="img/about-bottle.png" alt="img">
		</div>
		<div class="about-water__right">
			<img src="img/about-right-ice.png" alt="img" class="ice">
			<img src="img/about-right.png" alt="img" class="water">
		</div>
	</section>
	<section class="about-products">
		<div class="about-products__carousel owl-carousel">
			<img src="img/water1.png" alt="water">
			<img src="img/water2.png" alt="water">
			<img src="img/water3.png" alt="water">
		</div>
		<div class="about-products__arrows">
			<span class="arrow-left">
				<svg width="29" height="53" viewBox="0 0 29 53" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M28 1L2 26.5L28 52" stroke="#2984C7" stroke-width="2"/>
				</svg>
			</span>
			<span class="arrow-right">
				<svg width="29" height="53" viewBox="0 0 29 53" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L27 26.5L1 52" stroke="#2984C7" stroke-width="2"/>
				</svg>
			</span>
		</div>
		<div class="about-products__title">
			Продукты
		</div>
	</section>
	<section class="about-equip">
		<div class="about-equip__info wow fadeInLeft" data-wow-delay=".5s">
			<div class="container">
				<h2 class="about-equip__title section__title">
					Наше оборудование
				</h2>
				<div class="about-equip__text section__text">
					В наше время все заботятся о своем здоровье и потребляют только чистую воду В наше время все заботятся о своем здоровье и потребляют только чистую воду.В наше время все заботятся о своем здоровье и потребляют только чистую воду В наше время все заботятся о своем здоровье и потребляют только чистую воду.
					В наше время все заботятся о своем здоровье и потребляют только чистую воду
					В наше время все заботятся о своем здоровье и потребляют только чистую воду
				</div>
			</div>
		</div>
		<div class="about-equip__img wow fadeInRight water-anim" data-wow-delay=".5s">
			<img src="img/news1.jpg" alt="img">
		</div>
	</section>
	<section class="about-video">
		<h2 class="about-video__title section__title">
			О компании
		</h2>
		<div class="about-video__wrap">
			<div class="about-video__left wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1.5s">
				<img src="img/video-water.png" alt="img">
			</div>
			<div class="about-video__right wow fadeInRight" data-wow-delay=".5s" data-wow-duration="1.5s">
				<img src="img/video-water.png" alt="img">
			</div>
			<video controls poster="img/video-poster.jpg" class="wow fadeInUp" data-wow-delay="1.8s">
				<source src="video/video.mp4" type="video/mp4">
					Ваш браузер не поддерживает HTML5 видео.
				</video>
		</div>
	</section>



	<!-- ФУТЕР -->




@endsection
