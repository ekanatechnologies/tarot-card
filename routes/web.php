<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConsultantController;
use App\Http\Controllers\CustomerContactController;
use App\Http\Controllers\DevController;
use App\Http\Controllers\HomeController;
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
Route::group([], function(){
    Route::get('/', [HomeController::class,'index'])->name('home');
    Route::get('about-us', [HomeController::class,'aboutUs'])->name('aboutUs');
    Route::get('testimonials', [HomeController::class,'testimonials'])->name('testimonials');
    Route::get('contact-us', [HomeController::class,'contactUsPage'])->name('contactUsPage');
    Route::post('contact-us', [CustomerContactController::class,'create'])->name('contactUsCreate');
    Route::get('prediction-services', [HomeController::class,'predictionServices'])->name('predictionServices');
});
Route::group(['prefix'=>'consultant'], function(){
    Route::get('all', [ConsultantController::class,'listPage'])->name('consultant.list.all-page');
});

Route::post('/login', [HomeController::class,'login'])->name('auth.login');
Route::post('/signup', [HomeController::class,'signup'])->name('auth.signup');

Route::get('/logout', [HomeController::class,'logout'])->name('auth.logout')->middleware('auth');

Route::group(['prefix'=>'panel/admin','middleware' => ['auth','role:admin']], function(){
    Route::get('/', [AdminController::class,'index'])->name('admin.dashboard');
    Route::get('user', [AdminController::class,'user_list'])->name('admin.user.list');
    Route::group(['prefix'=>'settings'], function(){
        Route::get('website', [AdminController::class,'websiteSettingsView'])->name('admin.website-settings-view');
        Route::post('website', [AdminController::class,'websiteSettings'])->name('admin.website-settings');
    });
});


Route::group(['prefix'=>'consultant','middleware' => ['auth','role:consultant']], function(){
    Route::get('/', [ConsultantController::class,'index'])->name('consultant.dashboard');
    Route::get('/profile', [ConsultantController::class,'profilePage'])->name('consultant.profile-page');
    Route::get('/profile/edit', [ConsultantController::class,'profileEditPage'])->name('consultant.profile-edit-page');
    Route::post('/profile/edit', [ConsultantController::class,'profileEdit'])->name('consultant.profile-edit');
});


//Route::group(['prefix'=>'dev'], function(){
//    Route::get('/roles', [DevController::class,'roles'])->name('consultant.dashboard');
//    Route::get('/roles/create', [DevController::class,'rolesCreate'])->name('consultant.dashboard');
//});
