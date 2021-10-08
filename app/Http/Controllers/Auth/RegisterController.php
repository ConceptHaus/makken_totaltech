<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Direccion;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use DB;
use Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Database\Eloquent\Model;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
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
            'nombre' => 'required|string|max:255||regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
            'apellido' => 'required|string|max:255||regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
            'telefono' => 'required|string|max:255||regex:(^((\\+\\d{2}\\s)?\\(\\d{2}\\)\\s?\\d{4}\\d?\\-\\d{4})?$)',
            'correo' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function createUser(array $data)
    {
        DB::beginTransaction();
        try{
            $user = new User();
            $user->nombre = $data['nombre'];
            $user->apellido = $data['apellido'];
            $user->telefono = $data['telefono'];
            $user->correo = $data['correo'];
            $user->password = bcrypt($data['password']);
            $user->registro_admin = $data['registro_admin'];

            $direccion = new Direccion();
            $direccion->estado = " ";
            $direccion->municipio = " ";
            $direccion->colonia = " ";
            $direccion->calle = " ";
            $direccion->cp = $data['cp'];

            $user->save();
            $user->direccion()->save($direccion);

            DB::commit();
            return $user;

        }catch(Exception $e){
            DB::rollBack();
            return $e;
        }

    }

    protected function registroUser(Request $request){

        $input = $request->all();
        $validator = $this->validator($input);

        if($validator->passes()){

                $user = $this->createUser($input);

                $usercontact['correo'] = $input['correo'];

                Mail::send('auth.email.registro_email' ,$usercontact, function ($contact) use ($usercontact) {
                    $contact->from('privacidad@makken.com.mx', 'Montack');
                    $contact->to($usercontact['correo'], 'Montack | Bienvenido')->subject('Gracias por participar con Montack ¡Mucha Suerte!');
                    $contact->from('privacidad@makken.com.mx', 'Total Tech');
                    $contact->to($usercontact['correo'], 'Total Tech | Bienvenido')->subject('Gracias por participar para ganar un GoPro9 con Total Tech, ¡mucha suerte!');

                });

                if($request->admin == 0) {
                    Auth::login($user,true);
                    $json['success'] = 'success_register';
                    return response($json,200);
                }

                $json['success'] = 'success_register';
                return response($json,200);
        }
        $json['fail'] = $validator->errors()->toArray();
        return response($json,400);
    }
}
