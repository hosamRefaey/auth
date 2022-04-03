<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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

Auth::routes(["verify"=>true]);

//get the profile form to update the profile
Route::get('/profile', [ProfileController::class,'index'])->name('profile');
//update the profile
Route::put('/profile/update', [ProfileController::class,'update'])->name('update');
Route::get('home', [HomeController::class,'index'])->name('home')->middleware("verified");
Route::get('/send-email', [mailController::class, 'sendEmail']);
