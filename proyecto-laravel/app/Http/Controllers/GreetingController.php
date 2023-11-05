<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function saludar($nombre)
    {
        return view('saludo', ['nombre' => $nombre]);
    }
}
