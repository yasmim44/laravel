<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produto extends Controller
{
    function listar(){
        $produtos = [
            "produto1" => ["id"=>1, "nome"=>"Computador", "preco"=>2000],
            "produto2" => ["id"=>2, "nome"=>"Notebook", "preco"=>3500],
            "produto3" => ["id"=>3, "nome"=>"Mouse", "preco"=>50],
            "produto4" => ["id"=>4, "nome"=>"Teclado", "preco"=>120],
            "produto5" => ["id"=>5, "nome"=>"Monitor", "preco"=>900],
            "produto6" => ["id"=>6, "nome"=>"Impressora", "preco"=>700],
            "produto7" => ["id"=>7, "nome"=>"Cadeira Gamer", "preco"=>1200],
            "produto8" => ["id"=>8, "nome"=>"Mesa", "preco"=>500],
            "produto9" => ["id"=>9, "nome"=>"HD Externo", "preco"=>400],
            "produto10" => ["id"=>10, "nome"=>"SSD", "preco"=>600],
            "produto11" => ["id"=>11, "nome"=>"Pen Drive", "preco"=>80],
            "produto12" => ["id"=>12, "nome"=>"Webcam", "preco"=>250],
            "produto13" => ["id"=>13, "nome"=>"Headset", "preco"=>300],
            "produto14" => ["id"=>14, "nome"=>"Caixa de Som", "preco"=>200],
            "produto15" => ["id"=>15, "nome"=>"Microfone", "preco"=>350],
            "produto16" => ["id"=>16, "nome"=>"Placa de Vídeo", "preco"=>2500],
            "produto17" => ["id"=>17, "nome"=>"Processador", "preco"=>1800],
            "produto18" => ["id"=>18, "nome"=>"Memória RAM", "preco"=>450],
            "produto19" => ["id"=>19, "nome"=>"Fonte", "preco"=>300],
            "produto20" => ["id"=>20, "nome"=>"Gabinete", "preco"=>400],
        ];
    
        return view('estoque', ["produtos"=>])
    }
}