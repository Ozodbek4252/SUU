<?php

namespace App\Http\Livewire;

// use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class SideBasket extends Component
{
    public $b = 'b', $carts;
    public function deleteItem($id){
        $cart = session()->get('cart');
        // dd($cart[$id]);
        // $cart[$id]->forget();
        // unset($cart[$id]);
        // Session::forget('cart', $id);
        // session()->forget('cart.{{$id}}');
        $this->b = $id;
    }
    public function render()
    {
        $this->carts = session()->get('cart');
        return view('livewire.side-basket');
    }
}
