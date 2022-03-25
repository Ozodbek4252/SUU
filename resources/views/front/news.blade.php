@extends('front.layout.app')

@section('content')
	<!-- ОБРАТНАЯ СВЯЗЬ -->
	<div class="popup-layer"></div>

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

	<!-- НОВОСТИ -->
	<section class="news-main">
		<div class="container">
			<div class="news-main__content">
				<h1 class="news__title section__title">
					Новости
				</h1>
				<div class="news__text section__text">
					В наше время все заботятся о своем здоровье и потребляют только чистую воду В наше время все заботятся о своем здоровье и потребляют только чистую воду.
				</div>
			</div>
			<div class="news-wrap">
				@foreach($news as $news)
				<a class="news-carousel__item" href="{{route('single-news',$news->id)}}">
					{{-- <div class="news-carousel__item"> --}}
						<div class="news-carousel__img">
							<img src="{{$news->image_path}}/{{$news->image}}" alt="news">
						</div>
						<div class="news-carousel__text">
							{{$news->name_uz}}
						</div>
						<div class="news-carousel__info">
							<span>
								{{explode(".", $news->updated_at->format('d.m.Y'))[0].'.'
								.$months[explode(".", $news->updated_at->format('d.m.Y'))[1]].'.'.
								explode(".", $news->updated_at->format('d.m.Y'))[2]
								}}
							</span>
							<span><img src="img/eye-gray.svg" alt="ico">20</span>
						</div>
						<a href="#"></a>
					{{-- </div> --}}
				</a>
				@endforeach
			</div>
			<div class="news-more">
				<a href="#">
					<img src="img/more.svg" alt="ico">
					загрузить еще
				</a>
			</div>
		</div>
	</section>

@endsection




