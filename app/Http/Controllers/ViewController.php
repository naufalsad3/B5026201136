<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    function showprak2pweb()
    {
        return view('prak2web');
    }

    function showetspweb()
    {
        return view('etsweb');
    }

    function showphppweb()
    {
        return view('phpweb');
    }

    function showtgsphppweb(Request $request)
    {
        return view('tgsphpweb');
    }
}