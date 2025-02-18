<?php

use App\Http\Controllers\Admin\AdminMainController;
use App\Http\Controllers\ChallangeController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Teacher\TeacherMainController;
// use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'main'])->name('main');

Route::middleware(['auth', 'verified'])->get('dashboard', [MainController::class, 'dashboard'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified', "rolemanager:teacher"])->group(function(){
    Route::controller(TeacherMainController::class)->group(function () {
        Route::prefix('teacher', function(){
            Route::get('/dashboard', 'main')->name('dashboard');
            Route::get('/groups', 'group')->name('group');
            Route::get('/student', 'students')->name('student');
            Route::get('/student/{$student}', 'student_show')->name('show');
        });
    });
});
Route::middleware(['auth', 'verified', "rolemanager:admin"])->group(function(){
    Route::controller(AdminMainController::class)->group(function () {
        Route::prefix('admin', function(){
            Route::resources([
                "teacher"=> TeacherController::class,
                "student"=> StudentController::class,
                "group"=> GroupController::class,
                "course"=> CourseController::class,
                "room"=> RoomController::class,
                "news"=>NewsController::class,
                "challange"=>ChallangeController::class,
            ]);
            Route::get('/dashboard', 'index')->name('dashboard');
        });
    });
});

// Route::resources([
//     "teacher"=> TeacherController::class,
//     "student"=> StudentController::class,
//     "group"=> GroupController::class,
//     "course"=> CourseController::class,
//     "room"=> RoomController::class,
//     "news"=>NewsController::class,
//     "challange"=>ChallangeController::class,
// ]);


require __DIR__.'/auth.php';
