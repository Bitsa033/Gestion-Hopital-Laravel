<?php

use App\Http\Controllers\AudienceController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\RechercheController;
use App\Http\Controllers\UserController;
use App\Mail\MailableName;
use Illuminate\Support\Facades\Route;

use App\Mail\MyTestEmail;
use Illuminate\Support\Facades\Mail;

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

Route::get('/testroute', function() {
    $name = "Funny Coder";

    // The email sending is done using the to method on the Mail facade
    Mail::to('bitsapascal033@gmail.com')->send(new MailableName($name));
});


Route::get('welcome', function () {
    return view('welcome');
});


// users
Route::get('/', [UserController::class,'login']);
Route::get('registerForm', [UserController::class,'register']);
Route::get('users', [UserController::class,'index']);
Route::get('showUser_{id}', [UserController::class,'show']);
Route::post('updateUser/{id}', [UserController::class,'update']);
Route::get('deleteUser/{id}', [UserController::class,'delete']);
Route::get('printUsers', [UserController::class,'printUsers']);
Route::get('printUser', [UserController::class,'printUser']);
Route::get('resetPasswordForm', [ResetPasswordController::class,'resetPasswordForm']);
Route::post('resetPassword', [ResetPasswordController::class,'resetPassword']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//recherches
Route::get('recherches', [RechercheController::class,'show']);

//patients
Route::get('patients', [PatientsController::class,'index']);


//employés
Route::get('employes', [EmployeController::class,'index']);
Route::get('createEmploye', [EmployeController::class,'create']);
Route::post('storeEmploye', [EmployeController::class,'store']);
Route::get('showEmploye_{id}', [EmployeController::class,'show']);
Route::post('destroyl/{id}', [EmployeController::class,'destroyl']);
Route::get('delete/{id}', [EmployeController::class,'destroy']);

//audiences
Route::get('audiences', [AudienceController::class,'index']);
Route::get('showAudience_{id}', [AudienceController::class,'showAudience']);
Route::post('updateAudience/{id}', [AudienceController::class,'updateAudience']);
Route::get('deleteAudience/{id}', [AudienceController::class,'deleteAudience']);
Route::get('printAudiences', [AudienceController::class,'printAudiences']);
Route::get('printAudience', [AudienceController::class,'printAudience']);
Route::get('createAudience', [AudienceController::class,'createAudience']);
Route::post('storeAudience', [AudienceController::class,'storeAudience']);