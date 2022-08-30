<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\DashboardController;

use App\Http\Controllers\TeacherController;

use App\Http\Controllers\UserController;


use App\Http\Controllers\AdminCourseController;

use App\Http\Controllers\AdminStudentController;

use App\Http\Controllers\AdminEnrollController;

use App\Http\Controllers\TestController;

Route::resource('sarna', TestController::class);









Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::middleware('admin')->group(function () {
        Route::get('/add-teacher', [TeacherController::class, 'add'])->name('teacher.add');
        Route::post('/new-teacher', [TeacherController::class, 'newTeacher'])->name('teacher.new');
        Route::get('/manage-teacher', [TeacherController::class, 'manage'])->name('teacher.manage');
        Route::get('/edit-teacher/{id}', [TeacherController::class, 'edit'])->name('teacher.edit');
        Route::post('/update-teacher/{id}', [TeacherController::class, 'update'])->name('teacher.update');
//    Route::get('/delete-teacher/{id}', [TeacherController::class, 'delete'])->name('teacher.delete');
        Route::post('/delete-teacher/{id}', [TeacherController::class, 'delete'])->name('teacher.delete');


        Route::get('/add-user', [UserController::class, 'add'])->name('user.add');
        Route::post('/new-user', [UserController::class, 'create'])->name('user.new');
        Route::get('/manage-user', [UserController::class, 'manage'])->name('user.manage');
        Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('/delete-user/{id}', [UserController::class, 'delete'])->name('user.delete');
        Route::post('/update-user/{id}', [UserController::class, 'update'])->name('user.update');

        Route::get('/admin-manage-course', [AdminCourseController::class, 'manage'])->name('admin.manage-course');
        Route::get('/admin-course-detail/{id}', [AdminCourseController::class, 'detail'])->name('admin.course-detail');
        Route::get('/admin-course-status/{id}', [AdminCourseController::class, 'status'])->name('admin.course-status');

        Route::get('/admin-manage-student', [AdminStudentController::class, 'manage'])->name('admin.manage-student');
        Route::get('/admin-student-update-status/{id}', [AdminStudentController::class, 'updateStatus'])->name('admin.student-update-status');

        Route::get('/admin-student-enroll', [AdminEnrollController::class, 'manageEnroll'])->name('admin.student-enroll');
        Route::get('/admin-enroll-update-status/{id}', [AdminEnrollController::class, 'updateStatus'])->name('admin.enroll-update-status');

    });
});
