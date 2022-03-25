<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderProduct extends Component
{
    public $a = "John";
    public $sth = 'Something';

    public function mount(){
        $this->sth = 'somee';
    }
    
    
    public function addCart(){
        $this->sth = 'saaaaaaaaaaaaaaaaaaa';
    }

    public function add(){
        dd('sdf');
        $this->a = "Kim";
    }

    public function render()
    {
        return view('livewire.order-product');
    }
}
