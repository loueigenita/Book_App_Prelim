<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use GuzzleHttp\Middleware;

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
Route::group(['middleware'=>'auth'], function(){
Route::get('/index', [BookController::class, 'index']);
Route::get('/edit/{book}', [BookController::class, 'edit']);
Route::get('/delete/{book}', [BookController::class, 'destroy']);

Route::get('/home', function(){
    return view('/home');
});
});

Route::get('/', [AuthController::class, 'loginForm'])->name('login');
Route::post('/', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', function(){
    return view('/dashboard');
})->middleware('auth');
