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

    public function showLoginForm() {
        return view('auth.login');
    }

    public function showLoginFormTotaltech() {
        return view('totaltech.auth.login');
    }

    public function login(Request $request){
        $validator = $this->validadorLogin($request->all());

        $email = $request->email;
        $password = $request->password;
        $id_promo = $request->id_promo;

        if($validator->passes()){
           
            if(auth()->attempt(array('correo'=>$email,'password'=>$password))){
               
                if(auth()->user()->isAdmin){
                    $json['admin'] = true;
                    return response($json,200);
                } else {
                    if (auth()->user()->id_promo == $id_promo) {
                        $json['id_promo'] =  $id_promo;
                        $json['success'] = true;
                        return response($json,200);
                    } else {
                        Auth::logout();
                        $json['fail']['error'] = 'La dirección de correo electrónico y/o la contraseña que has ingresado no coinciden.';
                        return response($json, 400);
                    }
                }
               
            }
            $json['fail']['error'] = 'La dirección de correo electrónico y/o la contraseña que has ingresado no coinciden.';
            return response($json, 400);
        }
        $json['fail'] = $validator->errors()->toArray();
        $json['id_promo'] =  $id_promo;
        return response($json, 400);
    }

    public function logout($id){
        Auth::logout();
        if ($id  == '1') {
            return redirect('/');
        } else if ($id  === '2') {
            return redirect('/totaltech');
        } else return redirect('/');
       
        
    }
    
    public function logoutTotaltech(){
        Auth::logout();
        return redirect('/totaltech');
    }
}
