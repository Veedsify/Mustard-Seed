<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class RegisterController extends Controller
{
    public function login($slug){
        return View::make('home.login');
    }
}
