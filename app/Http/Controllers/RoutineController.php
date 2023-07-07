<?php

namespace App\Http\Controllers;

use App\Models\Routine;
use Illuminate\Http\Request;

class RoutineController extends Controller
{
    public function index()
    {
        $routines = Routine::all();
        $userRole = 'entrenador'; // Reemplaza 'entrenador' con el valor correspondiente a tu lógica de autenticación

        return view('routines.index', compact('routines', 'userRole'));
    }

    public function create()
    {
        return view('routines.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'details' => 'required',
            'image' => 'nullable|image',
        ]);

        $user = auth()->user();
        $routine = new Routine($validatedData);
        //Me sale como error routines de la siguiente linea, a que se debe?
        $user->routines()->save($routine);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('public/images');
            $routine->image = $imagePath;
            $routine->save();
        }

        return redirect()->route('routines.index')->with('success', 'Rutina creada exitosamente.');
    }

    public function edit(Routine $routine)
    {
        return view('routines.edit', compact('routine'));
    }

    public function update(Request $request, Routine $routine)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'details' => 'required',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('public/images');
            $validatedData['image'] = $imagePath;
        }

        $routine->update($validatedData);

        return redirect()->route('routines.index')->with('success', 'Rutina actualizada exitosamente.');
    }

    public function destroy(Routine $routine)
    {
        $routine->delete();

        return redirect()->route('routines.index')->with('success', 'Rutina eliminada exitosamente.');
    }

    //Borrar en caso de que no funcione

    public function show(Routine $routine)
    {
        return view('routines.show', compact('routine'));
    }

    public function choose(Routine $routine)
{
    // Obtén el usuario autenticado, que sería el cliente
    $cliente = auth()->user();

    // Asigna la rutina elegida al cliente
    $cliente->rutina_elegida_id = $routine->id;
    $cliente->save();

    // Redirecciona a la página de rutinas o realiza cualquier otra acción necesaria
    return redirect()->route('routines.index')->with('success', 'Rutina elegida exitosamente.');
}

}
