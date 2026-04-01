<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Curso extends Controller
{
    function show(){
        $cursos = [
            (object) ['nome'=>'Seleide', 'telefone'=>'123', 'email'=>'seleide@gmail.com'],
            (object) ['nome'=>'yas', 'telefone'=>'321', 'email'=>'yas@gmail.com'],
            (object) ['nome'=>'gabriel', 'telefone'=>'456', 'email'=>'gabriel@gmail.com']
        ];
        return view('aluno', compact('alunos'));
    }

}
