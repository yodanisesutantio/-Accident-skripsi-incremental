<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function users() {
        return view('home.user', [
            "pageName" => "Beranda |  "
        ]);
    }
    public function instructor() {
        return view('home.instructor', [
            "pageName" => "Beranda |  "
        ]);
    }
    public function admin() {
        return view('home.admin', [
            "pageName" => "Beranda |  "
        ]);
    }
}
