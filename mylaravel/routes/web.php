<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Middleware\CheckLogin;
use App\Http\Controllers\ProductController;

Route::middleware([CheckLogin::class])->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/user/{id}', [UserController::class, 'edit']);
    Route::put('/user', [UserController::class, 'edit_action']);
    Route::delete('/user', [UserController::class, 'delete']);

    Route::get('/product', [ProductController::class, 'index']);
    Route::post('/product', [ProductController::class, 'add_product']);
});

Route::get('/', [HomeController::class, 'index'])->middleware([CheckLogin::class]);

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', function () {
    session()->forget('user');
    session()->flush();
    return redirect('/login');
});

Route::get('/register', [RegisterController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/Mycontroller', [Mycontroller::class, 'myfunction']);

Route::post('/Mycontroller', [Mycontroller::class, 'myfunction']);

Route::post('/register', [RegisterController::class, 'create']);



Route::get('/404', function () {
    abort(404);
});

Route::get('/500', function () {
    abort(500);
});

Route::get('/Hello', function ($val = "") {
    return "<h1>Hello World! </h1>";
});
