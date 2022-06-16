<?php

namespace App\Http\Controllers\Investor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Investor Register Page'
        );
        return view('Investor.register', $data);
    }
}
