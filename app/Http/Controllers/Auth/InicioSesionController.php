<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioSesionController extends Controller
{
    public function iniciarSesion(Request $request)
{
    $datos = $request->validate([
        'correo' => 'required|correo',
        'contraseña' => 'required',
    ]);

    if (Auth::attempt($datos)) {
        // El inicio de sesión fue exitoso
        return redirect()->intended('/dashboard');
    } else {
        // Las credenciales son inválidas
        return redirect()->back()->withErrors(['correo' => 'Credenciales inválidas']);
    }
}

}
