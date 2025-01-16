<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

    // Route::get('/', function () {
    //     return view('welcome');
    // });

Route::get('/', PostController::class . '@index')->name('post.index');
Route::get('/{id}', PostController::class . '@show')->name('post.show');
