<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home()
    {
        $data = produk::all();
        return view('welcome', compact('data'));
    }

    public function detail($id)
    {
        $data = produk::findOrFail($id);

        return view('detail', compact('data'));
    }

    public function login()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        $cek = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($cek)) {
            $user = Auth::user();
            return redirect()->route('home')->with('status','Selamat Datang '. $user->nama);
        } else{
            return redirect('login')->with('alert','Password atau Email, Salah !');
        }
    }

    public function reg()
    {
        return view('reg');
    }

    public function keranjang()
    {
        return view('keranjang');
    }

    public function bayar()
    {
        return view('bayar');
    }

    public function summary()
    {
        return view('summary');
    }
}
