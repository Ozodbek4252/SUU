<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Message;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.basket');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd(session()->get('cart'));

        if(session()->get('cart')){
            $invoice = new Invoice();
            $invoice->name = Str::random(10);
            // $invoice->delivery = ;

            $sum = 0;
            foreach(session()->get('cart') as $key=>$value){
                $product_id = session()->get('cart')[$key]['id'];
                $quantity = session()->get('cart')[$key]['quantity'];
                $product = Product::find($product_id);
                $sum = $sum + (int)$product->price * $quantity;
            }
            $invoice->sum = $sum;
            $invoice->save();

            foreach(session()->get('cart') as $key=>$value){
                $product_id = session()->get('cart')[$key]['id'];
                $quantity = session()->get('cart')[$key]['quantity'];

                $order = new Order();
                $order->product_id = $product_id;
                $order->quantity = $quantity;
                // $order->logo = ;
                $order->invoice_id = $invoice->id;
                $order->save();
            }
        }

        if($request->status == 'new'){
            $message = new Message();
            $message->invoice_id = $invoice->id;
            $message->phone = $request->phone;
            $message->name = $request->name;
            $message->save();
        }

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
