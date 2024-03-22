<?php

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('get-s', function (Request $request) {


    if ($request->q != '') {
        $laporan = Laporan::where('isi', 'LIKE', '%' . $request->q . '%')->get();
    }


    return response()->json(['laporan' => $laporan]);
});
