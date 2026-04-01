<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function show(){
        $professores = [
            (object) ['nome'=>'Seleide', 'cpf'=>'123.456.789-10'],
            (object) ['nome'=>'yas', 'cpf'=>'123.456.789-10'],
        ];
        return view('professor', compact('professores'));
    }

}