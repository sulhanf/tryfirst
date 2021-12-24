<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DatabmnController;
use App\Http\Controllers\PinjamitController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/{id}', [PegawaiController::class, 'show']);
Route::get('/pegawai/nip/{nip}', [PegawaiController::class, 'showbynip']);
Route::post('/pegawai', [PegawaiController::class, 'store']);
Route::put('/pegawai/{id}', [PegawaiController::class, 'update']);

Route::get('/databmn', [DatabmnController::class, 'index']);
Route::get('/databmn/idbarang/{nomorbmn}', [DatabmnController::class, 'showbyidbarang']);

Route::get('/pinjamit', [PinjamitController::class, 'index']);
Route::post('/pinjamit', [PinjamitController::class, 'store']);
Route::put('/pinjamit/{id_barang}', [PinjamitController::class, 'update']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
