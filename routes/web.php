<?php

use App\Http\Controllers\RecordController;
use App\Http\Controllers\ReportPlaceController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GetOnlineData;

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

Route::get('/fetchData', [GetOnlineData::class, 'getData']);

Route::get('/', function () {
    return redirect('/places');
});

Route::prefix('/places')->group(function () {
    Route::get('/', [RecordController::class, 'getRecords']);
    Route::get('/{id}', [RecordController::class, 'getRecord']);
    Route::post('/{id}', [ReportPlaceController::class, 'store']);
});
