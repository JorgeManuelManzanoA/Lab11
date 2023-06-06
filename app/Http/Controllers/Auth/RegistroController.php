<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function registrar(Request $request)
{
    $datos = $request->validate([
        'nombre' => 'required',
        'correo' => 'required|correo|unique:usuarios',
        'contraseña' => 'required|min:6',
        'numero_tarjeta' => 'required',
    ]);

    $datos['contraseña'] = bcrypt($datos['contraseña']);

    $usuario = Usuario::create($datos);

    // Puedes agregar aquí cualquier otra lógica adicional, como enviar un correo de verificación, etc.

    return redirect()->route('inicio');
}

}


