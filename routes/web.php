<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::view('/second', 'second'); 

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home'); 

Route::get('posts/{post}', [PostController::class, 'show'])
    ->name('post.show');

Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');
Route::view('article', 'article')->name('article');