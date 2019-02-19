<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\alumno;
use App\profesor;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        $this->middleware('guest:alumno');
        $this->middleware('guest:profesor');
    }
    /* 25/01 */
    public function showAlumnoRegisterForm()
    {
        return view('auth.register', ['url' => 'alumno']);
    }

    public function showProfesorRegisterForm()
    {
        return view('auth.register', ['url' => 'profesor']);
    }
    /* Amaiera */
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /* Registro Profesor y Alumno*/


    protected function createAlumno(Request $request)
    {
        $this->validator($request->all())->validate();
        $alumno = Alumno::create([
            'nombreapellidos' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'dni' => $request['dni'],
            'direccion' => $request['direccion'],
            'ciudad' => $request['ciudad'],
            'telefono' => $request['telefono'],
        ]);
        return redirect()->intended('login/alumno');
    }

    protected function createProfesor(Request $request)
    {
        $this->validator($request->all())->validate();
        $profesor = Profesor::create([
            'nombreapellidos' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/profesor');
    }
    /* Amaiera */
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
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
