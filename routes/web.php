<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TemplateController;
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

// Route::get('/login', function () {
//     return view('auth.login');
// });
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('custom-login', [LoginController::class, 'customLogin'])->name('login.custom'); 
Route::post('custom-registration', [LoginController::class, 'customRegistration'])->name('register.custom'); 
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    });
    Route::get('setting', [LoginController::class, 'settingpage'])->name('setting.page');
    Route::post('change-password/{id}', [LoginController::class, 'changePassword']);
    Route::post('change-profile/{id}', [LoginController::class, 'changeProfile']);
    Route::get('cagetory', [CategoryController::class, 'index'])->name('category.name');
    Route::get('template/{pagename}', [TemplateController::class, 'index']);
});

//clear cache

Route::get('/config-clear', function() {
    Artisan::call('config:clear');
    return 'Config cache cleared';
});

Route::get('/route-clear', function() {
    Artisan::call('route:clear');
    return 'Config cache cleared';
});


Route::get('/cache-clear', function() {
    Artisan::call('cache:clear');
    return 'Application cache cleared';
});

Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'View cache cleared';
});
