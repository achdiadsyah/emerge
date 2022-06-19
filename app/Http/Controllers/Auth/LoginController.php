<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email:rfc,filter', 'max:255'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('email', 'password');
        if(auth()->attempt($credentials)){
            switch (url()->previous()) {
            // TODO:uncomment once admin routes created
            // case Str::contains(url()->previous(), ['admin']):
            //     return redirect()->route('admin.admin');
            //     break;
            case Str::contains(url()->previous(), ['investor']):
                
                return redirect()->route('investor.dashboard');
                // break;
            // TODO:uncomment once startup routes created
            // case Str::contains(url()->previous(), ['startup']):
            //     return redirect()->route('startup.startup');
            //     break;
            }
        }else{
            switch (url()->previous()) {
            // TODO:uncomment once admin login page created
            // case Str::contains(url()->previous(), ['admin']):
            //     return redirect("admin.login")->withSuccess('Oppes! You have entered invalid credentials');
            //     break;
            case Str::contains(url()->previous(), ['investor']):
                return to_route('investor.login')->withInput()->with(
                    [
                        'text' => 'You have entered invalid credentials',
                        'icon' => 'warning',
                        'confirmButtonColor' => 'warning',
                    ]
                );
                break;
            // TODO:uncomment once startup login page created
            // case Str::contains(url()->previous(), ['startup']):
            //     return redirect("startup.login")->withSuccess('Oppes! You have entered invalid credentials');
            //     break;
            }
        }
    }

    public function logout(Request $request)
    {
        $role_id=auth()->user()->role_id;
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // // TODO:uncomment once admin login page created
        // if($role_id == 1){
        //     return redirect()->route('admin.login');
        // }
        // else
        if($role_id == 2){
            return redirect()->route('investor.login');
        }
        // // TODO:uncomment once startup login page created
        // else if($role_id == 3){
        //     return redirect()->route('startup.login');
        // }
    }
}
