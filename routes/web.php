<?php

use App\Http\Controllers\ToshopController;
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

Route::get('/', [ToshopController::class, 'index']);


Route::post('/save-toshop', [ToshopController::class, 'saveToshop'])->name('saveToshop');

Route::post('delete/{id}', [ToshopController::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [ToshopController::class, 'edit']);
Route::post('/edit', [ToshopController::class, 'updateToshop'])->name('updateToshop');



