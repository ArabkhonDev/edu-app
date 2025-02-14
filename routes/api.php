<?php

use App\Http\Controllers\Api\CourseApiController;
use App\Http\Controllers\Api\GroupApiController;
use App\Http\Controllers\Api\LanguageApiController;
use App\Http\Controllers\Api\RoomApiController;
use App\Http\Controllers\Api\StageApiController;
use App\Http\Controllers\Api\StajApiController;
use App\Http\Controllers\Api\StudentApiController;
use App\Http\Controllers\Api\TeacherApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResources([
    'courses'=> CourseApiController::class,
    'students'=>StudentApiController::class,
    'teachers'=>TeacherApiController::class,
    'groups'=> GroupApiController::class,
    'stages'=>StageApiController::class,
    'rooms'=>RoomApiController::class,
    'languages'=>LanguageApiController::class,
]);