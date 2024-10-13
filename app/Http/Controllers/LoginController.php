<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.index2');
    }

    public function prosesLogin(Request $rekues)
    {
        $validasi = $rekues->validate(['name' => 'required', 'password' => 'required']);

        if (Auth::attempt($validasi)) {
            // echo "Selamat Datang !";
            // echo "<a href='/logout'>Log Out</a>";
            $rekues->session()->regenerate();
            return redirect('/poi');
        }

        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
