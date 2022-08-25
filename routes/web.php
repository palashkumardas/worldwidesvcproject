<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\PartnerController;
use App\Http\Controllers\Backend\PayoutPartnerController;
use App\Http\Controllers\AdminAuth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;

use App\Models\Contact;
use App\Models\About;

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

// site all frontend page
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/service', [HomeController::class, 'service']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/career', [HomeController::class, 'career']);
Route::get('/details',[HomeController::class,'careerdetails']);
Route::get('/cookie',[HomeController::class,'cookie']);
Route::get('/login',[HomeController::class,'login']);
Route::get('/register',[HomeController::class,'register']);
Route::get('/privacy',[HomeController::class,'privacy']);
Route::get('/terms',[HomeController::class,'terms']);
Route::get('/reset',[HomeController::class,'reset']);

//Auth::routes(['verify' => true]);

// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin/login', [LoginController::class, 'loginForm'])->name('admin.login.form');
Route::post('/admin-login', [LoginController::class, 'login'])->name('admin.login');

// backend route

Route::group(['middleware' => 'admin','prefix'=> 'admin'], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/about-us', [AdminController::class, 'about'])->name('admin.about');
    Route::post('/about-update', [AdminController::class, 'aboutUpdate'])->name('admin.about.update');
    Route::get('/contact-us', [AdminController::class, 'contact'])->name('admin.contact');
    Route::post('/contact-update', [AdminController::class, 'contactUpdate'])->name('admin.contact.update');
    Route::get('/privacy-policy', [AdminController::class, 'policy'])->name('admin.policy');
    Route::post('/policy-update', [AdminController::class, 'policyUpdate'])->name('admin.policy.update');
    Route::get('/terms-and-condition', [AdminController::class, 'terms'])->name('admin.terms');
    Route::post('/terms-and-condition-update', [AdminController::class, 'termsUpdate'])->name('admin.terms.update');
    Route::get('/cookies-policy', [AdminController::class, 'coockies'])->name('admin.cookies');
    Route::post('/cookies-update', [AdminController::class, 'cookiesUpdate'])->name('admin.cookies.update');
    Route::get('/user-list', [AdminController::class, 'usertList'])->name('user.list');
    Route::get('/user-inactive/{$id}', [AdminController::class, 'userInactive'])->name('user.inactive');
    Route::get('/user-active/{$id}', [AdminController::class, 'userActive'])->name('user.active');

    Route::resource('partner', PartnerController::class);
    Route::resource('payout-partner', PayoutPartnerController::class);
});
