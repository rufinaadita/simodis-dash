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
Route::get('/dash', function () {
    return view('index');
});

Route::get('/auth', function () {
    return view('auth.login');
});
Route::get('/main/showdata',  [DetaileventController::class, 'showData']);
Route::get('/main/profile', function () {
    return view('auth.profile');
});

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
$controller = DetaileventController::class;
Route::post('/detailEvent/importExcel', [$controller, 'importExcel']);
// Route::get('/detailEvent/importExcel', [$controller, 'importExcel'])->name('data.detailevent');
Route::get('/detailEvent/harianSaidi',  [DetaileventController::class, 'harianSaidi']);
Route::get('/detailEvent/harianSaifi',  [DetaileventController::class, 'harianSaifi']);

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