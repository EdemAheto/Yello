<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\API\AcademicController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/academics', [AcademicController::class, 'index'])->name('academic');
    Route::get('/academic/{id}', [AcademicController::class, 'show'])->name('academic');
    Route::post('/academic', [AcademicController::class,'store'])->name('academic');
    Route::put('/academic/{id}', [AcademicController::class, 'update'])->name('academic');
    Route::delete('/academic/{id}', [AcademicController::class, 'destroy'])->name('academic');
});

Route::controller(AuthController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});
