<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TypeController;
use App\Models\Brand;
use App\Models\Type;
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
    return view('home', [
                'name' =>'Testing',
                'role' => 'admin'
                
            ]);
});

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/brand', [BrandController::class, 'index']);
Route::get('/type', [TypeController::class, 'index']);