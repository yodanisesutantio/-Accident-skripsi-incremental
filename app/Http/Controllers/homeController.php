<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function showHome($role) {
        if ($role !== auth()->user()->role) {
            abort(403, 'Unauthorized Access');
          }
        
          $view = 'home.' . $role; 
        
          return view($view, [
            "pageName" => "Beranda | ",
          ]);
    }

    public function tamu() {        
        // dd(auth()->user());
        return view('home.tamu', [
            "pageName" => "Selamat Datang di "
        ]);

    }
}
