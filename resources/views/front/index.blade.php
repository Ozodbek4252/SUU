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
	<title>SUU</title>
</head>
<body>

    <div class="popup-layer"></div>

	<!-- ОБРАТНАЯ СВЯЗЬ -->
<form action="{{route('message.store', app()->getLocale())}}" method="post" >
    {{ csrf_field() }}
    <div class="feedback">
        <div class="feedback-content">
            <div class="feedback__title">
                {{__('homeInputTitle')}}
            </div>
            <div class="feedback__text">
                {{__('homeInputTitleText')}} <strong>suu.uzbekistan</strong>
            </div>
            <div class="feedback-form">
                <input type="text" placeholder="{{__('homePlaceholderInputName')}}" name="name" >
                <input type="text" placeholder="{{__('homePlaceholderInputLastName')}}" name="last_name" >
                <input type="tel" placeholder="{{__('homePlaceholderInputPhone')}}" class="form__tel" maxlength="19" required="" pattern="^[0-9-+\s()]*$" name="phone">
                <textarea placeholder="{{__('homePlaceholderInputText')}}" name="message"></textarea>
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
</form>

<!-- PRELOADER -->
<div class="preloader">
    <div class="preloader-logo">
        <svg width="276" height="345" class="preloader-logo__drop" viewBox="0 0 276 345" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M138 0C46.0575 78.4875 0 146.28 0 203.55C0 289.455 65.55 345 138 345C210.45 345 276 289.455 276 203.55C276 146.28 229.943 78.4875 138 0Z" fill="url(#paint0_linear_26_16)"/>
            <defs>
                <linearGradient id="paint0_linear_26_16" x1="138" y1="0" x2="138" y2="345" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#2A88CC"/>
                    <stop offset="1" stop-color="#1B6092"/>
                </linearGradient>
            </defs>
        </svg>
        <svg width="41" height="189" viewBox="0 0 41 189" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="preloader-logo__text" :class="{'preloader-logo__text-fill': fill}">
            <path id="path1" d="M2.67414 70.6502H13.5591V102.182C13.5591 104.3 14.345 106.574 16.3295 107.649L16.5678 107.21L16.3295 107.649C18.197 108.661 19.6225 108.647 21.4182 108.629C21.6631 108.627 21.9149 108.624 22.1757 108.624C24.3247 108.624 25.9641 107.924 27.0556 106.625C28.1348 105.341 28.6182 103.543 28.6182 101.457V70.6503H39.5031V103.051C39.5031 106.81 38.5123 109.755 36.8438 112.096C35.1713 114.443 32.7955 116.214 29.9797 117.581L30.198 118.031L29.9796 117.581C28.7699 118.168 26.4015 118.789 24.9372 119.022C23.3767 119.27 22.5273 119.348 21.7467 119.352C21.2351 119.354 20.7581 119.325 20.1259 119.287C19.768 119.266 19.3604 119.241 18.8687 119.217C13.0414 118.937 7.12046 115.776 4.35365 110.503L3.91225 110.735L4.35364 110.503C3.55197 108.976 2.6827 106.272 2.67414 103.955V103.921V70.6502Z" stroke="white"/>
            <path id="path2" d="M2.67402 173.492V173.133L2.67383 173.133V139.931H13.5588V171.752C13.5588 174.015 14.4251 175.624 15.8584 176.647C17.2647 177.651 19.1584 178.05 21.1608 178.05C23.586 178.05 25.477 177.492 26.7575 176.242C28.0403 174.989 28.6179 173.13 28.6179 170.738V139.931H39.5028V172.332C39.5028 176.07 38.0852 180.411 35.701 182.817C35.5188 183.001 35.3593 183.158 35.1977 183.318L35.197 183.318C35.0354 183.478 34.8716 183.64 34.6839 183.829C33.4172 185.107 31.4885 186.279 29.3661 187.132C27.2455 187.984 24.9771 188.499 23.05 188.5C23.05 188.5 23.0499 188.5 23.0498 188.5H19.2049C17.112 188.447 15.5 188.187 12.5152 187.063C10.561 186.328 9.51207 185.503 8.07189 184.37C7.93133 184.26 7.78705 184.146 7.63784 184.03C6.83757 183.405 6.39294 182.861 5.75675 182.031C4.12632 179.905 2.67402 176.351 2.67402 173.492Z" stroke="white"/>
            <path id="path3" d="M24.4566 13.0589C22.8025 11.5109 20.4301 10.8705 18.356 10.9493C17.3149 10.9888 16.3206 11.2101 15.5061 11.6124C14.6929 12.0141 14.0255 12.6148 13.7156 13.4253C13.4062 14.2345 13.3632 14.9867 13.5825 15.6799C13.7994 16.3659 14.2561 16.94 14.8494 17.4308C16.0188 18.3985 17.8331 19.1335 19.8402 19.815C20.7122 20.1111 21.6129 20.3948 22.5305 20.6839C23.782 21.0781 25.0648 21.4822 26.3485 21.9409C28.542 22.7246 30.6158 23.6288 32.2467 24.8064L33.983 26.2191C34.1009 26.3271 34.1902 26.4384 34.3029 26.5853C34.3127 26.598 34.3226 26.611 34.3327 26.6242C34.441 26.7657 34.5721 26.9371 34.7509 27.1233L34.751 27.1234C35.5976 28.0047 36.2827 29.3387 36.7558 30.8216C37.227 32.2988 37.4738 33.8799 37.4738 35.2201C37.4738 41.2419 34.5346 45.1092 30.326 47.5353L30.5757 47.9685L30.326 47.5353C26.5362 49.7201 22.8369 49.9387 18.4071 49.9387C12.2538 49.9387 6.26317 47.0452 3.04999 42.7096C2.63335 42.1474 2.06762 41.2709 1.56506 40.3564C1.14272 39.588 0.782654 38.8243 0.58565 38.2124L7.95956 33.9408L7.9596 33.9409L7.96744 33.9362C8.04747 33.8878 8.14228 33.8293 8.24808 33.764C8.52596 33.5925 8.87966 33.3742 9.24035 33.1707C9.48734 33.0314 9.72579 32.9059 9.93123 32.8138C9.96193 32.8 9.99089 32.7875 10.0181 32.7761C10.0943 32.9452 10.1559 33.0893 10.2127 33.2223C10.4291 33.7285 10.5773 34.0754 11.2011 35.033L11.2011 35.0331C11.4626 35.4344 11.8234 35.8647 12.1206 36.2194L12.1239 36.2233C12.4571 36.6209 12.776 36.932 13.188 37.2242L13.188 37.2242C13.233 37.2561 13.2775 37.2877 13.3215 37.319C14.0845 37.8615 14.7047 38.3023 15.8347 38.6853L15.9861 38.2385L15.8347 38.6853C17.1363 39.1264 19.2516 39.4669 21.2356 39.3684C22.2297 39.319 23.2169 39.1584 24.0634 38.828C24.9099 38.4976 25.6521 37.9822 26.0891 37.2027L25.653 36.9582L26.0891 37.2027C26.4652 36.532 26.6346 35.8819 26.5993 35.2562C26.5638 34.6292 26.3251 34.0693 25.9558 33.5765C25.2323 32.6111 23.9805 31.8668 22.6085 31.2691C21.2219 30.6651 19.6379 30.18 18.1797 29.7699C17.6971 29.6343 17.2312 29.5075 16.7902 29.3875C15.8814 29.1402 15.0781 28.9217 14.4524 28.7129C11.0221 27.5688 8.04296 26.0634 5.9232 23.8662C3.81837 21.6846 2.52906 18.7883 2.52906 14.7836V14.7836C2.52906 12.6871 3.11589 10.3872 3.82717 8.96662L3.82718 8.96661C5.04403 6.53613 6.5589 4.6721 8.82549 3.16805L8.8255 3.16804C12.5865 0.67219 15.4639 0.508046 19.4469 0.499908L20.73 0.499908C20.73 0.499908 20.73 0.499908 20.73 0.499908C20.7301 0.499908 20.7301 0.499908 20.7301 0.499908C23.0578 0.500806 25.608 1.27825 27.943 2.54728C30.2768 3.81559 32.3602 5.55588 33.7633 7.44129C34.0551 7.83352 34.6509 8.64153 35.183 9.4755C35.4493 9.89296 35.6943 10.3085 35.8761 10.6762C35.9635 10.853 36.0303 11.007 36.0781 11.1368C36.0045 11.1704 35.9308 11.2064 35.8585 11.2431C35.6149 11.3667 35.3496 11.5183 35.0925 11.6716C34.8232 11.832 34.5764 11.9856 34.3602 12.1201C34.1404 12.2568 33.9524 12.3738 33.8049 12.4582C33.5532 12.6022 33.3048 12.7426 33.0573 12.8827C32.4824 13.2078 31.9118 13.5306 31.3127 13.8898C31.312 13.8903 31.3112 13.8907 31.3105 13.8912L27.5672 16.0833L27.5671 16.0833L27.5596 16.0878C27.4173 16.1746 27.3069 16.2486 27.2133 16.3115C27.0786 16.4019 26.9787 16.4689 26.8686 16.5166C26.6765 15.9875 26.3788 15.4572 26.0533 14.9724C25.6265 14.3364 25.1297 13.746 24.696 13.293L24.6961 13.2929L24.689 13.2857L24.5443 13.1406L24.5444 13.1405L24.5373 13.1337C24.5203 13.1174 24.4839 13.084 24.4662 13.0677C24.4613 13.0632 24.4578 13.06 24.4566 13.0589ZM24.4566 13.0589L24.1149 13.4239L24.4565 13.0588C24.4565 13.0588 24.4566 13.0588 24.4566 13.0589Z" stroke="white"/>
        </svg>
    </div>
    <div class="preloader__text">
        {{__('preloader')}}
    </div>
    <div class="preloader__percent">
        <span>0</span>%
    </div>
</div>


@if(auth()->user())
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
@endif

<div class="side-basket__layer"></div>
{{-- <?php 
$cart = session()->get('cart');
?>
{{ dd($cart) }} --}}
<div class="side-basket">
    <div class="feedback-content">
    <div class="side-basket__content" id="side-basket__content">

    </div>
        <div class="side-basket__price">
            <div class="order-price">
                <div class="order-price__item">
                    <span class="order-price__name">Промежуточный итог</span>
                    <span class="order-price__value" id="price">

                    </span>
                </div>
                <div class="order-price__item">
                    <span class="order-price__name">Доставка</span>
                    <span class="order-price__value">0 <span>UZS</span></span>
                </div>
            </div>
            <a href="{{route('order', app()->getLocale())}}">
				<button class="order-add btn">
					Оплатить
				</button>
    		</a>
        </div>
    </div>
</div>

<aside class="side">
    <div class="side__logo">
        <a href="index.html">
            <img src="img/logo.svg" alt="SUU" title="SUU">
        </a>
    </div>
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
    <div class="side__copy">
        &copy; 2021 «SUU.UZBEKISTAN»
    </div>
</aside>

<!------------------------- Mobile Menu ------------------------->
<div class="mobile-menu">
    <div class="mobile-menu__head">
        <div class="mobile-menu__logo">
            <a href="index.html">
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
                {{__('navHome')}}
            </a>
        </li>
        <li>
            <a href="#about" data-menuanchor="about">
                {{__('navAbout')}}
            </a>
        </li>
        <li>
            <a href="#products" data-menuanchor="products">
                {{__('navProducts')}}
            </a>
        </li>
        <li>
            <a href="#services" data-menuanchor="services">
                {{__('navServices')}}
            </a>
        </li>
        <li>
            <a href="#news" data-menuanchor="news">
                {{__('navNews')}}
            </a>
        </li>
        <li>
            <a href="#contact" data-menuanchor="contact">
                {{__('navContact')}}
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
        @if(app()->getLocale() != 'ru')
			<a href="{{ route(Route::currentRouteName(), 'ru') }}">
				РУ
			</a>
		@endif
		@if(app()->getLocale() != 'uz')
			<a href="{{ route(Route::currentRouteName(), 'uz') }}">
				UZ
			</a>
		@endif
		@if(app()->getLocale() != 'en')
			<a href="{{ route(Route::currentRouteName(), 'en') }}">
				EN
			</a>
		@endif
    </div>
</div>


<!--------------------------- Header --------------------------->
<header class="header">
		<div class="container">
			<nav class="header-menu">
				<ul class="menu">
					<li>
						<a href="#main" data-menuanchor="main">
							{{__('navHome')}}
						</a>
					</li>
					<li>
						<a href="#about" data-menuanchor="about">
							{{__('navAbout')}}
						</a>
					</li>
					<li>
						<a href="#products" data-menuanchor="products">
							{{__('navProducts')}}
						</a>
					</li>
					<li>
						<a href="#services" data-menuanchor="services">
							{{__('navServices')}}
						</a>
					</li>
					<li>
						<a href="#news" data-menuanchor="news">
							{{__('navNews')}}
						</a>
					</li>
					<li>
						<a href="#contact" data-menuanchor="contact">
							{{__('navContact')}}
						</a>
					</li>
				</ul>
			</nav>
			<ul class="header-side">
				<li class="header-lang">
					<div class="header-lang__open">
						@if(app()->getLocale() == 'ru')
						РУ
						@elseif(app()->getLocale()=='en')
						EN
						@elseif(app()->getLocale()=='uz')
						UZ
						@else
						@endif
						<svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.495008 0.690059V1.57506L4.65001 5.73006C4.84501 5.92506 5.16001 5.92506 5.35501 5.73006L9.51001 1.57506V0.690059H8.62501L5.00001 4.31006L1.37501 0.685059L0.495008 0.690059Z" fill="white"/>
						</svg>
					</div>
					<div class="header-lang__dropdown header-side__dropdown">
						@if(app()->getLocale() != 'ru')
							<a href="{{ route(Route::currentRouteName(), 'ru') }}">
								РУ
							</a>
						@endif
						@if(app()->getLocale() != 'uz')
							<a href="{{ route(Route::currentRouteName(), 'uz') }}">
								UZ
							</a>
						@endif
						@if(app()->getLocale() != 'en')
							<a href="{{ route(Route::currentRouteName(), 'en') }}">
								EN
							</a>
						@endif
					</div>
				</li>
				<li class="header-basket">
					<div class="header-side__btn">
                        <a href="{{route('order', app()->getLocale())}}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 6V4H10V6H14ZM4 9V18C4 18.55 4.45 19 5 19H19C19.55 19 20 18.55 20 18V9C20 8.45 19.55 8 19 8H5C4.45 8 4 8.45 4 9ZM20 6C21.11 6 22 6.89 22 8V19C22 20.11 21.11 21 20 21H4C2.89 21 2 20.11 2 19L2.01 8C2.01 6.89 2.89 6 4 6H8V4C8 2.89 8.89 2 10 2H14C15.11 2 16 2.89 16 4V6H20Z" fill="white"/>
                            </svg>
                        </a>
					</div>
					<span id="quantity_product">
					<?php
						$k = 0;
						if(session()->get('cart') != null){
							foreach(session()->get('cart') as $key=>$value){
							$k++;
						}
						}
						?>{{ $k }}
					</span>
				</li>
				@if(auth()->user())
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
				@endif
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

<div id="fullPage">
	<section class="section main">
			<div class="container">
				<div class="main-wrap">
					<h1 class="section__title">
						{{__('homeMainTitle')}}
					</h1>
					<div class="section__text">
						{{__('homeMainTitleText')}}
					</div>
					<div class="section__main">
						<div class="main-elements">
							<h3 class="main-elements__title">
								{{__('homeMainTitleElements')}}
							</h3>
							<div class="main-elements__wrap">
								<div class="main-elements__item">
									<div class="main-elements__name">
										{{__('homeMainTitleElement_name_1')}}
									</div>
									<div class="main-elements__weight">
										30 <span style="font-size: 16px;">{{__('homeMainTitleElement_weight')}}</span>
									</div>
									<div class="main-elements__percent">
										10 %
									</div>
								</div>
								<div class="main-elements__item">
									<div class="main-elements__name">
										{{__('homeMainTitleElement_name_2')}}
									</div>
									<div class="main-elements__weight">
										30 <span style="font-size: 16px;">{{__('homeMainTitleElement_weight')}}</span>
									</div>
									<div class="main-elements__percent">
										10 %
									</div>
								</div>
							</div>
						</div>
						<div class="main-btns">
							<a href="#" class="btn">
								{{__('homeMainButtonMore')}}
							</a>
							<a href="#" class="btn btn-trans feedback-open">
								{{__('homeMainButtonSubmit')}}
							</a>
						</div>
					</div>
				</div>
				<div class="main-carousel owl-carousel">
					@foreach($products as $product)
						<div class="main-carousel__item">
							<div class="main-carousel__img">
								<img data-src="{{$product->image_path}}/{{$product->image}}" alt="SUU" class="owl-lazy">
							</div>
							<div class="main-carousel__info">
								<div class="main-carousel__name">
									SUU
								</div>
								<div class="main-carousel__desc">
									{{$product->name_uz}}
								</div>
								<div class="main-carousel__size">
									{{$product->size}} l
								</div>
							</div>
						</div>
					@endforeach

				</div>
				<div class="main-animation">
					<div class="main-animation__item">
						<img src="img/main-anim1.png" alt="ico">
					</div>
					<div class="main-animation__item">
						<img src="img/main-anim2.png" alt="ico">
					</div>
					<div class="main-animation__item">
						<img src="img/main-anim3.png" alt="ico">
					</div>
					<div class="main-animation__item">
						<img src="img/main-anim4.png" alt="ico">
					</div>
					<div class="main-animation__item">
						<img src="img/main-anim5.png" alt="ico">
					</div>
					<div class="main-animation__item">
						<img src="img/main-anim6.png" alt="ico">
					</div>
					<div class="main-animation__item">
						<img src="img/main-anim7.png" alt="ico">
					</div>
					<div class="main-animation__item">
						<img src="img/main-anim8.png" alt="ico">
					</div>
					<div class="main-animation__item">
						<img src="img/main-anim9.png" alt="ico">
					</div>
				</div>
			</div>
	</section>
	<section class="section about pattern">
			<div class="container">
				<div class="section-wrap">
					<div class="about-content">
						<div class="section-content">
							<h2 class="section__title">
								{{__('homeAboutTitle')}} «SUU.UZBEKISTAN»
							</h2>
							<div class="section__text">
								{{__('homeAboutTitleText')}}
							</div>
						</div>
						<a href="{{route('about', app()->getLocale())}}" class="about__btn btn">
							{{__('aboutTitle')}}
						</a>
					</div>
					<div class="section__main">
						<div class="about-list">
							<div class="about-list__item">
								<div class="about-list__img">
									<img src="img/about.png" alt="about">

									<div class="dots">
										<div class="dot"></div>
										<div class="dot"></div>
										<div class="dot"></div>
									</div>
								</div>
								<div class="about-list__number">
									01
								</div>
								<div class="about-list__name">
									{{__('homeAboutCard1')}}
								</div>
								<div class="about-list__desc">
									{{__('homeAboutCard1Text')}}
								</div>
							</div>
							<div class="about-list__item">
								<div class="about-list__img">
									<img src="img/about.png" alt="about">

									<div class="dots">
										<div class="dot"></div>
										<div class="dot"></div>
										<div class="dot"></div>
									</div>
								</div>
								<div class="about-list__number">
									02
								</div>
								<div class="about-list__name">
									{{__('homeAboutCard2')}}
								</div>
								<div class="about-list__desc">
									{{__('homeAboutCard2Text')}}
								</div>
							</div>
							<div class="about-list__item">
								<div class="about-list__img">
									<img src="img/about.png" alt="about">

									<div class="dots">
										<div class="dot"></div>
										<div class="dot"></div>
										<div class="dot"></div>
									</div>
								</div>
								<div class="about-list__number">
									03
								</div>
								<div class="about-list__name">
									{{__('homeAboutCard3')}}
								</div>
								<div class="about-list__desc">
									{{__('homeAboutCard3Text')}}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<section class="section products">
			<div class="container">
				<div class="section-wrap">
					<div class="products-content">
						<div class="section-content">
							<h2 class="section__title">
								{{__('homeProductTitle')}}
							</h2>
							<div class="section__text">
								{{__('homeProductTitleText')}}
							</div>
						</div>
						<a href="#" class="products__btn btn feedback-open">
							{{__('homeProductButton')}}
						</a>
					</div>
					<div class="section__main">
						<div class="products-choose">
							<div class="products-choose__item">
								<div class="products-choose__name">
									{{__('homeProductCat1')}}
								</div>
								<ul class="products-list">
									@foreach(\App\Models\Product::where('cat_id', 2)->get() as $data)
										<li>
											<div class="products-list__img @if($data->size == 1.5) products-list__img-big @elseif($data->size == 1) products-list__img-medium @elseif($data->size == 0.5) products-list__img-small @endif">
												<img src="{{ $data->image_path }}/{{ $data->image }}" alt="nogaz">
											</div>
											<div class="products-list__size">
												{{ $data->size }} L
											</div>
											<div class="products-list__basket" onclick="addBasket({{ $data->id }})">
												<img src="img/basket.png" alt="ico">
											</div>
										</li>
									@endforeach
								</ul>
							</div>
							
							<div class="products-choose__item">
							
								<div class="products-choose__name">
									{{__('homeProductCat2')}}
								</div>
								
								<ul class="products-list">
									@foreach(\App\Models\Product::where('cat_id', 1)->get() as $data)
										<li>
											<div class="products-list__img @if($data->size == 1.5) products-list__img-big @elseif($data->size == 1) products-list__img-medium @elseif($data->size == 0.5) products-list__img-small @endif">
												<img src="{{ $data->image_path }}/{{ $data->image }}" alt="nogaz">
											</div>
											<div class="products-list__size">
												{{ $data->size }} L
											</div>
											<div class="products-list__basket" onclick="addBasket({{ $data->id }})">
												<img src="img/basket.png" alt="ico">
											</div>
										</li>
									@endforeach	
								</ul>
							</div>
										
							<div class="products-choose__item">
								<div class="products-choose__name">
									{{__('homeProductCat3')}}
								</div>
								<ul class="products-list">
									@foreach(\App\Models\Product::where('cat_id', 3)->get() as $data)
										<li>
											<div class="products-list__img products-list__img-cooler">
												<img src="{{ $data->image_path }}/{{ $data->image }}" alt="nogaz">
											</div>
											<div class="products-list__size">
												{{ $data->size }} L
											</div>
											<div class="products-list__basket" onclick="addBasket({{ $data->id }})">
												<img src="img/basket.png" alt="ico">
											</div>
										</li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<section class="section services">
			<div class="container">
				<div class="section-wrap">
					<div class="services__title">
						<h2 class="section__title">
							{{__('homeServiceTitle')}}
						</h2>
						<a href="#" class="services__btn btn feedback-open">
							{{__('homeServiceButton')}}
						</a>
					</div>
					<div class="section__main">
						<div class="services-content">
							<div class="services-item">
								<h3 class="services-item__title">
									{{__('homeService1Title')}}
								</h3>
								<div class="services-item__text">
									{{__('homeService1TitleText')}}	
								</div>
								<div class="services-item__bottles">
									<img src="img/services1.png" alt="bottle">
									<img src="img/services2.png" alt="bottle">
								</div>
							</div>
							<div class="services-item">
								<h3 class="services-item__title">
									{{__('homeService2Title')}}
								</h3>
								<div class="services-item__text">
									{{__('homeService2TitleText')}}
								</div>
								<div class="services-item__truck">
									<img src="img/truck.png" alt="truck">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<section class="section news pattern">
			<div class="container">
				<div class="section-wrap">
					<div class="news-content">
						<div class="section-content">
							<h2 class="section__title">
								{{__('homeNewsTitle')}}
							</h2>
							<div class="section__text">
								{{__('homeNewsTitleText')}}
							</div>
						</div>
						<a href="{{route('front.news', app()->getLocale())}}" class="news__btn btn">
							{{__('homeNewsButton')}}
						</a>
					</div>
					<div class="section__main">
						<div class="news-arrows">
							<span class="arrow-left">
								<img src="img/chevron_left.svg" alt="ico">
							</span>
							<span class="arrow-right">
								<img src="img/chevron_right.svg" alt="ico">
							</span>
						</div>
						<div class="news-carousel owl-carousel">
							@foreach($news as $news)
								<div class="news-carousel__item">
									<div class="news-carousel__img">
										<img data-src="{{$news->image_path}}/{{$news->image}}" class="owl-lazy" alt="news">
									</div>
									<div class="news-carousel__text">
										@if(app()->getLocale()=='uz')
											{{$news->name_uz}}
										@elseif(app()->getLocale()=='ru')
											{{$news->name_ru}}
										@elseif(app()->getLocale()=='en')
											{{$news->name_en}}
										@else
										@endif
									</div>
									<div class="news-carousel__info">
										<span>
											{{explode(".", $news->updated_at->format('d.m.Y'))[0].'.'
											.$months[explode(".", $news->updated_at->format('d.m.Y'))[1]].'.'.
											explode(".", $news->updated_at->format('d.m.Y'))[2]
											}}
										</span>
										<span><img src="img/eye.svg" alt="ico">20</span>
									</div>
									<a href="#"></a>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
	</section>
	<section class="section contact">
			<div class="container">
				<div class="section-wrap">
					<div class="contact-content">
						<h2 class="section__title">
							{{__('homeContactTitle')}}
						</h2>
						<div class="section__main">
							<div class="contact-item">
								<div class="contact-item__name">
									{{__('homeContactForExportImport')}}:
								</div>
								<div class="contact-item__value">
									<a href="mailto:SUU.UZBEKISTAN@suu.uz">SUU.UZBEKISTAN@suu.uz</a>
								</div>
							</div>
							<div class="contact-item">
								<div class="contact-item__name">
									{{__('homeContactPhone')}}:
								</div>
								<div class="contact-item__value">
									<a href="tel:+998911529721">+998 91 152 97 21 </a>
									<a href="tel:+998911529721">+998 91 152 97 21 </a>
								</div>
							</div>
							<div class="contact-item">
								<div class="contact-item__name">
									{{__('homeContactMail')}}:
								</div>
								<div class="contact-item__value">
									<a href="mailto:info@SUU.UZBEKISTAN.uz">info@SUU.UZBEKISTAN.uz
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="contact__bottle">
					<img src="img/contact.png" alt="bottle">
				</div>
			</div>
			<div class="contact__map">
				<div id="map"></div>
			</div>
	</section>
</div>

<div class="tel-popup feedback-open">
    <img src="img/tel-popup.png" alt="ico">
</div>

<script src="/js/jquery-3.4.1.min.js"></script>
<script src="/js/jquery.inputmask.min.js"></script>
<script src="/js/owl.carousel.js"></script>
<script src="/js/fullpage.min.js"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script src="/js/map.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/jquery.ripples-min.js"></script>
<script src="/js/gsap.min.js"></script>
<script src="/js/dobpicker.js"></script>
<script src="/js/main.js"></script>
<script src="/js/basket.js"></script>

<script>
    $('#fullPage').fullpage({
        anchors: ['main', 'about', 'products', 'services', 'news', 'contact'],
        onLeave:function(origin,destination,direction) {

            const section = destination.item;
            const text = section.querySelectorAll('.section__text');
            const main = section.querySelectorAll('.section__main')
            const title = section.querySelector('.section__title');
            title.innerHTML = title.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
            const newTitle = section.querySelectorAll('.letter')
            const tl = new TimelineMax();
            tl.staggerFrom(newTitle, .5, {
                opacity: 0,
                ease: Power4.easeInOut
            }, 0.07, 0);
            tl.fromTo(text, .7, { y: "50", opacity: 0 }, { y: "0", opacity: 1 }, .6);
            tl.fromTo(main, .7, { x: "-50", opacity: 0 }, { x: "0", opacity: 1 }, .9);
        }
    })

    // ПРЕЛОАДЕР
    var preloader = $('.preloader'),
        imagesCount = $('img').length,
        percent = 100 / imagesCount,
        progress = 0,
        imgSum = $('img').length,
        loadedImg = 0;

    for (var i = 0; i < imagesCount; i++) {
        var img_copy = new Image();
        img_copy.src = document.images[i].src;
        img_copy.onload = img_load;
        img_copy.onerror = img_load;
    }

    function img_load() {
        progress += percent;
        loadedImg++;
        $('.preloader__loading').css('width', `${progress}vw`)
        $('.preloader__percent span').text(progress.toFixed(0))
        if (progress >= 100 || loadedImg == imagesCount) {
            setTimeout(() => {
                preloader.delay(500).fadeOut('slow');
                sessionStorage.setItem('preloader', false)
            }, 2300)
        }
    }

</script>
</body>
</html>
