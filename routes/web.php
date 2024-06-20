<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    $pageProperties = [
        "pageName" => "Login |  "
    ];

    return view('login', compact('pageProperties'));
});

Route::get('/register', function () {
    $pageProperties = [
        "pageName" => "Daftar Akun |  "
    ];

    return view('register', compact('pageProperties'));
});

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