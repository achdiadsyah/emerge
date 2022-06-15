<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $this->create($request->all());

        switch (url()->previous()) {
        case Str::contains(url()->previous(), ['admin']):
            return redirect()->route('admin.email-confirmation');
            break;
        case Str::contains(url()->previous(), ['investor']):
            return redirect()->route('investor.email-confirmation');
            break;
        case Str::contains(url()->previous(), ['startup']):
            return redirect()->route('startup.email-confirmation');
            break;
        }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'email:rfc,filter', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'password_confirmation' => ['required', 'string', 'min:8','same:password'],
            'referral' => ['max:255'],
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $role_id = null;
        switch (url()->previous()) {
        case Str::contains(url()->previous(), ['admin']):
            $role_id = 1;
            break;
        case Str::contains(url()->previous(), ['investor']):
            $role_id = 2;
            break;
        case Str::contains(url()->previous(), ['startup']):
            $role_id = 3;
            break;
        }

        return User::create([
            'role_id' => $role_id,
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'referral' => $data['referral'] ? $data['referral'] : null,
        ]);
    }
}
