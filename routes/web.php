<?php

use App\Http\Controllers\ChallangeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'main'])->name('main');

Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::post('/tokens/create', function (Request $request) {
//     $token = $request->user()->createToken($request->token_name);
//     return ['token' => $token->plainTextToken];
// });

Route::resources([
    "users"=> UserController::class,
    "teacher"=> TeacherController::class,
    "student"=> StudentController::class,
    "group"=> GroupController::class,
    "course"=> CourseController::class,
    "room"=> RoomController::class,
    "language"=>LanguageController::class,
    "news"=>NewsController::class,
    "challange"=>ChallangeController::class,
]);


require __DIR__.'/auth.php';
