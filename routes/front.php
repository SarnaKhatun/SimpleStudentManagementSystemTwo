<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/all-course', [HomeController::class, 'course'])->name('course');
Route::get('/website-course-detail/{id}', [HomeController::class, 'detail'])->name('website.course-detail');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');




