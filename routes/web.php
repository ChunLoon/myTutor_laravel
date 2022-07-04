<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubjectController;
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

Route::get('/', [AuthController::class, 'welcome'])->name('welcome'); 
Route::get('welcome', [AuthController::class, 'welcome'])->name('welcome'); 

Route::get('registration', [AuthController::class, 'register'])->name('register'); //get-registration is website localhost:8000/registration ,auth:function register in controller ,register in blade
Route::get('login', [AuthController::class, 'login'])->name('login'); 
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');     ///post-login is website /post-login ,login.post is the name in blade /postlogin function is in controller



Route::post('/savesubject', [SubjectController::class,'saveSubject'])->name('savesubject');
Route::get('mainpage', [AuthController::class, 'mainpage'])->name('mainpage'); 
Route::get('newsubject', [AuthController::class, 'newsubject'])->name('newsubject'); 

//Route::get('mainpage', [SubjectController::class, 'mainpage'])->name('mainpage');


