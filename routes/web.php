<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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
    return view('insert');
});


Route::post('/store', [PostController::class, 'store']);
Route::get('/show', [PostController::class, 'show']);
Route::get('/delete/{id}', [PostController::class, 'destroy']);
Route::get('/edit/{id}', [PostController::class, 'edit']);
Route::post('/update/{id}', [PostController::class, 'update']);

Route::get('/user/{id}', [UserController::class, 'user']);
Route::view('/login', 'login');
Route::view('/registration', 'registration');
Route::view('/dashboard', 'dashboard')->middleware('routeCheck');
Route::view('/error', 'error');
Route::middleware(['restricted'])->group(function () {
    // Route::view('/dashboard', 'dashboard');
});
Route::Post('/authentication', [AuthController::class, 'authentication']);
Route::Post('/register', [AuthController::class, 'registration']);