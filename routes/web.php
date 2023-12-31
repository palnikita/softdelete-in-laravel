<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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



 
Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::delete('users/{id}', [UserController::class, 'delete'])->name('users.delete');
Route::get('users/restore/one/{id}', [UserController::class, 'restore'])->name('users.restore');
Route::get('restoreAll', [UserController::class, 'restoreAll'])->name('users.restore.all');