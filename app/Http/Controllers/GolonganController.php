<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class GolonganController extends Controller
{
    public function index()
    {
        $data['golongan'] = DB::table('tb_golongan')->get();

        return view('golongan.index', $data);
    }
}
