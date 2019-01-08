<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
        $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:30'],
            'last_name' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'birthdate' => ['required'],
            'avatar' => ['image'],
            'genre' => ['required'],
            'province' => ['required'],
            'city' => ['required'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ],  [
            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre solo puede estar formado por letras.',
            'name.max' => 'Máximo 20 caracteres.',
            'last_name.required' => 'El apellido es obligatorio.',
            'last_name.string' => 'El apellido solo puede estar formado por letras.',
            'last_name.max' => 'Maximo 30 caracteres.',
            'email.required' => 'El email es obligatorio.',
            'email' => 'Ingrese un email valido',
            'birthdate.required' => 'La fecha de nacimiento es requerida.',
            'avatar.image' => 'La imagen debe ser (jpeg, png, bmp, gif, or svg).',
            'genre.required' => 'Debe elegir una de las opciones.',
            'province.required' => 'La provincia es obligatoria.',
            'city.required' => 'La ciudad es obligatoria.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.string' => 'La contraseña solo puede tener letras.',
            'password.min' => 'La contraseña debe tener mas de 6 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.'
        ]);

        

        // return Validator::make($data, [
        //     'name' => ['required', 'string', 'max:30'],
        //     'last_name' => ['required', 'string', 'max:30'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:6', 'confirmed'],
        // ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'genre' => $data['genre'],
            'birthdate' => $data['birthdate'],
            'province' => $data['province'],
            'city' => $data['city'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
