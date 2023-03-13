<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommingsoonController extends Controller
{
    public function index(){
        return view('scott/coming-soon');
    }
}
