<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;

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
    $pageProperties = [
        "pageName" => "Selamat Datang di "
    ];

    return view('landing', compact('pageProperties'));
});

Route::get('/app-intro', function () {
    $pageProperties = [
        "pageName" => "Selamat Datang di "
    ];

    return view('app-intro', compact('pageProperties'));
});

Route::get('/login', [loginController::class, 'index']);

Route::get('/register', [registerController::class, 'index']);
Route::post('/register', [registerController::class, 'store']);

Route::get('/instructor-home', function () {
    $pageProperties = [
        "pageName" => "Beranda |  ",
        "userName" => "Instruktur",
    ];

    return view('home/instructor-home', compact('pageProperties'));
});

Route::get('/admin-home', function () {
    $pageProperties = [
        "pageName" => "Beranda |  ",
        "userName" => "Pemilik / Admin",
    ];

    return view('home/admin-home', compact('pageProperties'));
});

Route::get('/user-home', function () {
    $pageProperties = [
        "pageName" => "Beranda |  ",
        "userName" => "General User",
    ];

    return view('home/user-home', compact('pageProperties'));
});