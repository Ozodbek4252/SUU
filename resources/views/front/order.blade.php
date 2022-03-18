<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/main.css">
	<title>SUU | Заказ</title>
</head>
<body>

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

	<div class="login">
		<div class="feedback-content">
			<div class="feedback__title">
				Зарегистрироваться
			</div>
			<div class="feedback__text">
				Вам необходимо зарегистрироваться для заказа в компании <strong>suu.uzbekistan</strong>
			</div>
			<div class="feedback-form">
				<div class="feedback-date">
					<select id="dobday"></select>
					<select id="dobmonth"></select>
					<select id="dobyear"></select>
				</div>
				<input type="text" placeholder="Имя">
				<input type="text" placeholder="Фамилия">
				<input type="email" placeholder="Ваш электронный адрес">
				<p>Пароль</p>
				<input type="password" placeholder="Новый пароль">
				<input type="password" placeholder="Подтвердите пароль">
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


	<header class="header header-static">
		<div class="header-static__logo">
			<a href="index.blade.php">
				<img src="img/logo-blue.svg" alt="SUU" title="SUU">
			</a>
		</div>
		<div class="container">
			<nav class="header-menu">
				<ul class="menu">
					<li>
						<a href="index.blade.php">
							Главная
						</a>
					</li>
					<li>
						<a href="index.blade.php#about">
							О компании
						</a>
					</li>
					<li>
						<a href="index.blade.php#products">
							Продукция
						</a>
					</li>
					<li>
						<a href="index.blade.php#services">
							Услуги
						</a>
					</li>
					<li>
						<a href="index.blade.php#news">
							Новости
						</a>
					</li>
					<li>
						<a href="index.blade.php#contact">
							Контакты
						</a>
					</li>
				</ul>
			</nav>
			<ul class="header-side">
				<li class="header-lang">
					<div class="header-lang__open">
						РУ
						<svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.495008 0.690059V1.57506L4.65001 5.73006C4.84501 5.92506 5.16001 5.92506 5.35501 5.73006L9.51001 1.57506V0.690059H8.62501L5.00001 4.31006L1.37501 0.685059L0.495008 0.690059Z" fill="white"/>
						</svg>
					</div>
					<div class="header-lang__dropdown header-side__dropdown">
						<a href="#">
							РУ
						</a>
						<a href="#">
							UZ
						</a>
						<a href="#">
							EN
						</a>
					</div>
				</li>
				<li class="header-basket">
					<div class="header-side__btn">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14 6V4H10V6H14ZM4 9V18C4 18.55 4.45 19 5 19H19C19.55 19 20 18.55 20 18V9C20 8.45 19.55 8 19 8H5C4.45 8 4 8.45 4 9ZM20 6C21.11 6 22 6.89 22 8V19C22 20.11 21.11 21 20 21H4C2.89 21 2 20.11 2 19L2.01 8C2.01 6.89 2.89 6 4 6H8V4C8 2.89 8.89 2 10 2H14C15.11 2 16 2.89 16 4V6H20Z" fill="white"/>
						</svg>
					</div>
					<span>
						16
					</span>
				</li>
				<li class="header-profile">
					<div class="header-side__btn">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 5.1375C13.305 5.1375 14.3625 6.195 14.3625 7.5C14.3625 8.805 13.305 9.8625 12 9.8625C10.695 9.8625 9.6375 8.805 9.6375 7.5C9.6375 6.195 10.695 5.1375 12 5.1375ZM12 15.2625C15.3413 15.2625 18.8625 16.905 18.8625 17.625V18.8625H5.1375V17.625C5.1375 16.905 8.65875 15.2625 12 15.2625ZM12 3C9.51375 3 7.5 5.01375 7.5 7.5C7.5 9.98625 9.51375 12 12 12C14.4862 12 16.5 9.98625 16.5 7.5C16.5 5.01375 14.4862 3 12 3ZM12 13.125C8.99625 13.125 3 14.6325 3 17.625V19.875C3 20.4937 3.50625 21 4.125 21H19.875C20.4937 21 21 20.4937 21 19.875V17.625C21 14.6325 15.0037 13.125 12 13.125Z" fill="white"/>
						</svg>
					</div>
					<div class="header-profile__dropdown header-side__dropdown">
						<a href="#" class="header-profile__login">Profile</a>
						<a href="#">Log out</a>
					</div>
				</li>
				<li class="header-tel">
					<a href="#">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M17.6275 21.3946C15.9642 21.3946 14.1934 20.9223 12.3665 19.9933C10.6822 19.1353 9.01929 17.9071 7.55514 16.4417C6.09078 14.9762 4.86523 13.3109 4.00852 11.626C3.08001 9.7973 2.6084 8.02739 2.6084 6.36362C2.6084 5.28547 3.6138 4.24334 4.04498 3.84621C4.66616 3.27434 5.64321 2.60596 6.35308 2.60596C6.70672 2.60596 7.11999 2.83705 7.65579 3.33311C8.05573 3.70335 8.50524 4.20464 8.95476 4.78328C9.22627 5.13298 10.5803 6.91754 10.5803 7.77291C10.5803 8.47429 9.78653 8.96312 8.94732 9.4793C8.62186 9.67807 8.28699 9.88426 8.04453 10.0787C7.78526 10.2873 7.73808 10.3969 7.73087 10.4212C8.6227 12.6439 11.3485 15.3697 13.5692 16.2595C13.5893 16.2532 13.6994 16.2099 13.9106 15.9463C14.105 15.7043 14.3123 15.3677 14.5106 15.0435C15.0279 14.2043 15.516 13.4099 16.217 13.4099C17.073 13.4099 18.8574 14.7639 19.206 15.0354C19.7859 15.4852 20.2865 15.9351 20.6574 16.3344C21.1528 16.8702 21.3839 17.2841 21.3839 17.6371C21.3839 18.3483 20.716 19.3279 20.1454 19.9522C19.7475 20.386 18.7049 21.3949 17.6263 21.3949L17.6275 21.3946Z" fill="white"/>
						</svg>
					</a>
				</li>
			</ul>
			<div class="header-mobile">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</header>


	<!-- ЗАКАЗ -->

	<section class="order">
		<div class="container">
			<div class="order__img water-anim">
				<img src="img/bottle1.png" alt="bottle">
			</div>
			<div class="order-wrap">
				<div class="order-head">
					<h2 class="order-head__name">
						Негазированная
					</h2>
					<div class="order-head__price">
						6 x 1500 = <strong>12000 UZS </strong>1 блок
						<div>
							оптовая цена
						</div>
					</div>
				</div>
				<div class="order__text">
					В наше время все заботятся о своем здоровье и потребляют только чистую воду В наше время все заботятся о своем здоровье и потребляют только чистую воду.
				</div>
				<div class="order-item order-size">
					<div class="order-item__title">
						Размер
					</div>
					<div class="order-size__btns">
						<button class="btn active">1.5 L</button>
						<button class="btn">1.0 L</button>
						<button class="btn">0.5 L</button>
					</div>
				</div>
				<div class="order-thin">
					<div class="order-item order-count">
						<div class="order-item__title">
							Выберите количество
						</div>
						<select>
							<option value="1">1 <span>блок</span></option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</div>
					<div class="order-item order-print">
						<div class="order-item__title">
							Печать логотипа
						</div>
						<div class="order-print__btns">
							<button class="btn active">С вашим логотипом</button>
							<button class="btn">Без логотипа</button>
						</div>
						<div class="order-print__images">
							<div>
								<img src="img/print1.png" alt="img">
							</div>
							<div>
								<img src="img/print2.png" alt="img">
							</div>
						</div>
					</div>
					<div class="order-item order-delivery">
						<div class="order-item__title">
							Доставка
						</div>
						<div class="order-delivery__btns">
							<button class="btn active">нужно</button>
							<button class="btn">не нужно</button>
						</div>
					</div>
					<div class="order-price">
						<div class="order-price__item">
							<span class="order-price__name">Промежуточный итог</span>
							<span class="order-price__value">42000 <span>UZS</span></span>
						</div>
						<div class="order-price__item">
							<span class="order-price__name">Доставка</span>
							<span class="order-price__value">0 <span>UZS</span></span>
						</div>
					</div>
					<button class="order-add btn">
						Добавить в корзину
					</button>
				</div>
			</div>
		</div>
	</section>


	<!-- ФУТЕР -->

	<footer class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="footer-bottle">
					<img src="img/footer.png" alt="bottle">
				</div>
				<div class="footer-logo">
					<img src="img/logo.svg" alt="SUU">
					<span>Природная питьевая вода</span>
				</div>
				<ul class="footer-menu">
					<li>
						<a href="#">Главная</a>
					</li>
					<li>
						<a href="#">О компании</a>
					</li>
					<li>
						<a href="#">Продукция</a>
					</li>
					<li>
						<a href="#">Услуги</a>
					</li>
					<li>
						<a href="#">Новости</a>
					</li>
					<li>
						<a href="#">Контакты</a>
					</li>
				</ul>
				<div class="footer-info">
					<div class="footer-info__item">
						<div class="footer-info__name">
							Адрес:
						</div>
						<div class="footer-info__value">
							100174, г. Ташкент, Алмазарский р-н,
						</div>
					</div>
					<div class="footer-info__item">
						<div class="footer-info__name">
							Телефон:
						</div>
						<div class="footer-info__value">
							<a href="tel:+998911521915">+99891 152 19 15</a>
						</div>
					</div>
					<div class="footer-info__item">
						<div class="footer-info__name">
							Почта:
						</div>
						<div class="footer-info__value">
							<a href="mailto:info@suuuzbekistan.uz">info@suuuzbekistan.uz</a>
						</div>
					</div>
					<div class="footer-info__item">
						<div class="footer-info__name">
							Мы в соц. сетях:
						</div>
						<div class="footer-info__value">
							<ul>
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
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="container">
				<p>
					&copy; 2021 «SUU.UZBEKISTAN»
				</p>
				<p>
					Designed by <a href="#" target="_blank">Novas.uz</a>
				</p>
			</div>
		</div>
	</footer>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.inputmask.min.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.ripples-min.js"></script>
	<script src="js/gsap.min.js"></script>
	<script src="js/dobpicker.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
