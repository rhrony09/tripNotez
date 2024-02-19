<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UsersController;
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

Route::get('/', [FrontendController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin Panel
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth', 'as' => 'dashboard.'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    //area list
    Route::get('area', [AreaController::class, 'index'])->name('area.index');
    Route::get('area/create', [AreaController::class, 'create'])->name('area.create');
    Route::post('area/store', [AreaController::class, 'store'])->name('area.store');
    Route::get('area/edit/{id}', [AreaController::class, 'edit'])->name('area.edit');
    Route::post('area/update', [AreaController::class, 'update'])->name('area.update');
    Route::get('area/delete/{id}', [AreaController::class, 'delete'])->name('area.delete');

    //place
    Route::get('place/resorts', [PlaceController::class, 'resorts'])->name('place.resorts');
    Route::get('place/restaurants', [PlaceController::class, 'restaurants'])->name('place.restaurants');
    Route::get('place/create', [PlaceController::class, 'create'])->name('place.create');
    Route::post('place/store', [PlaceController::class, 'store'])->name('place.store');
    Route::post('place/{id}', [PlaceController::class, 'show'])->name('place.show');
    Route::get('place/edit/{id}', [PlaceController::class, 'edit'])->name('place.edit');
    Route::post('place/update', [PlaceController::class, 'update'])->name('place.update');
    Route::get('place/delete/{id}', [PlaceController::class, 'delete'])->name('place.delete');

    //users management
    Route::get('users', [UsersController::class, 'index'])->name('users');
    Route::get('profile', [UsersController::class, 'user_profile'])->name('users.profile');
    Route::get('users/{id}', [UsersController::class, 'user_show'])->name('users.show');
    Route::post('users/add', [UsersController::class, 'user_add'])->name('users.add');
    Route::post('users/update/info', [UsersController::class, 'user_update_info'])->name('users.update.info');
    Route::post('users/update/password', [UsersController::class, 'user_update_password'])->name('users.update.password');
    Route::post('users/update/pro_pic', [UsersController::class, 'user_update_pro_pic'])->name('users.update.pro.pic');
    Route::get('users/delete/{id}', [UsersController::class, 'user_delete'])->name('users.delete');

    //settings
    Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::post('settings', [SettingsController::class, 'settings_update'])->name('settings.update');
});
