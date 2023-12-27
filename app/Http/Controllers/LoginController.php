<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function index()
    {
        return view('login.index');
    }

    public function iniciarSesion(Request $request)
    {


        //$remember = request()->filled('remember');
        $usuario = request()->validate([
            'nombre' => ['required', 'string'],
            'password' => ['required', 'string']
        ]);

        //return $usuario;

        if (Auth::attempt($usuario)) {

            request()->session()->regenerate();

            return redirect()->intended('escritorio');
        } else {
            return back()->withErrors([
                'message' => 'El E-Mail o Contraseña son incorrectos'
            ]);
        }
    }
}
