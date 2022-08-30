<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAuthController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\StudentCourseController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\HomeController;


Route::get('/login-registration', [HomeController::class, 'login'])->name('login.registration');

Route::get('/enroll/{id}', [EnrollController::class, 'index'])->name('enroll');
Route::post('/confirm-enroll/{id}', [EnrollController::class, 'createEnroll'])->name('enroll.confirm');

Route::get('/course-registration-detail/{id}', [StudentCourseController::class, 'detail'])->name('registration.detail');

Route::post('/student-login', [StudentAuthController::class, 'login'])->name('student.login');
Route::post('/student-register', [StudentAuthController::class, 'register'])->name('student.register');
Route::get('/student-logout', [StudentAuthController::class, 'logout'])->name('student.logout');

Route::get('/student-dashboard', [StudentDashboardController::class, 'index'])->name('student.dashboard');
Route::get('/enrolled-courses', [StudentDashboardController::class, 'courses'])->name('student.courses');

