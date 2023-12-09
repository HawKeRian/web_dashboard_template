<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class MenuMainmenu extends Component
{
    public $signifi_data;

    // Mount Parameter
    public function mount(){
        $raw_data = json_decode(Http::get('https://dummyjson.com/products'), true)["products"];
        $this->signifi_data = collect($raw_data)->take(8);
    }

    // Render Page
    public function render(){
        return view('livewire.menu-mainmenu');
    }
}
