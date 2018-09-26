<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use App\PasswordReset;
use Validator;
use Illuminate\Contracts\Auth\Authenticatable;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validatorReset(array $data)
    {
        return Validator::make($data, [
            'correo' => 'required|string|exists:users',
            'password' => 'required|string|min:6',
        ]);
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

      $validador = $this->validatorReset($request->all());

      if ($validador->passes()) {
        $email = $request->correo;

        $user = User::where('correo','=', $email)->first();
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(60);

        if($user->save()){
          Auth::login($user);
          
          $json['success'] = 'success_register';
          return response($json,200);
        }
      }else {
      $json['fail'] = $validador->errors()->toArray();
      return response($json,400);
    }
  }
}
