<?php

use App\Http\Controllers\Auth\AuthController;
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
})->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/company/register/step/1', [AuthController::class, 'registerStepOne'])->name('register.one');
Route::post('/company/register/step/1', [AuthController::class, 'postStepTwo'])->name('register.one.post');
Route::get('/company/register/step/2', [AuthController::class, 'registerStepTwo'])->name('register.two');
Route::post('/company/register/step/2', [AuthController::class, 'postStepTwo'])->name('register.two.post');
