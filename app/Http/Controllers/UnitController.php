<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class UnitController extends Controller
{
    public function index()
    {
        $data['unit'] = DB::table('tb_unit')->get();

        return view('unit.index', $data);
    }
}
