<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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
        $this->middleware('guest:alumno')->except('logout');
        $this->middleware('guest:profesor')->except('logout');
    }

    public function showAlumnoLoginForm()
    {
        return view('auth.login', ['url' => 'alumno']);
    }

    public function alumnoLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        if (Auth::guard('alumno')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
        session()->put('rol', 'alumno');

        session()->put('email', $request->email);

            return redirect()->intended('/index');
        }

        return back()->withInput($request->only('email', 'remember'));
    }

    public function showProfesorLoginForm()
    {
        return view('auth.login', ['url' => 'profesor']);
    }

    public function profesorLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('profesor')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

        session()->put('rol', 'profesor');

        session()->put('email', $request->email);
            return redirect()->intended('/index');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}