<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function show($numbers)
    {
        return view('test2', ['numbers'=>$numbers]);
    }
}
