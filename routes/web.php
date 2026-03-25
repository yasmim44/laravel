<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', [App\Http\Controllers\Principal::class, 'home'])->name('pagina-inicial');
Route::get('/sobre', [App\Http\Controllers\Sobre::class, 'about'])->name('pagina-sobre');

Route::get('/somar/{p1}/{p2}', [App\Http\Controllers\Sobre::class, 'somar']);
Route::get('/multiplicar/{p1}/{p2}', [App\Http\Controllers\Sobre::class, 'multiplicar']);
Route::get('/subtrair/{p1}/{p2}', [App\Http\Controllers\Sobre::class, 'subtrair']);
Route::get('/dividir/{p1}/{p2}', [App\Http\Controllers\Sobre::class, 'dividir']);

Route::get('/produto/listar', [App\Http\Controllers\Produto::class, 'listar']);
Route::get('/cliente/listar', [App\Http\Controllers\Cliente::class, 'listar']);




