<?php

use App\Http\Controllers\Admin\AdminPanelSettingController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'guest:admin'], function(){
    Route::get('login', [LoginController::class,'show_login_view'])->name('admin.showlogin');
    Route::post('login', [LoginController::class,'login'])->name('admin.login');
});


Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth:admin'], function(){
    Route::get('dashboard', [DashboardController::class,'index'])->name('admin.dashboard');
    Route::get('logout', [LoginController::class,'logout'])->name('admin.logout');


    Route::get('adminpanelsetting/index', [AdminPanelSettingController::class,'index'])->name('admin.adminPanelSetting.index');
    Route::get('/adminpanelsetting/edit',[AdminPanelSettingController::class,'edit'])->name('admin.adminPanelSetting.edit');
    Route::post('/adminpanelsetting/update',[AdminPanelSettingController::class,'update'])->name('admin.adminPanelSetting.update');
});
