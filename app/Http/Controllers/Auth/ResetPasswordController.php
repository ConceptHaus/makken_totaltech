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
use Illuminate\Support\Facades\Validator;

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
            'correo' => 'required|string|exists:users,email',
            'password' => 'required|string|min:6|same:password_confirmation',
        ]);
    }

    // protected function resetPassword(Request $request)
    // {
    //     $input = $request->all();
    //
    //     $validator = $this->validatorReset($input);
    //     if ($validator->passes()) {
    //     $user = User::where('user.correo','=', $request->correo)->first();
    //     $user->password = bcrypt($request->password);
    //     $user->remember_token = Str::random(60);
    //     $user->save();
    //
    //
    //     Auth::login($user,true);
    //
    //     $json['success'] = "Correcto";
    //     return json_encode($json);
    //   }else {
    //     $json['errors'] = "Error";
    //     // $json['token'] = $this->$request->token;
    //     return json_encode($json);
    //   }
    //
    // }
}
