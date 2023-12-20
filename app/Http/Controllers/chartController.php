<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chartController extends Controller
{
    // Chart Plotting Page
    public function index(){
        return view('components.chart');
    }
}
