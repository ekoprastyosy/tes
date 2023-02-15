<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;

use Illuminate\Support\Facades\Route;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return view('layout.app');
// });

Route::get('/', [LoginController::class, 'index'])->name('/');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/pegawai.index', [PegawaiController::class, 'index'])->name('pegawai.index');

Route::get('/golongan.index', [GolonganController::class, 'index'])->name('golongan.index');

Route::get('/unit.index', [UnitController::class, 'index'])->name('unit.index');

//LOGOUT
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::any('/v1/login', function () {
    $key = 'example_key';
    $payload = [
        'iss' => 'http://example.org',
        'aud' => 'http://example.com',
        'iat' => 1356999524,
        'nbf' => 1357000000
    ];

    $jwt = JWT::encode($payload, $key, 'HS256');
    $decoded = JWT::decode($jwt, new Key($key, 'HS256'));

    return response()->json([
        'token' => $jwt,
        'token_type' => "bearer",
        'expires_in' => 3600
    ]);
});

Route::get('/v1/unor', function () {
    $unit = DB::table('tb_unit')->get();
    $pegawai = DB::table('tb_pegawai')->get();
    return response()->json([
        [
            ...$unit,
            ...$pegawai
        ]
    ]);
});

Route::get('/v1/unor/{unorid}/pns', function () {

    if (false) {
        // $a = DB::table('tb_golongan')->leftJoin('tb_pegawai', 'tb_golongan.')->get();

    } else {
        return response()->json([
            'message' => 'Data tidak ditemukan',
            'status' => 404
        ]);
    }
});

Route::get('/v1/pns/{nip}', function ($nip) {
    $a = DB::table('tb_pegawai')->where('id_pegawai', $nip)->get();
    return response()->json($a);
});
