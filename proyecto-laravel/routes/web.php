<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MathController;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\showGreeting;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Calculadora
Route::get('/sumar/{num1}/{num2}', [MathController::class, 'sum'])->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);
Route::get('/restar/{num1}/{num2}', [MathController::class, 'subtract'])->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);
Route::get('/multiplicar/{num1}/{num2}', [MathController::class, 'multiply'])->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);
Route::get('/dividir/{num1}/{num2}', [MathController::class, 'divide'])->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

//Saludo
Route::get('/saludar/{nombre}/{apellido?}', [GreetingController::class, 'saludar'])->where('nombre', '[A-Za-z]+')->where('apellido', '[A-Za-z]+');

Route::get('/saludo', [ViewController::class, 'showGreeting']);
