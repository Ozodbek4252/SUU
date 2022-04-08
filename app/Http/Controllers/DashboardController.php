<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Invoice;
use App\Models\Message;
use App\Models\News;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $orders = Order::all();
        $invoices = Invoice::all();
        $messages = Message::all();
        $categories = Category::all();
        $news = News::all();
        $products = Product::all();
        
        return view('dashboard', [
                                'orders'=>$orders, 
                                'invoices'=>$invoices, 
                                'messages'=>$messages, 
                                'categories'=>$categories, 
                                'news'=>$news, 
                                'products'=>$products
                                ]);
    }
}
