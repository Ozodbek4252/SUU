<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Index extends Component
{
    public $name = 'Ozodbek';
    
    public function render()
    {
        return view('livewire.index')->layout('front.layout.app-wire');
    }

    public function test(){
        $this->name = "Cerry";
    }

}
