<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Principal extends Controller
{
    function principal(){
        return view('principal');
    }
    function sobre(){
        return view('sobre');
    }

    function produtos(){
        return view('produtos');
    }
    function contato(){
        return view('contato');
    }

}
