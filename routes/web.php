<?php

use App\Imports\DetaileventImport;
use App\Models\Detailevent;
use App\Models\ULP;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetaileventController;
use App\Http\Controllers\MasterdataController;
use App\Http\Controllers\UlpController;
use App\Models\Masterdata;

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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('/auth')->group(function () {
    Route::get('/login', function () {
        return view('user.login');
    });
});

Route::prefix('/user')->group(function () {
    Route::get('/profile', function () {
        return view('user.profile');
    });
});

// Route::get('/dash',  [DetaileventController::class, 'index']);
Route::match(['get', 'post'], '/dash',  [DetaileventController::class, 'index']);
Route::prefix('/main')->group(function () {
    Route::match(['get', 'post'], '/realisasi',  [DetaileventController::class, 'chartHarian']);
    Route::match(['get', 'post'], '/rank',  [DetaileventController::class, 'rankSaidi']);
});

Route::get('/chart',  [DetaileventController::class, 'tabelHarian']);

// route untuk CRUD data ULP start
Route::get('/ulp', function () {
    $dataulp = Ulp::all();
    return view('ulp.input', ['dataulp' => $dataulp]);
});
Route::post('/ulp/add', [UlpController::class, 'store']);
Route::get('/ulp/delete/{id}', [UlpController::class, 'destroy']);
Route::get('/ulp/edit/{id}', [UlpController::class, 'edit']);
Route::put('/ulp/update/{id}', [UlpController::class, 'update']);
// route untuk CRUD data ULP end
// route untuk import file excel start
Route::post('/detailEvent/importExcel', [DetaileventController::class, 'importExcel']);
Route::get('/detailEvent/realisasi',  [DetaileventController::class, 'chartHarian']);
Route::get('/detailEvent/releup3',  [DetaileventController::class, 'releUp3']);

Route::get('/detailEvent', function () {
    $data = Detailevent::all();
    return view('data.detailevent', ['detailevents' => $data]);
});

Route::get('/masterdata', function () {
    $datas = Masterdata::all();
    return view('data.masterdata', ['datas' => $datas]);
});
Route::post('/masterdata/importExcel', [MasterdataController::class, 'importExcel']);
// route untuk import file excel end
Route::prefix('/truncate')->group(function () {
    Route::post('/detailevent', [DetaileventController::class, 'truncate']);
    Route::post('/masterdata', [MasterdataController::class, 'truncate']);
});
