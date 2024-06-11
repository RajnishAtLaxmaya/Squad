<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\AuthTemplate;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganisationController;
use App\Http\Controllers\UserController;


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



Route::get('/',[HomeController::class,'index']);
Route::get('/privacy_policy',[HomeController::class,'privacy_policy'])->name('privacy_policy');
Route::get('/terms_and_conditions',[HomeController::class,'terms_and_conditions'])->name('terms_and_conditions');

// Auth url
Route::get('/signin',[AuthTemplate::class,'signin'])->name('signin');
Route::get('/signup',[AuthTemplate::class,'signup'])->name('signup');
Route::get('/org-signup',[AuthTemplate::class,'orgsignup'])->name('org-signup');
Route::get('/org-signin',[AuthTemplate::class,'orgsignuin'])->name('org-signin');
Route::get('/admin-signin',[AuthTemplate::class,'admin_singin'])->name('admin-signin');

// Auth routes








// user_side


Route::get('/user-profile',[UserController::class,'userprofile'])->name('profile');
Route::get('/home',[UserController::class,'index'])->name('home');


// organisation


Route::get('/organisation_dashboard',[OrganisationController::class,'orgdash'])->name('organisation_dashboard');
Route::get('/org-event',[OrganisationController::class,'orgevent'])->name('org-event');
Route::get('/org-profile',[OrganisationController::class,'profile'])->name('org-profile');




Route::get('/get-data', [UserController::class, 'get_data']);   