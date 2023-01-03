<?php

use App\Http\Controllers\API\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function() {
    Route::get('student', [StudentController::class, 'student']);
    Route::post('schoolboy', [StudentController::class, 'schoolboy']);
    Route::put('schoolput', [StudentController::class, 'schoolput']);
    Route::delete('destroy/{id}', [StudentController::class, 'destroy']);
});
