<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function sum($num1, $num2)
    {
        $result = $num1 + $num2;
        return response()->json(['result' => $result]);
    }

    public function subtract($num1, $num2)
    {
        $result = $num1 - $num2;
        return response()->json(['result' => $result]);
    }

    public function multiply($num1, $num2)
    {
        $result = $num1 * $num2;
        return response()->json(['result' => $result]);
    }

    public function divide($num1, $num2)
    {
        if ($num2 == 0) {
            return response()->json(['error' => 'No pedes dividir entre 0']);
        }

        $result = $num1 / $num2;
        return response()->json(['result' => $result]);
    }
}
