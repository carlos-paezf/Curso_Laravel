<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    public function inicio(){
        return "Esta es la aplicacion de una funcion dentro de un controlador
                de Ejemplo";
    }
}
