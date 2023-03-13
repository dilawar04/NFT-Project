<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;


use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function index(){
        return view ('scott/index');
    }
    public function error(){
        return view ('scott/404');
    }
}
