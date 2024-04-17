<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
    return view('landing');
});

Route::get('hello', function () {
    return "<h1>Hello World<h1>";
});

// route point to view test.blade.php file
Route::get('test', function () {
    return view('test');
});


// route point to controller and function
Route::get('Home', [Controller::class,"home"]);

Route::get('Features', [Controller::class,"features"]);

// route point to controller and function 
Route::get('Pricing', [Controller::class,"pricing"]);

Route::get('Login', [Controller::class,"login"]);