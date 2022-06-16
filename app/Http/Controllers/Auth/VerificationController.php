<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\UserVerify;
use Mail;
use Session;
use App\Mail\VerifyMail;


class VerificationController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware('signed')->only('verify');
        // $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function verifyAccount($token)
    {
        $verifyUser = UserVerify::where('token', $token)->first();
  
        $message = 'Sorry your email cannot be identified.';

        if(!is_null($verifyUser) ){
            $user = $verifyUser->user;
              
            if(!$user->is_email_verified) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->email_verified_at = date('Y-m-d H:i:s');
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }

        echo $message;
  
    //   return redirect()->route('login')->with('message', $message);
    }

    public function resendEmail($token)
    {
        $mailData = [
            'token' => $token,
            'message' => 'This is for testing email using smtp.'
        ];
         
        Mail::to($mailAddress)->send(new VerifyMail($mailData));
        Session::flash('email-flash', $mailAddress);
    }

    


}
