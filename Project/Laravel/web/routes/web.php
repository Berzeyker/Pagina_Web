<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
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
    return view('home'); // Change 'home' to match your new Blade file
})->name('home');
Route::get('/login', function () {
    return view('login');  // this will load login.blade.php
});
Route::get('/register', function () {
    return view('register');  // this will load login.blade.php
});

Route::get('create-role',[RoleController::class, 'create']);
Route::get('view-role',[RoleController::class, 'index']);
Route::get('update-role',[RoleController::class, 'update']);
Route::get('delete-role',[RoleController::class, 'delete']);



Auth::routes();

