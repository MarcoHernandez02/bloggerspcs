<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\TemaController;


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


// -- InicioController 
Route::get('/' , [InicioController::class, 'index'])->name('inicio');

Route::get('/unidades' , [InicioController::class, 'unidades'])->name('unidades');

Route::get('/contacto' , [InicioController::class, 'contacto'])->name('contacto');

Route::get('/aboutus' , [InicioController::class, 'aboutus'])->name('personal');

//Route::get('/unidad2' , [InicioController::class, 'unidad2'])->name('unidad2');

// -- TemaController
Route::get('/temas/tema1' , [TemaController::class, 't1'])->name('temas.tema1');

Route::get('/unidad2' , [TemaController::class, 'mostrarTemas'])->name('uni2');


/*
Route::post('/contactar', 'EmailController@contact')->name('contact');
//Ruta que esta señalando nuestro formulario
*/