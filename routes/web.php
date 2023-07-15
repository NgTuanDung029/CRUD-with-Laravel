<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonorController;
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
Route::resource('donors', DonorController::class);
Route::get('donors/{id}/edit', [DonorController::class, 'edit']);
Route::put('donors/{id}/', [DonorController::class, 'update'])->name('donors.update');
