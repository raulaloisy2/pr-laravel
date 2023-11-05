<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showGreeting extends Controller
{
    public function showGreeting()
    {
        $nombre = "Juanito Visitante"; 
        return view('greeting', ['nombre' => $nombre]);
    }
}
