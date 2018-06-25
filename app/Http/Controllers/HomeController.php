<?php

namespace Encargala\Http\Controllers;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::home');
    }

    public function paso1()
    {
        return view('adminlte::paso1');
    }

    public function paso2()
    {
        return view('adminlte::paso2');
    }

    public function paso3()
    {
        return view('adminlte::paso3');
    }

}
