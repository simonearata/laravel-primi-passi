<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $data = [
        'nome' => 'Giuseppe',
        'prima' => 'ristorante'
    ];
    return view('home', $data);
});

Route::get('/menu', function () {
    $dati = [
        'soloprimo' => 'spaghetti',
        'menufisso' => [
            'spaghetti alla bottarga',
            'salmone',
            'tiramisù'
        ]
    ];
    return view('menu', $dati);
});
