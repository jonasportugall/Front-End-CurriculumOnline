<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste',[ApiController::class,'abc']);

Route::post('/storee',[ApiController::class,'storeCurriculum']);


//Route::get('/crie',[ApiController::class,'crieProvincias']);


Route::get('/form-store-curriculum',[ApiController::class,'formCreateCurriculum']);