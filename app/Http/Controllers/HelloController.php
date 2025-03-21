<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index($mode = null)
    {
        if ($mode === null) {
            return view('hello');
        } else {
            return "Hello World dari Controller!";
        }
    }
}
