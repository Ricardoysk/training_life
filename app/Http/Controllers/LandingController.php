<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
{
    // Lógica de la página de aterrizaje

    return view('landing');
}
}