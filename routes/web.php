<?php

use App\Http\Controllers\Dashboard\BookController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\GeneralInfoController;
use App\Http\Controllers\Dashboard\GradeController;
use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\UploadController;
use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('dashboard');
})->middleware('auth');

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// 'middleware' => 'auth'
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::resource('users',UserController::class);
    Route::resource('roles',RoleController::class);
    Route::post('/upload', [UploadController::class, 'index']);
    Route::post('/fileupload', [UploadController::class, 'fileUpload']);
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('books',BookController::class);
    Route::resource('categories',CategoryController::class);
    Route::resource('generalinfo',GeneralInfoController::class);
    Route::get('generalInfo-get-data',[GeneralInfoController::class, 'index'])->name('generalInfo.index');
    Route::post('generalInfo-update-data',[GeneralInfoController::class, 'update'])->name('generalInfo.update');

    Route::resources([
        'grades'=> GradeController::class,

    ]);
    Route::get('getBooks',[BookController::class, 'getBooks'])->name('books.getBooks');

});