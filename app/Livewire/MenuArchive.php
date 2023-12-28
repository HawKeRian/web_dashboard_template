<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class MenuArchive extends Component
{

    // Mount Parameter
    public function mount(){
    }


    // Render Page
    public function render(){
        return view('livewire.menu-archive');
    }
}
