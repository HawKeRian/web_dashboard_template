<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class archiveController extends Controller
{
    // Archive / Logging Page
    public function index(){
        return view('components.archive');
    }
}
