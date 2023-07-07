<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IMCController extends Controller
{
    public function calcularIMC(Request $request)
    {
        $peso = $request->input('peso');
        $altura = $request->input('altura');
    
        $imc = $peso / ($altura * $altura);
    
        // Asignar el valor del IMC a la variable de sesión
        session()->flash('imc', $imc);
    
        return redirect()->back();
    }
}