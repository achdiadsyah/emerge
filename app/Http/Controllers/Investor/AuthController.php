<?php

namespace App\Http\Controllers\Investor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        $data=array(
            'title' => 'Investor Login Page'
        );
        return view('Investor.login', $data);
    }
}

