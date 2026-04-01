<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    function show(){
        $alunos = [
            (object) ['nome'=>'Seleide', 'telefone'=>'123', 'email'=>'seleide@gmail.com'],
            (object) ['nome'=>'yas', 'telefone'=>'321', 'email'=>'yas@gmail.com'],
            (object) ['nome'=>'gabriel', 'telefone'=>'456', 'email'=>'gabriel@gmail.com']
        ];
        return view('aluno', compact('alunos'));
    }

}


