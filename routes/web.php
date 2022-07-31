<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\KirishController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\HomController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\DarsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin'); // /admin

    Route::resource('category', CategoryController::class);
    Route::resource('kirish', KirishController::class);
    Route::resource('lesson', LessonController::class);
    Route::resource('hom', HomController::class);
    Route::resource('tag', TagController::class);
    Route::resource('post', PostController::class);
    Route::resource('dars', DarsController::class);
    Route::put('dars',[DarsController::class,'update']);
    Route::resource('news', NewsController::class);

    Route::get('students', [StudentController::class, 'index']);
    Route::get('add-student', [StudentController::class, 'create']);
    Route::post('add-student', [StudentController::class, 'store']);
    Route::delete('delete-student/{id}', [StudentController::class, 'destroy']);
    Route::resource("/test", TestController ::class);
});
