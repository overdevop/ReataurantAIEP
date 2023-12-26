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
        $credenciales = $request->only('nombre', 'password');

        if (Auth::attempt($credenciales)) {
            // Autenticación exitosa
            return redirect()->intended('dashboard');
        }

        // Autenticación fallida
        return back()->withErrors([
            'nombre' => 'Las credenciales proporcionadas son incorrectas.',
        ]);
    }
}
