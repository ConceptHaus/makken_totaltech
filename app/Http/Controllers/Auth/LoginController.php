<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function validadorLogin(array $data){
        return Validator::make($data, [
            'email' => 'required|string|email|max:255',
            'password'=>'required|string|min:6',
        ]);
    }

    public function login(Request $request){
        $validator = $this->validator($request->all());

        $email = $request->email;
        $password = $request->password;

        if($validator->passes()){
            if(auth()->attempt(array('email'=>$email,'password'=>$password))){
                if(auth()->user()->is_admin){
                    $json['admin'] = true;
                    return response()->json($json);
                }
            }
        }
        $json['fail'] = $validator->errors()->toArray();   
        return response()->json($json);
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
