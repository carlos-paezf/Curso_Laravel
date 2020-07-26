<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\IsAdminMiddleware;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('isAdmin');
    }

    public function index(){
        return "Tienes el rol de Administrador";
    }
}
