<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        //cek login
        $valid = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($valid->fails()) {
            return redirect()->route('/')->withErrors($valid)->withInput();
        } else {
            $datauser = DB::table('tb_admin')
                ->where('username', $request->username)
                ->get();

            // dd($datauser);
            if (count($datauser) == 1) {
                //buat session
                $request->session()->put('id_admin', $datauser[0]->id_admin);
                $request->session()->put('nama_lengkap', $datauser[0]->nama_lengkap);

                return redirect()->route('home')->with("pesan", "Selamat Datang " . Str::upper(session('nama_lengkap')));
            } else {
                return redirect()->route('/')->with('error', 'Username Atau Password Anda Salah');
            }
        }
    }

    function logout(Request $request)
    {
        $request->session()->forget('id_admin');
        $request->session()->forget('nama_lengkap');
        $request->session()->flush();
        // redirect ke halaman home
        return redirect()->route('/')->with("pesan", "Anda Sudah Logout");
    }
}
