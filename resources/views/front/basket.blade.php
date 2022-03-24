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




	<!-- КОРЗИНА -->

	<section class="basket">
		<div class="container">

			<!-- ПУСТАЯ

			<div class="basket-empty">
				ВАША КОРЗИНА ПУСТА
			</div>
			 -->

			<div class="basket-list">
				<div class="basket-item">
					<div class="basket-item__delete">
						<img src="img/del.svg" alt="ico">
					</div>
					<div class="basket-item__img">
						<img src="img/bottle1.png" alt="img">
					</div>
					<div class="basket-item__wrap">
						<div class="basket-item__size">
							1.5 L
						</div>
						<div class="basket-item__info">
							<div class="basket-item__head">
								<h2 class="basket-item__name">
									Негазированная
								</h2>
								<div class="basket-item__price">
									итог <span><strong>12000</strong> UZS </span>
								</div>
							</div>
							<div class="basket-item__text">
								В наше время все заботятся о своем здоровье и потребляют только чистую воду В наше время все заботятся о своем здоровье и потребляют только чистую воду.
							</div>
							<div class="basket-item__logo btn">
								Печать логотипа
								<svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9.41619 1.17401L5.29546 5.29474M1.17473 9.41547L5.29546 5.29474M5.29546 5.29474L9.26077 9.26005L1.12145 1.12073" stroke="#217BBE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<div class="basket-item__total">
								<div>6 x 1500 =</div>
								<div><strong>12000</strong> UZS * <span>10 блок</span></div>
							</div>
							<div class="basket-item__open">
								количество
								<svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M14 1L7.5 7L1 1" stroke="#217BBE" stroke-width="1.5" stroke-linecap="round"/>
								</svg>
							</div>
							<div class="basket-item__dropdown">
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
									<div class="order-price">
										<div class="order-price__item">
											<span class="order-price__name">Промежуточный итог</span>
											<span class="order-price__value">42000 <span>UZS</span></span>
										</div>
									</div>
									<button class="order-add btn">
										Далее
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="basket-item">
					<div class="basket-item__delete">
						<img src="img/del.svg" alt="ico">
					</div>
					<div class="basket-item__img">
						<img src="img/bottle1.png" alt="img">
					</div>
					<div class="basket-item__wrap">
						<div class="basket-item__size">
							1.5 L
						</div>
						<div class="basket-item__info">
							<div class="basket-item__head">
								<h2 class="basket-item__name">
									Негазированная
								</h2>
								<div class="basket-item__price">
									итог <span><strong>12000</strong> UZS </span>
								</div>
							</div>
							<div class="basket-item__text">
								В наше время все заботятся о своем здоровье и потребляют только чистую воду В наше время все заботятся о своем здоровье и потребляют только чистую воду.
							</div>
							<div class="basket-item__logo btn">
								Печать логотипа
								<svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9.41619 1.17401L5.29546 5.29474M1.17473 9.41547L5.29546 5.29474M5.29546 5.29474L9.26077 9.26005L1.12145 1.12073" stroke="#217BBE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<div class="basket-item__total">
								<div>6 x 1500 =</div>
								<div><strong>12000</strong> UZS * <span>10 блок</span></div>
							</div>
							<div class="basket-item__open">
								количество
								<svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M14 1L7.5 7L1 1" stroke="#217BBE" stroke-width="1.5" stroke-linecap="round"/>
								</svg>
							</div>
							<div class="basket-item__dropdown">
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
									<div class="order-price">
										<div class="order-price__item">
											<span class="order-price__name">Промежуточный итог</span>
											<span class="order-price__value">42000 <span>UZS</span></span>
										</div>
									</div>
									<button class="order-add btn">
										Далее
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="basket-item">
					<div class="basket-item__delete">
						<img src="img/del.svg" alt="ico">
					</div>
					<div class="basket-item__img">
						<img src="img/bottle1.png" alt="img">
					</div>
					<div class="basket-item__wrap">
						<div class="basket-item__size">
							1.5 L
						</div>
						<div class="basket-item__info">
							<div class="basket-item__head">
								<h2 class="basket-item__name">
									Негазированная
								</h2>
								<div class="basket-item__price">
									итог <span><strong>12000</strong> UZS </span>
								</div>
							</div>
							<div class="basket-item__text">
								В наше время все заботятся о своем здоровье и потребляют только чистую воду В наше время все заботятся о своем здоровье и потребляют только чистую воду.
							</div>
							<div class="basket-item__logo btn">
								Печать логотипа
								<svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M9.41619 1.17401L5.29546 5.29474M1.17473 9.41547L5.29546 5.29474M5.29546 5.29474L9.26077 9.26005L1.12145 1.12073" stroke="#217BBE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<div class="basket-item__total">
								<div>6 x 1500 =</div>
								<div><strong>12000</strong> UZS * <span>10 блок</span></div>
							</div>
							<div class="basket-item__open">
								количество
								<svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M14 1L7.5 7L1 1" stroke="#217BBE" stroke-width="1.5" stroke-linecap="round"/>
								</svg>
							</div>
							<div class="basket-item__dropdown">
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
											<option value="1">1 блок</option>
											<option value="2">2 блока</option>
											<option value="3">3 блока</option>
											<option value="4">4 блока</option>
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
									<div class="order-price">
										<div class="order-price__item">
											<span class="order-price__name">Промежуточный итог</span>
											<span class="order-price__value">42000 <span>UZS</span></span>
										</div>
									</div>
									<button class="order-add btn">
										Далее
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="basket-content">
				<form action="#" class="basket-form">
					<div class="basket-form__title">
						я ... покупатель
					</div>
					<select class="basket-form__select">
						<option value="new" selected>новый</option>
						<option value="stand">постоянный</option>
					</select>
					<div class="form-half">
						<input type="text" placeholder="Имя">
						<input type="tel" placeholder="Телефон" class="form__tel" maxlength="19" required="" pattern="^[0-9-+\s()]*$">
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
					<div class="basket-form__price">
						<span>Промежуточный итог</span>
						<span></span>
						<span><strong>42000</strong> UZS</span>
					</div>
					<div class="basket-form__price">
						<span>Доставка</span>
						<span></span>
						<span><strong>00</strong> UZS</span>
					</div>
					<div class="basket-form__choose">
						<div>
							<input type="radio" name="pay" id="cash"> <label for="cash">Наличными</label>
						</div>
						<div>
							<input type="radio" name="pay" id="card"> <label for="card">Карта</label>
						</div>
					</div>
					<div class="basket-form__cards">
						<div class="basket-form__card active">
							<img src="img/click.png" alt="ico">
						</div>
						<div class="basket-form__card">
							<img src="img/payme.png" alt="ico">
						</div>
						<div class="basket-form__card">
							<img src="img/upay.png" alt="ico">
						</div>
						<div class="basket-form__card">
							<img src="img/paynet.png" alt="ico">
						</div>
						<div class="basket-form__card">
							<img src="img/apelsin.png" alt="ico">
						</div>
					</div>
					<button type="submit" class="order-add btn">
						Оплатить
					</button>
				</form>
				<div class="basket-info">
					<div class="basket-info__title">
						Реквизиты
					</div>
					<ul class="basket-info__list">
						<li>
							<span>Получатель:</span> OOO “SUU Tashkent”
						</li>
						<li>
							<span>Адрес:</span> г. Ташкент, Юнусабадский район, ул.Ахмад Дониша 26А
						</li>
						<li>
							<span>ИНН:</span> 7706412841
						</li>
						<li>
							<span>Р/С:</span> 2020 8000 2010 3340 5001 ЧАКБ «ОРИЕНТ ФИНАНС» Юнусабадский Филиал

						</li>
						<li>
							<span>МФО:</span> 01075
						</li>
						<li>
							<span>ИНН:</span> 306 164 875
						</li>
						<li>
							<span>ОКЭД:</span> 58290
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>


	<!-- ФУТЕР -->



@endsection
