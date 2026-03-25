<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function home(){
        return view ('pagina-home');
    }

    
}

function somar(int $p1, int $p2){
    echo "A soma entre $p1 + $p2 é" . ($p1+$p2);
    return view('somar', ["p1" => $p1, "p2" => $p2])

}
function multiplicar(int $p1, int $p2){
    echo "A multiplicação entre $p1 * $p2 é" . ($p1*$p2);
    return view('multiplicar', ["p1" => $p1, "p2" => $p2])

}
function multiplicar(int $p1, int $p2){
    echo "A multiplicação entre $p1 * $p2 é" . ($p1*$p2);
    return view('multiplicar', ["p1" => $p1, "p2" => $p2])

}


