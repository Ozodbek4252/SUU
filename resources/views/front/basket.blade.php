@extends('front.layout.app')

@section('content')

	<!-- ОБРАТНАЯ СВЯЗЬ -->

	<div class="popup-layer"></div>


	<!-- АВТОРИЗАЦИЯ -->
	<?php
		session()->put('locale', Request::segment(1))
	?>
	<div class="login">
		<div class="feedback-content">
			<div class="feedback__title">
				{{__('Зарегистрироваться')}}
			</div>
			<div class="feedback__text">
				{{__('homeInputTitleText')}} <strong>suu.uzbekistan</strong>
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
				<p>{{__('Пароль')}}</p>
				<input type="password" placeholder="Новый пароль">
				<input type="password" placeholder="Подтвердите пароль">
				<div class="feedback-form__check">
					<label>
						<input type="checkbox">
						<span>{{__('homeInputChech')}}</span>
					</label>
				</div>
				<button type="submit" class="btn">{{__('homeInputButton')}}</button>
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
				<a href="/home" data-menuanchor="main">
					{{__('navHome')}}
				</a>
			</li>
			<li>
				<a href="#about" data-menuanchor="about">
					{{__('aboutTitle')}}
				</a>
			</li>
			<li>
				<a href="#products" data-menuanchor="products">
					{{__('homeProductTitle')}}
				</a>
			</li>
			<li>
				<a href="#services" data-menuanchor="services">
					{{__('homeServiceTitle')}}
				</a>
			</li>
			<li>
				<a href="#news" data-menuanchor="news">
					{{__('homeNewsTitle')}}
				</a>
			</li>
			<li>
				<a href="#contact" data-menuanchor="contact">
					{{__('homeContactTitle')}}
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
    <form action=""></form>

	<section class="basket">
		<div class="container" id="basket_refresh">
			<div class="basket-empty">
                @if(!session()->get('cart'))
                    {{__('ВАША КОРЗИНА ПУСТА')}}
                @endif
			</div>

			<div class="basket-list" id="basket-list">
                <?php $total_price = 0 ?>
                @if(session()->get('cart') != null)
                    @foreach(session()->get('cart') as $key=>$value)
                        <?php
                            $cart = session()->get('cart');
                            $product = \App\Models\Product::find($key);
                            $total_price += $product->price*$cart[$key]['quantity'];
                        ?>
						
                        <div class="basket-item" id="basket-item{{ $product->id }}">
                            <div class="basket-item__delete" onclick="deleteProduct({{ $product->id }})">
                                <img src="img/del.svg" alt="ico">
                            </div>
                            <div class="basket-item__img">
                                <img src="{{ $product->image_path }}/{{ $product->image }}" alt="img">
                            </div>
                            <div class="basket-item__wrap">
                                <div class="basket-item__size" id="basket-item__size'+i+'">
                                    @if($product->cat_id != 3)
                                        {{ $product->price/6 }}
                                    @else
                                        {{ $product->price }}
                                    @endif
                                </div>
                                <div class="basket-item__info">
                                    <div class="basket-item__head">
                                        <h2 class="basket-item__name">
                                            {{ \App\Models\Category::find($product->cat_id)['name_'.app()->getLocale()] }} ({{ $product->size }}L)
                                        </h2>
                                        <div class="basket-item__price">{{__('cartPrice')}}
                                            <span>
                                                <strong id="price_product">{{ $product->price*$cart[$key]['quantity'] }}</strong> UZS
                                            </span>
                                        </div>
                                    </div>
								
                                    <div class="basket-item__text">
                                        {{ $product['description_'.app()->getLocale()] }}
                                    </div>
                                    <div class="basket-item__logo btn">
                                        <span>
                                            @if($cart[$key]['logo'] == '0')
                                                {{__('Без логотипа')}}
                                            @else
                                                {{__('С вашим логотипом')}}
                                            @endif
                                        </span>
                                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.41619 1.17401L5.29546 5.29474M1.17473 9.41547L5.29546 5.29474M5.29546 5.29474L9.26077 9.26005L1.12145 1.12073" stroke="#217BBE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <div class="basket-item__total">
                                            <div>@if($product->cat_id != 3) 6 x {{ $product->price/6 }} = @endif</div>
                                        <div>
                                            <strong>{{ $product->price }}</strong> UZS * <span>
                                                {{ $cart[$key]['quantity'] }} @if($product->cat_id != 3) блок @else капсула @endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="basket-item__open">
                                        {{__('количество')}}
                                        <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 1L7.5 7L1 1" stroke="#217BBE" stroke-width="1.5" stroke-linecap="round"/>
                                        </svg>
                                    </div>
                                    <div class="basket-item__dropdown">
                                        <div class="order-thin">
                                            <div class="order-item order-count">
                                                <div class="order-item__title">
                                                    {{__('Выберите количество блоков')}}
                                                </div>
                                                <select id="blok_quantity{{ $product->id }}" onchange="quantity({{ $product->id }})">
                                                    @for($i=1; $i<5; $i++)
                                                        <option value="{{ $i }}" @if($cart[$key]['quantity'] == $i) selected @endif>{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="order-item order-print">
                                                <div class="order-item__title">
                                                    {{__('Печать логотипа')}}
                                                </div>
                                                <div class="order-print__btns">
                                                    <button class="btn @if($cart[$key]['logo'] == 1) active @endif" onclick="logo(1, {{ $product->id }})">{{__('С вашим логотипом')}}</button>
                                                    <button class="btn @if($cart[$key]['logo'] == 0) active @endif" onclick="logo(0, {{ $product->id }})">{{__('Без логотипа')}}</button>
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
                                                    <span class="order-price__name">{{__('honeOrderPrice')}}</span>
                                                    <span class="order-price__value" id="order-price__name'+i+'">{{ $product->price*$cart[$key]['quantity'] }}<span>UZS</span></span>
                                                </div>
                                            </div>
                                            {{--<button class="order-add btn">Далее</button>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
			</div>
            @if(session()->get('cart'))
            <div class="basket-content" id="basket-content">
              <form action="{{Route('order.create', app()->getLocale())}}" class="basket-form">
                <div class="basket-form__title">
                  {{__('cartFormTitle')}}
                </div>
                <select name="status" class="basket-form__select">
                  <option value="new" selected>{{__('cartFormOption1')}}</option>
                  <option value="stand">{{__('cartFormOption2')}}</option>
                </select>
                <div class="form-half">
                  <input name="name" type="text" placeholder="{{__('homePlaceholderInputName')}}">
                  <input name="phone" type="tel" placeholder="{{__('homeContactPhone')}}" class="form__tel" maxlength="19" required="" pattern="^[0-9-+\s()]*$">
                </div>
                <div class="order-item order-delivery">
                  <div class="order-item__title">
                    {{__('honeOrderDelivery')}}
                  </div>

                  <div class="order-delivery__btns">
                    <button name="deliveryNeeded" class="btn active" type="button">{{__('cartFormDelivery1')}}</button>
                    <button name="deliveryNoNeed" class="btn" type="button">{{__('cartFormDelivery2')}}</button>
                  </div>
                </div>
                <div class="basket-form__price">
                  <span>{{__('honeOrderPrice')}}</span>
                  <span></span>
                  <span><strong id="total_price">{{ $total_price }}</strong> UZS</span>
                </div>
                <div class="basket-form__price">
                  <span>{{__('honeOrderDelivery')}}</span>
                  <span></span>
                  <span><strong>00</strong> UZS</span>
                </div>
                <div class="basket-form__choose">
                  <div>
                    <input type="radio" name="pay" id="cash"> <label for="cash">{{__('cartFormPaymentM1')}}</label>
                  </div>
                  <div>
                    <input type="radio" name="pay" id="card"> <label for="card">{{__('cartFormPaymentM2')}}</label>
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
                  {{__('cartFormPayBtn')}}
                </button>
              </form>
              <div class="basket-info">
                <div class="basket-info__title">
                  {{__('cartReqTitle')}}
                </div>
                <ul class="basket-info__list">
                  <li>
                    <span>{{__('cartReqResip')}}:</span> OOO “SUU Tashkent”
                  </li>
                  <li>
                    <span>{{__('footerAddress')}}:</span> {{__('cartReqAddress')}}
                  </li>
                  <li>
                    <span>{{__('cartReqTIN')}}:</span> 7706412841
                  </li>
                  <li>
                    <span>{{__('cartReqBC')}}:</span> {{__('cartReqBCBody')}}
                  </li>
                  <li>
                    <span>{{__('cartReqIFI')}}:</span> 01075
                  </li>
                  <li>
                    <span>{{__('cartReqTIN')}}:</span> 306 164 875
                  </li>
                  <li>
                    <span>{{__('cartReqNCKEA')}}:</span> 58290
                  </li>
                </ul>
              </div>
            </div>
            @endif
		</div>
	</section>
	
	{{-- <script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.inputmask.min.js"></script>
	
	<script src="js/owl.carousel.js"></script>
	<script src="js/fullpage.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.ripples-min.js"></script>
	<script src="js/gsap.min.js"></script>
	<script src="js/dobpicker.js"></script>
	<script src="js/main.js"></script>


	<script src="/js/basket.js"></script> --}}


@endsection
