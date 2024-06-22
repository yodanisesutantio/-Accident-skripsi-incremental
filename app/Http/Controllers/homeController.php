<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function users() {
        return view('home.user-home', [
            "pageName" => "Beranda |  "
        ]);
    }
    public function instructor() {
        return view('home.instructor-home', [
            "pageName" => "Beranda |  "
        ]);
    }
    public function admin() {
        return view('home.admin-home', [
            "pageName" => "Beranda |  "
        ]);
    }
}
