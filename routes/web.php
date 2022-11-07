<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\MerkBarangController;
use App\Http\Controllers\UserGroupController;
use Illuminate\Auth\Middleware\Authenticate;
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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     // Route::get('/dashboard', function () {
//     Route::get('/dashboard', function () {
//         // return view('dashboard');
//         return view ('index_homeadm');
//     })->name('dashboard');
// });

// route::get('/dashboard',function(){
//     return view('index_homeadm')->middleware('');
// });
Route::middleware(['auth:sanctum','verified'])->get('/dashboard',function() {
    return view('index_homeadm');
})->name('dashboard');

// Route::middleware(['auth:sanctum','verified'])->get('/',function() {
//     return view('admin.login_adm');
// })->name('login_adm');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/merkbarang/data', [MerkBarangController::class,'data'])->name('merkbarang.data');
    Route::resource('/merkbarang', MerkBarangController::class);

    Route::get('/usergroup/data', [UserGroupController::class,'data'])->name('usergroup.data');
    Route::resource('/usergroup', UserGroupController::class);

    
    Route::get('/barang/data', [BarangController::class,'data'])->name('barang.data');
    Route::resource('/barang', BarangController::class);

    Route::post('/barang/delete-selected', [BarangController::class,'deleteSelected'])->name('barang.delete_selected');
    Route::resource('/barang', BarangController::class);
    
    Route::post('/barang/cetak-barcode', [BarangController::class,'cetakBarcode'])->name('barang.cetak_barcode');
    Route::resource('/barang', BarangController::class);
});

