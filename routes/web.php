<?php

use App\Http\Controllers\PostController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', PostController::class . '@index')->name('posts.index')->middleware(RoleMiddleware::class);
Route::get('/posts/create', PostController::class . '@create')->name('posts.create');
Route::post('/posts', PostController::class . '@store')->name('posts.store');
Route::get('/posts/{post}', PostController::class . '@show')->name('posts.show');
Route::get('/posts/{post}/edit', PostController::class . '@edit')->name('posts.edit');
Route::put('/posts/{post}', PostController::class . '@update')->name('posts.update');
Route::delete('/posts/{post}', PostController::class . '@destroy')->name('posts.destroy');
Route::get('/admin', function () {

})->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
