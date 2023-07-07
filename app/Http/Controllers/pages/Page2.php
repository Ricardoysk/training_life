<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Routine;

class Page2 extends Controller
{
    public function index()
{
    $userRole = auth()->user()->role;

    if ($userRole === 'entrenador') {
        $entrenador = auth()->user();
        $clientes = $entrenador->clientes;
        return view('content.pages.pages-page2', compact('clientes', 'userRole'));
    }

    if ($userRole === 'cliente') {
        $personalTrainers = User::where('role', 'entrenador')->get();
        $routines = Routine::all(); // Obtén todas las rutinas disponibles
        return view('content.pages.pages-page2', compact('personalTrainers', 'routines', 'userRole'));
    }
}


  
    public function showClientForm($id)
    {
        $cliente = User::findOrFail($id);
        return view('content.pages.client-form', compact('cliente'));
    }
  
    public function showClientAvances($id)
    {
        $cliente = User::findOrFail($id);
        return view('content.pages.client-form-edit', compact('cliente'));
    }
  
    public function editClientForm($id)
    {
        $cliente = User::findOrFail($id);
        return view('content.pages.client-form-edit', compact('cliente'));
    }
  
    public function saveAvance(Request $request, $id)
    {
        $request->validate([
            // Agrega aquí las validaciones para los campos del formulario
        ]);

        // Obtener el cliente correspondiente al ID
        $cliente = User::findOrFail($id);

        // Guardar los avances y datos relacionados con el cliente
        // Puedes acceder a los datos enviados desde el formulario a través de $request
        $cliente->condicion_fisica_actual = $request->input('condicion_fisica_actual');
        $cliente->objetivo = $request->input('objetivo');
        $cliente->nivel_actividad = $request->input('nivel_actividad');
        $cliente->patologias = $request->input('patologia') == 'si' ? 'SI' : 'NO';
        $cliente->especificacion_patologia = $request->input('especificacion_patologia');
        $cliente->lesiones_molestias = $request->input('lesiones_molestias');
        $cliente->bmi_imc = $request->input('bmi');
        $cliente->grasa_corporal = $request->input('grasa_corporal');
        $cliente->musculatura_corporal = $request->input('musculatura_corporal');
        $cliente->calorias_diarias_basales = $request->input('calorias_diarias_basales');
        $cliente->edad_cuerpo = $request->input('edad_cuerpo');
        $cliente->grasa_visceral = $request->input('grasa_visceral');
        $cliente->brazo = $request->input('brazo');
        $cliente->pierna = $request->input('pierna');
        $cliente->cintura = $request->input('cintura');
        $cliente->cadera = $request->input('cadera');
        $cliente->pecho = $request->input('pecho');
        $cliente->evaluacion_fms = $request->input('evaluacion_fms');

        $cliente->save();

        // Realizar cualquier otra acción necesaria

        return redirect()->route('page2.index')->with('success', 'Avance guardado correctamente.');
    }
}
