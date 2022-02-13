<?php

use App\Http\Controllers\TodoController;
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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', [TodoController::class, 'index'])->name('home');
Route::post('store', [TodoController::class, 'store'])->name('store');
Route::get('edit/{id}', [TodoController::class, 'edit'])->name('edit');
Route::delete('delete/{id}', [TodoController::class, 'destroy'])->name('delete');
