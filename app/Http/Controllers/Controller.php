<?php

namespace Encargala\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


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
