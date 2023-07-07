<?php
namespace App\Http\Controllers\pages;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\pages\EleccionEntrenadores;
use App\Http\Controllers\EntrenadorController;
use App\Http\Controllers\IMCController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\RoutineController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Main Page Route

Route::get('/landing', [LandingController::class, 'index'])->name('landing');

// pages

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
$controller_path = 'App\Http\Controllers';

    Route::get('/', $controller_path . '\pages\HomePage@index')->name('pages-home');
    Route::get('/page-2', $controller_path . '\pages\Page2@index')->name('pages-page-2');
    Route::get('/page-chat', $controller_path . '\pages\Pagechat@index')->name('pages-page-chat');

    

    //ENTRENADORES


    Route::resource('entrenadores', EntrenadorController::class);
    

    Route::post('/calcular-imc', [IMCController::class, 'calcularIMC'])->name('calcularIMC');
    
    Route::get('/filtered-menu', $controller_path . '\pages\HomePage@filtered-menu')->name('getFilteredMenu');
    Route::get('/rutinas', [HomePage::class, 'rutinas'])->name('rutinas');

    Route::get('/rutinas/agregar', 'RutinaController@agregar')->name('rutinas.agregar');
    Route::post('/rutinas/guardar', 'RutinaController@guardar')->name('rutinas.guardar');
    Route::get('/rutinas/editar/{id}', 'RutinaController@editar')->name('rutinas.editar');
    Route::post('/rutinas/actualizar/{id}', 'RutinaController@actualizar')->name('rutinas.actualizar');
    Route::post('/rutinas/eliminar/{id}', 'RutinaController@eliminar')->name('rutinas.eliminar');
    

    //CLIENTES

    Route::get('/page2', [Page2::class, 'index'])->name('page2.index');
    Route::get('/clientes', [Page2::class, 'index'])->name('clientes.index');
    Route::get('/clientes/{id}/form', [Page2::class, 'showClientForm'])->name('clientes.form');
    Route::post('/clientes/{id}/avance/save', [Page2::class, 'saveAvance'])->name('clientes.avance.save');
    Route::post('/clientes/{id}', [Page2::class, 'saveAvance'])->name('clientes.store');
    Route::post('/clientes/{id}/avance/save', [Page2::class, 'saveAvance'])->name('clientes.guardar-avance');

    Route::get('/clientes/{clienteId}/detalles', 'ClienteController@detalles')->name('clientes.detalles');

    Route::get('clientes/{id}/form', [Page2::class, 'showClientForm'])->name('clientes.form');
    Route::get('clientes/{id}/avances', [Page2::class, 'showClientAvances'])->name('clientes.avances');

    Route::get('/client-form-edit/{id}', [Page2::class, 'editClientForm'])->name('page2.client-form-edit');


    //Nueva rutina
    
    Route::resource('routines', RoutineController::class);


    Route::get('/routines/{routine}', [RoutineController::class, 'show'])->name('routines.show');
    Route::post('/routines/{routine}/choose', [RoutineController::class, 'choose'])->name('routine.choose');



    });
