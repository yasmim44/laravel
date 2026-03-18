<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function home(){
        return view ('pagina-home');
    }
    function contato(string $nome){
        echo "o nome do contato é: $nome";
        $contato = [
            "nome" => $nome
        ];
        return view('contato', $contato);
    }
    function contact(string $nome, string $sobrenome){
        echo "o nome completo é: $nome $sobrenome";
    }
    function assunto(string $nome, string $sobrenome, string $assunto){
        echo "<h1>Contato: $nome $sobrenome</h1>";
        echo "<marquee>$assunto</marquee>";
    }
    function mensagem(string $nome, string $sobrenome, string $assunto, string $email, string $telefone = 'Telefone nao foi informado'){
        echo "<h1>Contato: $nome $sobrenome</h1>";
        echo "<marquee>$assunto</marquee>";
        echo "E-mail: $email <br>";
        echo "Telefone: $telefone";
    }
}




