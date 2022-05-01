<?php

use App\Http\Controllers\ImageOptimizeController;
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

Route::middleware('clearStorage')->group(function () {
    Route::get('/', [ImageOptimizeController::class, 'index']);
    Route::post('upload', [ImageOptimizeController::class, 'upload']);
    Route::get('upload', [ImageOptimizeController::class, 'upload']);
});
Route::get('result', [ImageOptimizeController::class, 'result'])->name('result');
