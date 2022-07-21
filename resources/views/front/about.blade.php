@extends('front.layout.app')

@section('content')

	<!-- ОБРАТНАЯ СВЯЗЬ -->

	<div class="popup-layer"></div>


	<!-- МОБИЛЬНОЕ МЕНЮ -->

	@include('front.component.mobile-menu')



	<!-- О НАС -->
	<section class="about-main">
		<div class="container">
			<div class="about-main__content">
				<h1 class="about__title section__title">
					{{-- ПРИРОДНАЯ ПИТЬЕВАЯ ВОДА --}}
					{{__('title')}}
				</h1>
				<div class="about__text section__text">
					<img src="img/logo-gray.svg" alt="SUU">
					{{__('aboutTopText')}}
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
			{{__('aboutProduct')}}
		</div>
	</section>
	<section class="about-equip">
		<div class="about-equip__info wow fadeInLeft" data-wow-delay=".5s">
			<div class="container">
				<h2 class="about-equip__title section__title">
					{{__('aboutEquipment')}}
				</h2>
				<div class="about-equip__text section__text">
					{{__('aboutEquipmentText')}}
				</div>
			</div>
		</div>
		<div class="about-equip__img wow fadeInRight water-anim" data-wow-delay=".5s">
			<img src="img/news1.jpg" alt="img">
		</div>
	</section>
	<section class="about-video">
		<h2 class="about-video__title section__title">
			{{__('aboutTitle')}}
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



@endsection
