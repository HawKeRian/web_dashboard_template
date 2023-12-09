<?php

namespace App\Livewire;

use Livewire\Component;

class Homepage extends Component
{
    // Login Modal
    public function login(){
        $this->dispatch('openModal', 'homepage_login');
    }

    // Render Page
    public function render(){
        return view('livewire.homepage');
    }
}
