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

	@include('front.component.mobile-menu')


	<!-- ХЭДЕР СТАТИЧЕСКИЙ, ОТЛИЧАЕТСЯ ОТ ГЛАВНОГО -->




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



@endsection

