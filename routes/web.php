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

Route::get('/', [App\Http\Controllers\EnviarMensagemController::class, 'index'])->name('welcome');
Route::post('/enviar-mensagem-no-whats-pelo-pc', [App\Http\Controllers\EnviarMensagemController::class, 'enviar'])->name('enviar');