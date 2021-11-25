<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayoutsController\AuthencationController;
use App\Http\Controllers\LayoutsController\ProfileController;
use App\Http\Controllers\LayoutsController\JobController;
use App\Http\Controllers\LayoutsController\UserProfileController;
use App\Http\Controllers\LayoutsController\MyprofilefeedController;
use App\Http\Controllers\LayoutsController\SettingsController;
use App\Http\Controllers\LayoutsController\CompanyController;
use App\Http\Controllers\LayoutsController\CompanyProfileController;
use App\Http\Controllers\LayoutsController\MessageController;
use App\Http\Controllers\LayoutsController\ProjectController;
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

use App\Http\Controllers\SendSMSController;


Route::get('send-sms', [SendSMSController::class, 'index']);

//home page route
Route::get('/',[HomeController::class,'index'])->name('index');

//authentication route
Route::get('/login',[AuthencationController::class,'index'])->name('login');

//profile controller
Route::get('/profile',[ProfileController::class,'index'])->name('profile');

//Job controller
Route::get('/job',[JobController::class,'index'])->name('job');

//user profille route
Route::get('/user_profile', [UserProfileController::class, 'index'])->name('user_profile');

//user my profile feed route
Route::get('/my_profile_feed', [MyprofilefeedController::class, 'index'])->name('my_profile_feed');

//setting route
Route::get('/setting', [SettingsController::class, 'index'])->name('setting');

//company route
Route::get('/company', [CompanyController::class, 'index'])->name('company');

//company profile route
Route::get('/company_profile', [CompanyProfileController::class, 'index'])->name('company_profile');

//message  route
Route::get('/message', [MessageController::class, 'index'])->name('message');

// project route
Route::get('/project', [ProjectController::class, 'index'])->name('project');
