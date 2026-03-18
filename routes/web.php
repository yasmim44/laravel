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

Route::prefix('publico')->group(function(){
    Route::get('/sobre', [App\Http\Controllers\Sobre::class, 'about'])->name('pagina-sobre');
    Route::get('/contato/{nome}', [App\Http\Controllers\Principal::class, 'contact'])->name('contato');
    Route::get('/contato/{nome}/{sobrenome}', [App\Http\Controllers\Principal::class, 'complet'])->name('contatoNomeCompleto');
    Route::get('/contato/{nome}/{sobrenome}/{assunto}', [App\Http\Controllers\Principal::class, 'assunto'])->name('assunto');
    Route::get('/contato/{nome}/{sobrenome}/{assunto}/{email}/{telefone?}', [App\Http\Controllers\Principal::class, 'mensagem'])->name('mensagem');
    
});


Route::fallback(function(){
    echo "A rota acessada nao existe.";
    echo "<a href='". route('pagina-inicial'). "'>Voltar</a>";
});