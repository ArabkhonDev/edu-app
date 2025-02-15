<?php

use App\Http\Controllers\Api\BranchApiController;
use App\Http\Controllers\Api\CourseApiController;
use App\Http\Controllers\Api\GroupApiController;
use App\Http\Controllers\Api\RoomApiController;
use App\Http\Controllers\Api\StageApiController;
use App\Http\Controllers\Api\StudentApiController;
use App\Http\Controllers\Api\TeacherApiController;
use App\Http\Controllers\ChallangeApiController;
use App\Http\Controllers\NewsApiController;
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
    'news'=>NewsApiController::class,
    'branches'=>BranchApiController::class,
    'challanges'=>ChallangeApiController::class,
]);