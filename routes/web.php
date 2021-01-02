<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RevController;
use App\Http\Controllers\MiscController;
use App\Http\Controllers\CapitalController;
use App\Http\Controllers\TrainingController;
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
Route::get('/addrev', function () {
    return view('addrev');
});

Route::get('/addmisc', function () {
    return view('addmisc');
});

Route::get('/addcap', function () {
    return view('addcap');
});

Route::get('/addtra', function () {
    return view('addtra');
});


Route::get('/', function () {
    return view('home');
});

Route::get('revanue', function () {
    return view('revanue');
});


Route::post('revadd',[RevController::class,'addNew']);
Route::post('miscadd',[MiscController::class,'addNew']);
Route::post('traadd',[TrainingController::class,'addNew']);
Route::post('capadd',[CapitalController::class,'addNew']);

Route::get('rev2021',[RevController::class,'index']);
Route::get('tra2021',[TrainingController::class,'index']);
Route::get('misc2021',[MiscController::class,'index']);
Route::get('capital2021',[CapitalController::class,'index']);

