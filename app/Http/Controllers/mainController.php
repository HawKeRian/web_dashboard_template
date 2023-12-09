<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    // Main Menu Page
    public function index(){
        return view("components.mainmenu");
    }
}
