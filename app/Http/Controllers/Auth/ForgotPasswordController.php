<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;


use Mail;
use App\User;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */
//protected $redirectTo = '/';
    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function validadorEmail (array $data){
        return Validator::make($data, [
          'correo' => 'required|email|exists:users'
        ]);
    }

    public function forgot(Request $request){

      $validador = $this->validadorEmail($request->all());

      if ($validador->passes()) {
            $user_correo = $request->correo;

            $user = User::where('correo','=',$user_correo)->first();

            $token = Str::random(60);

            $reset = new PasswordReset;
            $reset->email = $user_correo;
            $reset->token = $token;

            $array['token'] = $token;
            $array['email'] = $user_correo;

            if($reset->save()){
              Mail::send('auth.email.email',$array , function ($message) use ($array){
                    //$message->from('comunicaciones​@mundoceys.com','Mundo Ceys');
                    $message->to($array['email']);
                    //$message->subject('Recuperación de Contraseña');
            });
          }

          $json['success'] = 'success_register';
          return response($json,200);
        }else {
          $json['fail'] = $validador->errors()->toArray();
          return response($json,400);
        }

    }

    public function reset_view($token){

      $reset = PasswordReset::where('token','=',$token)->first();

      if($reset){
        $data['email'] = $reset->email;
        $data['token'] = $token;
        return view('auth.passwords.reset', $data);
      }

      return redirect('/');


    }
  public function reset(Request $request){

    $email = $request->correo;
    echo $email;
    $user = User::where('correo','=', $email)->first();
    $user->password = bcrypt($request->password);
    $user->remember_token = Str::random(60);

    if($user->save()){
      return redirect('/login');
    }

    return response('error',200);

  }
}
