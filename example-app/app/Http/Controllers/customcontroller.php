<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customcontroller extends Controller
{
    public function index(){
        return view('welcome');
    }
}
