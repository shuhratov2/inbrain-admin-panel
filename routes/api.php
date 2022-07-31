<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/post', [Apicontroller::class, 'getpost']);
Route::get('/category', [Apicontroller::class, 'getcategory']);
Route::get('/dars', [Apicontroller::class, 'getdars']);
Route::get('/dars', [Apicontroller::class, 'getdars']);
Route::get('/hom', [Apicontroller::class, 'gethom']);
Route::get('/kirish', [Apicontroller::class, 'getkirish']);
Route::get('/lesson', [Apicontroller::class, 'getlesson']);
Route::get('/students', [Apicontroller::class, 'getstudent']);
Route::get('/tag', [Apicontroller::class, 'gettag']);

