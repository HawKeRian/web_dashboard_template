<?php

namespace App\Livewire;

use LivewireUI\Modal\ModalComponent;

class HomepageLogin extends ModalComponent
{
    public $email = "";
    public $password = "";

    // Authenticate User
    public function authenticate(){
        return redirect()->route("mainmenu");
    }


    // Render Modal
    public function render(){
        return view('livewire.homepage-login');
    }
}
