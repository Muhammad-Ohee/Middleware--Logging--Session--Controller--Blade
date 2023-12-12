<?php

<<<<<<< HEAD
use App\Http\Controllers\ConstructController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MiddlewarePracticeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SingleActionController;
=======
use App\Http\Controllers\DemoController;
use App\Http\Controllers\MiddlewarePracticeController;
>>>>>>> 3e9e34118708a8d469e87dc992c348fdd410691b
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

<<<<<<< HEAD
//Route::get('/', function () {
//    return view('welcome');
//});
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 3e9e34118708a8d469e87dc992c348fdd410691b

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
<<<<<<< HEAD

Route::get('/changeHeader', [MiddlewarePracticeController::class, 'changeHeader'])->middleware([Demomiddleware::class]);

//Route::get('/rateLimit', [MiddlewarePracticeController::class, 'rateLimit'])->middleware('throttle:4,1');
Route::get('/rateLimit', [MiddlewarePracticeController::class, 'rateLimit']); //checking through web.php

Route::get('/single', SingleActionController::class);

Route::resource('photos', PhotoController::class);
/*
GET()           INDEX       http://127.0.0.1:8000/photos
GET()           CREATE      http://127.0.0.1:8000/photos/create
POST()          STORE       http://127.0.0.1:8000/photos
GET()           SHOW        http://127.0.0.1:8000/photos/{photo}
GET()           EDIT        http://127.0.0.1:8000/photos/{photo}/edit
PUT/PATCH()     UPDATE      http://127.0.0.1:8000/photos/{photo}
DELETE()        DESTROY     http://127.0.0.1:8000/photos/{photo}
*/


Route::get('/construct', [ConstructController::class, 'demoAction']);

Route::get('/', [HomeController::class, 'page']);
=======
>>>>>>> 3e9e34118708a8d469e87dc992c348fdd410691b
