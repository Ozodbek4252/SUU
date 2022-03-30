<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::all();
        $news = News::orderBy('id', 'DESC')->get();
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
        return view('front.index', ['products'=>$products, 'news'=>$news, 'months' => $months]);
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
        
    public function singleNews_index($language, $id)
    {
        $news = News::find($id);
        return view('front.news-single', ['news'=>$news]);
    }
}
