<h1>Email Verification Mail</h1>
  
Please verify your email with bellow link: 
<a href="{{ route('auth.email-verify', $mailData['token']) }}">Verify Email</a>
<br>
<p>{{$mailData['message']}}</p>