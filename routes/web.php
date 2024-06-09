<?php
use App\Http\Controllers\ContatoController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/QuemSomos', function () {
    return view('quemsomos');
});

Route::get('/Contato', function () {
    return view('contato');
});


Route::post('/Contato', [ContatoController::class, 'enviarContato'])->name('contato.enviar');