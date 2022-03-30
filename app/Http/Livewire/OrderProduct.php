<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;

class OrderProduct extends Component
{
    public $a = "John", $carts;

    public function addCart($id){
        $product = Product::find($id);
        if(!$product) {abort(404);}
        $cart = session()->get('cart');
        if(!$cart) { $cart = [ $id => ["id"=>$id] ]; }
        else{ $cart[$id] = ["id" => $id]; }
        session()->put('cart', $cart);

        // $this->a = session()->get('id');
    }

    public function add(){
    }

    public function render()
    {
        $this->carts = session()->get('cart');
        return view('livewire.order-product');
    }
}
