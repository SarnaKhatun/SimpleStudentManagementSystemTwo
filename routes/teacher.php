<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherAuthController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\CourseController;

Route::get('/teacher-login', [TeacherAuthController::class, 'login'])->name('teacher.login')->middleware('teacher.auth');
Route::post('/teacher-login-check', [TeacherAuthController::class, 'loginCheck'])->name('teacher.login-check');
Route::post('/teacher-logout', [TeacherAuthController::class, 'logout'])->name('teacher.logout');


Route::middleware('teacher')->group(function () {
    Route::get('/teacher-dashboard', [TeacherDashboardController::class, 'index'])->name('teacher.dashboard');

    Route::get('/add-course', [CourseController::class, 'add'])->name('course.add');
    Route::post('/new-course', [CourseController::class, 'create'])->name('course.new');
    Route::get('/manage-course', [CourseController::class, 'manage'])->name('course.manage');
    Route::get('/detail-course/{id}', [CourseController::class, 'detail'])->name('course.detail');
    Route::get('/edit-course/{id}', [CourseController::class, 'edit'])->name('course.edit');
//Route::get('/delete-course/{id}', [CourseController::class, 'delete'])->name('course.delete');
    Route::post('/delete-course/{id}', [CourseController::class, 'delete'])->name('course.delete');
    Route::post('/update-course/{id}', [CourseController::class, 'update'])->name('course.update');

});




