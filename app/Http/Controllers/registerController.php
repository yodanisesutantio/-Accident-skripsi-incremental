<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function index() {
        return view('/register', [
            'pageName' => "Daftar Akun | "
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'fullname' => ['required', 'max:255'],
            'username' => ['required', 'min:3', 'max:255', 'unique:users', 'lowercase'],
            'password' => ['required', 'min:5', 'max:255']
        ]);

        dd('registrasi sukses');
    }
}
