<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/fecha-actual', function () {
    $fechaActual = Carbon::now();
    return "La fecha actual es: " . $fechaActual->format('Y-m-d H:i:s');
});

Route::get('/contar-caracteres/{cadena}', function ($cadena) {
    $numeroCaracteres = strlen($cadena);
    return "La cadena '$cadena' tiene $numeroCaracteres caracteres.";
});
Route::get('/invertir-cadena/{cadena}', function ($cadena) {
    $cadenaInvertida = strrev($cadena);
    return "La cadena invertida de '$cadena' es: $cadenaInvertida";
});


Route::get('/verificar-subcadena/{cadena}/{subcadena}', function ($cadena, $subcadena) {
    if (strpos($cadena, $subcadena) !== false) {
        return "La subcadena '$subcadena' está contenida en la cadena '$cadena'";
    } else {
        return "La subcadena '$subcadena' no está contenida en la cadena '$cadena'";
    }
});
