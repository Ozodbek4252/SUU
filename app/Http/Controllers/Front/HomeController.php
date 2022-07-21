<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        
        if (session()->get('locale') == '') {
            session()->put('locale', 'ru');
            app()->setLocale('ru');
        } else {
            app()->setLocale(session()->get('locale'));
        }
        $lan = session()->get('locale');
        
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
        return view('front.index', ['products'=>$products, 'news'=>$news, 'months' => $months, 'lan' => $lan]);
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
        $users = session()->get('users');

        if(!$users){
                $users[$_SERVER['REMOTE_ADDR']] = $_SERVER['REMOTE_ADDR'];
        }
        session()->put('users', $users);
        $news = News::find($id);
        if(!$users){
            if($news->view==null){
                $news->view = 1;
            }else{
                $news->view = $news->view + 1;
            }
            $news->save();
        }

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
        $news = News::find($id);
        $all_news = News::all();
        return view('front.news-single', ['news'=>$news, 'all_news'=>$all_news, 'months'=>$months]);
    }
}
