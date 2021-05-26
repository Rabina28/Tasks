<?php

use App\Http\Controllers\Admin\DashboardController;
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

Route::resource('/application', 'CRUDController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return view('admin.dashboard');
});
Route::get('home', [DashboardController::class,'index']);
Route::get('students-show/{id}', [DashboardController::class,'show']);
Route::get('dashboard/{id}', [DashboardController::class,'edit']);
Route::put('students-update/{id}', [DashboardController::class,'update']);
Route::delete('students-delete/{id}', [DashboardController::class,'delete']);

