<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/transfers', function () {
    return view('transfer')->with('receiver' , User::all());
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::post('/admin/update/{id}',[App\Http\Controllers\UserController::class, 'AdminUpdate']);

Route::get('/admin/profile/',[App\Http\Controllers\UserController::class, 'AdminProfile']);

Route::post('/user/update/{id}',[App\Http\Controllers\UserController::class, 'UserUpdate']);

Route::get('/user/profile/',[App\Http\Controllers\UserController::class, 'UserProfile']);

Route::get('/delele/{id}',[App\Http\Controllers\UserController::class, 'delete']);

Route::get('/admin/crypto',[App\Http\Controllers\UserController::class, 'crypto'])->name('khadija');

Route::post('/create',[App\Http\Controllers\UserController::class, 'create']);

Route::post('/transfer',[App\Http\Controllers\TransferController::class, 'transfer']);







