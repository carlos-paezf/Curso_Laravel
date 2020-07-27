<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        /*
        $user = Auth::user();
        return view('home', compact('user'));
        */

        //$request->session()->put(['David' => 'Admin']);

        //session(['David' => 'User']);

        //$request->session()->forget('David');

        //$request->session()->flush();

        /*
        $request->session()->flash('Entrada1', 'Guardado Exitoso 1');
        $request->session()->flash('Entrada2', 'Guardado Exitoso 2');
        $request->session()->flash('Entrada3', 'Guardado Exitoso 3');
        */

        //$request->session()->reflash();

        //$request->session()->keep(['Nombre', 'email']);

        $request->session()->regenerate();
        
        return $request->session()->all();
    }
}
