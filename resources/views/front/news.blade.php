@extends('front.layout.app')

@section('content')
	<!-- ОБРАТНАЯ СВЯЗЬ -->
	<div class="popup-layer"></div>

	@include('front.component.mobile-menu')

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




