<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index()
    {
        return view('home');
    }

    public function guardias(){
        return view('guardias');
    }
    public function integraciones(){
        return view('integraciones');
    }
    public function remediaciones(){
        return view('remediaciones');
    }
    public function ajustes(){
        return view('ajustes');
    }
}
