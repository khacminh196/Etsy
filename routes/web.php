<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
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
    return view('welcome');
});

Route::get('login', [AdminController::class, 'login'])->name('login');
Route::post('login', [AdminController::class, 'loginPost'])->name('login.post');

Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'request'], function () {
        Route::get('list', [AdminController::class, 'getListRequest'])->name('request.index');
        Route::get('detail/{id}', [AdminController::class, 'detailRequest'])->name('request.detail');
    });
});

Route::post('request-file', [Controller::class, 'requestFile'])->name('request-file');