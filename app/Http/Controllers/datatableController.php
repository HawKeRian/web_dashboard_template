<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datatableController extends Controller
{
    // Datatable Page
    public function index(){
        return view("components.datatable");
    }
}
