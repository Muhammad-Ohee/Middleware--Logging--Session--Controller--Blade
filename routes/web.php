<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\MiddlewarePracticeController;
use App\Http\Middleware\Demomiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo/{num1}/{num2}', [DemoController::class, 'demoAction']);

Route::get('/SessionPut/{email}', [DemoController::class, 'SessionPut']);
Route::get('/SessionPull', [DemoController::class, 'SessionPull']);
Route::get('/SessionGet', [DemoController::class, 'SessionGet']);
Route::get('/SessionForget', [DemoController::class, 'SessionForget']);
Route::get('/SessionFlush', [DemoController::class, 'SessionFlush']);


//Route::get('/hello', [MiddlewarePracticeController::class, 'demoAction'])->middleware([Demomiddleware::class]);
//Route::get('/hello1/{key}', [MiddlewarePracticeController::class, 'demoAction1'])->middleware([Demomiddleware::class]);
//Route::get('/hello2', [MiddlewarePracticeController::class, 'demoAction2']);

//Route::middleware(['demo'])->group(function (){
//    Route::get('/hello1/{key}', [MiddlewarePracticeController::class, 'demoAction1']);
//    Route::get('/hello2/{key}', [MiddlewarePracticeController::class, 'demoAction2']);
//    Route::get('/hello3/{key}', [MiddlewarePracticeController::class, 'demoAction3']);
//    Route::get('/hello4/{key}', [MiddlewarePracticeController::class, 'demoAction4']);
//});

Route::get('/hello1/{key}', [MiddlewarePracticeController::class, 'demoAction1']);
Route::get('/hello2/{key}', [MiddlewarePracticeController::class, 'demoAction2']);
Route::get('/hello3/{key}', [MiddlewarePracticeController::class, 'demoAction3']);
Route::get('/hello4/{key}', [MiddlewarePracticeController::class, 'demoAction4']);
