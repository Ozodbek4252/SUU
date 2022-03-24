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


	<!-- НОВОСТИ -->

	<section class="news-single">
		<div class="container">
			<div class="news-single__title">
				В наше время все заботятся о своем здоровье и потребляют
			</div>
			<div class="news-single__img water-anim">
				<img src="img/news-single.jpg" alt="img">
			</div>
			<div class="news-single__content">
				<p>
					Темп развития компании на самом максимальном уровне, что является одним из важных плюсов Темп развития компании на самом максимальном уровне, что является одним из важных плюсовТемп развития компании на самом Темп развития компании на самом максимальном уровне, что является одним из важных плюсов Темп развития компании на самом максимальном уровне, что является одним из важных плюсовТемп развития компании на самомТемп развития компании на самом максимальном уровне, что является одним из важных плюсов Темп развития компании на самом максимальном уровне, что является одним из важных плюсовТемп развития компании на самомТемп развития компании на самом максимальном уровне, что является одним из важных плюсов Темп развития компании на самом максимальном уровне, что является одним из важных плюсовТемп развития компании на самомТемп развития компании на самом максимальном уровне, что является одним из важных плюсов Темп развития компании на самом максимальном уровне, что является одним из важных плюсовТемп развития компании на самом
				</p>
				<img src="img/news1.jpg" alt="img">
				<p>
					Темп развития компании на самом максимальном уровне, что является одним из важных плюсов Темп развития компании на самом максимальном уровне, что является одним из важных плюсовТемп развития компании на самом Темп развития компании на самом максимальном уровне, что является одним из важных плюсов Темп развития компании на самом максимальном уровне, что является одним из важных плюсовТемп развития компании на самомТемп развития компании на самом максимальном уровне, что является одним из важных плюсов Темп развития компании на самом максимальном уровне, что является одним из важных плюсовТемп развития компании на самомТемп развития компании на самом максимальном уровне, что является одним из важных плюсов Темп развития компании на самом максимальном уровне, что является одним из важных плюсовТемп развития компании на самомТемп развития компании на самом максимальном уровне, что является одним из важных плюсов Темп развития компании на самом максимальном уровне, что является одним из важных плюсовТемп развития компании на самом
				</p>
				<div class="news-single__follow">
					<ul>
						<li>
							<a href="#" target="_blank" rel="_nofollow">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.99994 8.97128C8.59994 1.77128 14.1667 1.58375 17 2.25042V5.75204C16.6667 5.75204 15.6552 5.64589 14.5 5.97079C13.5 6.25204 13 7.30412 13 7.97079V9.97079H17L16 13.9708H13V21.9708H9V13.9708H6V9.97079H8.99994V8.97128Z" stroke="#717171"/>
								</svg>
							</a>
						</li>
						<li>
							<a href="#" target="_blank" rel="_nofollow">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M17 2H7C4.23858 2 2 4.23858 2 7V17C2 19.7614 4.23858 22 7 22H17C19.7614 22 22 19.7614 22 17V7C22 4.23858 19.7614 2 17 2Z" stroke="#717171"/>
									<circle cx="12" cy="12" r="4.5" stroke="#717171"/>
									<circle cx="18" cy="6" r="0.5" fill="#C4C4C4" stroke="#717171"/>
								</svg>
							</a>
						</li>
						<li>
							<a href="#" target="_blank" rel="_nofollow">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M21.4455 2.35709C21.2299 2.17837 20.9699 2.06132 20.6932 2.01836C20.4164 1.97541 20.1332 2.00814 19.8735 2.11309L1.95651 9.34609C1.66698 9.46507 1.42049 9.6693 1.24975 9.93165C1.07901 10.194 0.992101 10.5021 1.00056 10.815C1.00903 11.1279 1.11246 11.4308 1.29713 11.6836C1.4818 11.9363 1.73897 12.1269 2.03451 12.2301L5.90051 13.5721L7.99551 20.4981C7.99951 20.5121 8.01251 20.5211 8.01851 20.5341C8.0401 20.5894 8.07162 20.6402 8.11151 20.6841C8.17213 20.7518 8.25037 20.8013 8.33751 20.8271C8.34751 20.8311 8.35451 20.8401 8.36451 20.8421H8.37051L8.37351 20.8431C8.45087 20.8597 8.53127 20.8556 8.60651 20.8311C8.61451 20.8291 8.62251 20.8291 8.63151 20.8261C8.70376 20.8007 8.76914 20.759 8.82251 20.7041C8.82851 20.6971 8.83851 20.6961 8.84451 20.6901L11.8575 17.3641L16.2545 20.7691C16.5215 20.9781 16.8505 21.0911 17.1895 21.0911C17.9235 21.0911 18.5565 20.5771 18.7075 19.8601L21.9695 3.84209C22.0248 3.57017 22.0053 3.28832 21.913 3.02662C21.8208 2.76491 21.6592 2.53317 21.4455 2.35609V2.35709ZM9.08851 14.8871L8.38151 18.3241L6.90651 13.4461L14.2215 9.63609L9.22451 14.6341C9.15531 14.7032 9.10801 14.7912 9.08851 14.8871ZM17.7275 19.6591C17.7087 19.7498 17.667 19.8341 17.6062 19.904C17.5454 19.9738 17.4677 20.0269 17.3805 20.0581C17.2954 20.0908 17.2033 20.1009 17.1132 20.0872C17.0231 20.0735 16.938 20.0366 16.8665 19.9801L12.1035 16.2911C12.0039 16.2142 11.8791 16.1777 11.7538 16.1888C11.6285 16.2 11.512 16.2579 11.4275 16.3511L9.33051 18.6621L10.0365 15.2351L17.2255 8.04509C17.3097 7.96063 17.3609 7.84885 17.3699 7.72993C17.379 7.61102 17.3452 7.49279 17.2747 7.3966C17.2042 7.3004 17.1017 7.23256 16.9855 7.20533C16.8694 7.1781 16.7474 7.19327 16.6415 7.24809L6.27851 12.6461L2.36151 11.2841C2.25765 11.2498 2.16707 11.184 2.10237 11.0958C2.03767 11.0076 2.00206 10.9015 2.00051 10.7921C1.99553 10.6818 2.02501 10.5726 2.08486 10.4798C2.1447 10.387 2.23196 10.3151 2.33451 10.2741L20.2485 3.04109C20.3403 3.00209 20.4412 2.98948 20.5398 3.00467C20.6383 3.01986 20.7307 3.06226 20.8065 3.12709C20.8819 3.18808 20.9388 3.26882 20.971 3.36029C21.0031 3.45176 21.0092 3.55037 20.9885 3.64509L17.7275 19.6601V19.6591Z" fill="#717171"/>
								</svg>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="news-single__more">
				<div class="news-single__more-title">
					Рекомендуемые
				</div>
				<div class="news-single__more-content">
					<div class="news-carousel__item">
						<div class="news-carousel__img">
							<img src="img/news2.jpg" alt="news">
						</div>
						<div class="news-carousel__text">
							В наше время все заботятся о своем здоровье и потребляют
						</div>
						<div class="news-carousel__info">
							<span>13.Сент.2021</span>
							<span><img src="img/eye-gray.svg" alt="ico">20</span>
						</div>
						<a href="#"></a>
					</div>
					<div class="news-carousel__item">
						<div class="news-carousel__img">
							<img src="img/news2.jpg" alt="news">
						</div>
						<div class="news-carousel__text">
							В наше время все заботятся о своем здоровье и потребляют
						</div>
						<div class="news-carousel__info">
							<span>13.Сент.2021</span>
							<span><img src="img/eye-gray.svg" alt="ico">20</span>
						</div>
						<a href="#"></a>
					</div>
					<div class="news-carousel__item">
						<div class="news-carousel__img">
							<img src="img/news2.jpg" alt="news">
						</div>
						<div class="news-carousel__text">
							В наше время все заботятся о своем здоровье и потребляют
						</div>
						<div class="news-carousel__info">
							<span>13.Сент.2021</span>
							<span><img src="img/eye-gray.svg" alt="ico">20</span>
						</div>
						<a href="#"></a>
					</div>
					<div class="news-carousel__item">
						<div class="news-carousel__img">
							<img src="img/news2.jpg" alt="news">
						</div>
						<div class="news-carousel__text">
							В наше время все заботятся о своем здоровье и потребляют
						</div>
						<div class="news-carousel__info">
							<span>13.Сент.2021</span>
							<span><img src="img/eye-gray.svg" alt="ico">20</span>
						</div>
						<a href="#"></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ФУТЕР -->



@endsection
