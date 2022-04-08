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
				<a href="{{route('home', app()->getLocale())}}">
					{{__('navHome')}}
				</a>
			</li>
			<li>
				<a href="{{route('about', app()->getLocale())}}">
					{{__('navAbout')}}
				</a>
			</li>
			<li>
				<a href="/">
					{{__('navProducts')}}
				</a>
			</li>
			<li>
				<a href="/">
					{{__('navServices')}}
				</a>
			</li>
			<li>
				<a href="{{route('front.news', app()->getLocale())}}">
					{{__('navNews')}}
				</a>
			</li>
			<li>
				<a href="/">
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
			<a href="{{ route(Route::currentRouteName(), ['ru', \Request::segment(3)]) }}">
				РУ
			</a>
			<a href="{{ route(Route::currentRouteName(), ['uz', \Request::segment(3)]) }}">
				UZ
			</a>
			<a href="{{ route(Route::currentRouteName(), ['en', \Request::segment(3)]) }}">
				EN
			</a>
		</div>
	</div>

	<!-- НОВОСТИ -->
	<section class="news-main">
		<div class="container">
			<div class="news-main__content">
				<h1 class="news__title section__title">
					{{__('homeNewsTitle')}}
				</h1>
				<div class="news__text section__text">
					{{__('newsTitleText')}}
				</div>
			</div>
			<?php 
			$load = session()->get('load') ;
			$load['load'] = 3;
			?>
			<div id="news-wrap">
				<div class="news-wrap">
					@foreach(App\Models\News::orderBy('id', 'desc')->take($load['load'])->get() as $news)
						<div class="news-carousel__item">
							<div class="news-carousel__img">
								<img src="{{$news->image_path}}/{{$news->image}}" alt="news">
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
								<span><img src="img/eye-gray.svg" alt="ico">{{$news->view}}</span>
							</div>
							<a href="{{route('single-news', [app()->getLocale(), $news->id] )}}"></a>
						</div>
					@endforeach
				</div>
				<div class="news-more">
					<a onclick="load({{ $load['load'] }})">
						<img src="img/more.svg" alt="ico">
						{{__('newsButton')}}
					</a>
				</div>
			</div>
		</div>
	</section>
	<script>
		function load($q){
			$k = $q+3;
			console.log($k);
			$.ajax({
				type: 'get',
				url:'/load/'+$k,
				dataType: 'json',
				success: function(){
					$("#news-wrap").load('/load');
				}
			});
		}
	</script>

@endsection




