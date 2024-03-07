<?php
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Company\EmployeeController;
use App\Http\Controllers\CompanyController;
//use App\Livewire\ShowScheduler;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//mine
use App\Http\Controllers\SchedulerController;
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



Route::middleware(['guest'])->group(function () {
    Route::get('/company/register/step/1', [AuthController::class, 'registerStepOne'])->name('register.one');
    Route::post('/company/register/step/1', [AuthController::class, 'postStepOne'])->name('register.one.post');
    Route::get('/company/register/step/2', [AuthController::class, 'registerStepTwo'])->name('register.two');
    Route::post('/company/register/step/2', [AuthController::class, 'postStepTwo'])->name('register.two.post');

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('post.login');
});




Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'verifyEmail'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', [AuthController::class, 'sendVerification'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('/company')
        ->name('company.')
        ->group(function () {
        Route::get('/dashboard', [CompanyController::class, 'index'])->name('dashboard');
        Route::get('/profile', [CompanyController::class, 'show'])->name('profile');
        Route::get('/edit', [CompanyController::class, 'edit'])->name('edit');
        Route::post('/edit', [CompanyController::class, 'update']);

        Route::singleton('employee', EmployeeController::class)->creatable();
        Route::post('employee/store/manual', [EmployeeController::class, 'storeManual'])->name('employee.store.manual');

            Route::controller(SchedulerController::class)->prefix('scheduler')->group(function () {
                Route::get('/', 'index')->name('scheduler.index');
                Route::get('/publish', 'publish')->name('scheduler.publish');
            });
        //Route::get('scheduler', ShowScheduler::class)->name('scheduler.show');
    });
});
