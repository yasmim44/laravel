<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produto extends Controller
{
    function listar(){
        $produtos = [
            "cliente1" => ["id"=>1, "nome"=>"yasmim", "compra"=>2000],
            "cliente2" => ["id"=>2, "nome"=>"joao", "compra"=>1500],
            "cliente3" => ["id"=>3, "nome"=>"maria", "compra"=>1800],
            "cliente4" => ["id"=>4, "nome"=>"carlos", "compra"=>2200],
            "cliente5" => ["id"=>5, "nome"=>"ana", "compra"=>1300],
            "cliente6" => ["id"=>6, "nome"=>"jose", "compra"=>2500],
            "cliente7" => ["id"=>7, "nome"=>"lucas", "compra"=>900],
            "cliente8" => ["id"=>8, "nome"=>"juliana", "compra"=>1700],
            "cliente9" => ["id"=>9, "nome"=>"rafael", "compra"=>2100],
            "cliente10" => ["id"=>10, "nome"=>"fernanda", "compra"=>1600],
            "cliente11" => ["id"=>11, "nome"=>"bruno", "compra"=>1400],
            "cliente12" => ["id"=>12, "nome"=>"patricia", "compra"=>2300],
            "cliente13" => ["id"=>13, "nome"=>"roberto", "compra"=>1900],
            "cliente14" => ["id"=>14, "nome"=>"aline", "compra"=>1200],
            "cliente15" => ["id"=>15, "nome"=>"diego", "compra"=>2600],
            "cliente16" => ["id"=>16, "nome"=>"camila", "compra"=>1750],
            "cliente17" => ["id"=>17, "nome"=>"theo", "compra"=>800],
            "cliente18" => ["id"=>18, "nome"=>"larissa", "compra"=>1550],
            "cliente19" => ["id"=>19, "nome"=>"marcos", "compra"=>2400],
            "cliente20" => ["id"=>20, "nome"=>"beatriz", "compra"=>1100],
            "cliente21" => ["id"=>21, "nome"=>"gustavo", "compra"=>2000],
        ];
    
        return view('estoque', ["produtos" => $produtos]);
    }
}