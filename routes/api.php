<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Dashboard\BookController as DashboardBookController;
use App\Http\Controllers\GeneralInformation;
use App\Http\Controllers\GeneralInformationController;
use App\Http\Controllers\GradeController;
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



Route::middleware(['cors'])->group(function () {
    Route::get('getbooks',[BookController::class, 'index'])->name('get.books');
    Route::get('getbooks/{id}',[BookController::class, 'singleBook']);
    
    Route::get('getbooks/find/{id}',[BookController::class, 'findbooks']);
    
    Route::post('contact',[ContactController::class, 'store']);
    
    Route::get('categories',[CategoryController::class, 'index']);
    
    Route::get('grades',[GradeController::class, 'index']);
    
    Route::post('searchBooks',[BookController::class,'searchBooks']);
    
    Route::get('getbookFile/{id}',[BookController::class,'singleBookFile'])->middleware('cors');
    
    Route::get('general-info',[GeneralInformationController::class, 'getData']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
