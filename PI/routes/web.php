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
    return view('index');
});
Route::get('/login', function () {
    return view('index0');
});
Route::get('/sa', function () {
    return view('index2');
});
Route::get('/diadema', function () {
    return view('index3');
});
Route::get('/cadastra', function () {
    return view('index1');
});
Route::get('/cadastro', function () {
    return view('Cadastrar');
});

Route::get('/cadastro', [PortfolioController::class, 'cadastrar']);

Route::get('/apagar/{id}', [PortfolioController::class, 'apagaDados']);

