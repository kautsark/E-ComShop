<?php

use App\Http\Controllers\MerkBarangController;
use Illuminate\Support\Facades\Route;

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
    // return view('welcome');
    return view('admin.login_adm') ;
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    Route::get('/dashboard', function () {
        // return view('dashboard');
        return view ('index_homeadm');
    })->name('dashboard');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/merkbarang/data', [MerkBarangController::class,'data'])->name('merkbarang.data');
    Route::resource('/merkbarang', MerkBarangController::class);
});