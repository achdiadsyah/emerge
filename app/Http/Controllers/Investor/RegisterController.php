<?php

namespace App\Http\Controllers\Investor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }
}
