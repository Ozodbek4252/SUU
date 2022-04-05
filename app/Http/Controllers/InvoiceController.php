<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index(){
        $invoice = Invoice::all();
        return view('invoice.index', ['invoice' => $invoice]);
    }
    
    public function orders($lang, $id){
        $orders = Order::where('invoice_id', $id)->get();
        $product = Product::find(10);
        return view('invoice.orders', ['orders' => $orders]);
    }
}
