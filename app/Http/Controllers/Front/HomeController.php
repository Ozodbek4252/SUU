<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function  about(){
        return view('front.about');
    }

    public function  news(){
        $news = News::all();
        $months = array(
            "01"=>"Yan",
            "02"=>"Feb", 
            "03"=>"Mar",
            "04"=>"Apr",
            "05"=>"May",
            "06"=>"Iyn",
            "07"=>"Iyl",
            "08"=>"Aug",
            "09"=>"Sen",
            "10"=>"Okt",
            "11"=>"Noy",
            "12"=>"Dek",
        );
        
        return view('front.news', ['news' => $news, 'months' => $months]);
    }
        
    public function singleNews_index($id)
    {
        $news = News::find($id);
        return view('front.news-single',compact('news'));
    }

    public function  korzina(){
        return view('front.basket');
    }
}
