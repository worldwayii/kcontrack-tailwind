<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CompanyController;
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
Route::post('/login', [AuthController::class, 'postLogin'])->name('post.login');


Route::get('/company/register/step/1', [AuthController::class, 'registerStepOne'])->name('register.one');
Route::post('/company/register/step/1', [AuthController::class, 'postStepOne'])->name('register.one.post');
Route::get('/company/register/step/2', [AuthController::class, 'registerStepTwo'])->name('register.two');
Route::post('/company/register/step/2', [AuthController::class, 'postStepTwo'])->name('register.two.post');

//Route::get('/email/verify', function () {
//    return view('auth.verify-email');
//})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'verifyEmail'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', [AuthController::class, 'sendVerification'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/company/dashboard', [CompanyController::class, 'index'])->name('company.dashboard');
