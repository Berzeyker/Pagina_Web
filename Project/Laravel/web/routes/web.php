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

Route::get('/home', function () {
    return view('/home'); // Change 'home' to match your new Blade file
})->name('home');

Route::get('/login', function () {
    return view('login');  // this will load login.blade.php
})->name('login');

Route::get('/register', function () {
    return view('register');  // this will load login.blade.php
})->name('register');

Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/game', function () {
    return view('game');
})->middleware('auth')->name('game');

Route::get('/card', function () {
    return view('card');
})->middleware('auth')->name('card');

Route::get('/library', function () {
    return view('library');
})->middleware('auth')->name('library');

Route::get('/payment', function () {
    return view('payment');
})->middleware('auth')->name('payment');

Route::get('/shoppingcart', function () {
    return view('shoppingcart');
})->middleware('auth')->name('shoppingcart');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/article', function () {
    return view('article');
})->name('article');

Route::get('/wishlist', function () {
    return view('wishlist');
})->middleware('auth')->name('wishlist');

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');

Route::get('create-role',[RoleController::class, 'create']);
Route::get('view-role',[RoleController::class, 'index']);
Route::get('update-role',[RoleController::class, 'update']);
Route::get('delete-role',[RoleController::class, 'delete']);
Route::get('/product/{id}', function($id) {
    $game = DB::table('games')->find($id);
    
    if (!$game) {
        abort(404);
    }
    
    return view('product', [
        'game' => $game,
        'categories' => [],
        'images' => DB::table('game_images')->where('game_id', $id)->get()
    ]);
})->name('product.show');

// Registration
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Login
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

// PROTECTED ROUTES

// Protected routes (require login)
Route::middleware('auth')->group(function () {
    // Dashboard (only accessible to logged-in users)
    Route::get('/dashboard', function () {
        return view('dashboard'); // Your dashboard view
    })->name('dashboard');
    // Add more protected routes here...
    Route::get('/account', function () {
        return view('account');
    })->name('account');
    Route::get('/product', function () {
        return view('product');
    })->name('product');
    Route::get('/store', function () {
        return view('store');
    })->name('store');
});
// END PROTECTED ROUTES

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});


Auth::routes();
