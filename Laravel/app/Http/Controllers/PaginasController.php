<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function index(){
        return view("welcome");
    }

    public function aboutUs(){
        return view("aboutUs");
    }

    public function whereWeAre(){
        return view("whereWeAre");
    }

    public function forum(){
        return view("forum");
    }
}
