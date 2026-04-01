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
Route::get('/aluno/listar', [App\Http\Controllers\Aluno::class, 'show'])->name('aluno.namephp');
Route::get('/professor/listar', [App\Http\Controllers\Professor::class, 'show'])->name('professor.namephp');
Route::get('/curso/listar', [App\Http\Controllers\Curso::class, 'show'])->name('curso.namephp');
Route::get('/aluno/add/{nome}/{telefone}/{email}', [App\Http\Controllers\Aluno::class, 'add'])->name('aluno.add');


