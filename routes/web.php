<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/', [PostController::class,'index']) -> name('post.index');

Route::get('/detail/{slug}', [PostController::class,'detail']) -> name('post.detail');

Route::get('/contact', [ContactController::class,'contactForm']) -> name('contact.show');
Route::post('/contact', [ContactController::class,'submitContactForm']) -> name('contact.submit');
