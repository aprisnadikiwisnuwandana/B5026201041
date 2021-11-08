<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showPraktikum2()
    {
        return view('prak2web');
    }

    function showEts()
    {
        return view('etspweb');
    }

    function showTugas()
    {
        return view('tugaspweb');
    }

    function showPhp(Request $request)
    {
        return view('tugasphp');
    }
}
