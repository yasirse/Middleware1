<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiddlewareController;

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

Route::get('test4/{id}', [MiddlewareController::class, 'test']);
Route::get('test1/{id}', [MiddlewareController::class, 'test'])->middleware('agecheck');
Route::get('test2/{id}', [MiddlewareController::class, 'test'])->middleware('agecheck')->withoutMiddleware([WebGuard::class]);

Route::get('/no-access', function () {
    Echo "test1=You are not allowed to access this page";
});

Route::middleware(['web'])->group(function () {
    Route::get('/test3', function () {
        Echo "<br/>This test3 from group middleware";
        return view('test3');
    });
    Route::get('test5', function () {
        Echo "<br/>This test5 from group middleware";
    });
});
