<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    // Homepage
    public function index(){
        return view('index');
    }
}
