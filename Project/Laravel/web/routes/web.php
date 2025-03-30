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

// Registration
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Login
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// PROTECTED ROUTES

// Protected routes (require login)
Route::middleware('auth')->group(function () {
    // Dashboard (only accessible to logged-in users)
    Route::get('/dashboard', function () {
        return view('dashboard'); // Your dashboard view
    })->name('dashboard');
    // Add more protected routes here...
});
// END PROTECTED ROUTES


Auth::routes();
