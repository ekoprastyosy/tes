<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    public function index()
    {
        $data['pegawai'] = DB::table('tb_pegawai')
            ->join('tb_unit', 'tb_pegawai.id_unit', '=', 'tb_unit.id_unit')
            ->join('tb_golongan', 'tb_pegawai.id_golongan', '=', 'tb_golongan.id_golongan')
            ->get();

        return view('pegawai.index', $data);
    }
}
