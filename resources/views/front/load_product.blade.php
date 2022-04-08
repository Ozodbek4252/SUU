<?php 
$load = session()->get('load');
?>
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
                {{-- <span>
                    {{explode(".", $news->updated_at->format('d.m.Y'))[0].'.'
                    .$months[explode(".", $news->updated_at->format('d.m.Y'))[1]].'.'.
                    explode(".", $news->updated_at->format('d.m.Y'))[2]
                    }}
                </span> --}}
                <span><img src="img/eye-gray.svg" alt="ico">20</span>
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