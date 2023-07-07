<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'role' => 'required|in:cliente,entrenador',
            // Agrega aquí las validaciones para los demás campos
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = $request->input('role');

        if ($user->role === 'cliente') {
            $user->peso = $request->input('peso');
            $user->altura = $request->input('altura');
            $user->genero = $request->input('genero');
            $user->edad = $request->input('edad');
        } elseif ($user->role === 'entrenador') {
            $user->especialidad = $request->input('especialidad');
        }

        $user->save();

        // Realiza cualquier otra acción necesaria, como iniciar sesión automáticamente, enviar correos electrónicos, etc.

        return redirect()->route('login')->with('success', 'Registro exitoso. Inicia sesión.');
    }
}

