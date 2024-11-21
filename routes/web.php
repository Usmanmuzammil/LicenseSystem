<?php

use App\Http\Controllers\Admin\PunjabLicenseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\LicenseController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingsContrller;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
 Route::post('/search',[SearchController::class, 'search'])->name('search');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function(){

    Route::get('admin/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
    Route::get('admin/profile',[ProfileController::class,'index'])->name('admin.profile.index');
    Route::get('admin/profile/edit',[ProfileController::class,'edit'])->name('admin.profile.edit');
    Route::post('admin/profile/update/{id}',[ProfileController::class,'update'])->name('admin.profile.update');

    // Route::controller(LicenseController::class)->group(function(){
    //     Route::get('admin/license','index')->name('admin.user.index');
    //     Route::get('admin/create/license','create')->name('admin.user.create');
    //     Route::post('admin/store/license','store')->name('admin.user.store');
    //     Route::get('admin/edit/license/{id}','edit')->name('admin.user.edit');
    //     Route::post('admin/update/license/{id}','update')->name('admin.user.update');
    //     Route::delete('admin/update/license/{id}','destroy')->name('admin.user.destroy');
    //     Route::get('admin/view/license/{id}','view')->name('admin.user.view');
    //     Route::get('admin/print/license/{id}','printCard')->name('admin.print-license');
    //     //   Route::delete('admin/delete/all','deleteAll')->name('admin.user.delete.all');
        
    // });


    Route::controller(PunjabLicenseController::class)->group(function() {
        Route::get('admin/punjablicense','index')->name('admin.punjablicense.index');
        Route::get('admin/create/punjablicense','create')->name('admin.punjablicense.create');
        Route::post('admin/store/punjablicense','store')->name('admin.punjablicense.store');
        Route::get('admin/edit/punjablicense/{id}','edit')->name('admin.punjablicense.edit');
        Route::put('admin/update/punjablicense/{id}','update')->name('admin.punjablicense.update');
        Route::delete('admin/update/punjablicense/{id}','destroy')->name('admin.punjablicense.destroy');
        Route::get('admin/view/punjablicense/{id}','view')->name('admin.punjablicense.view');
        Route::get('admin/print/punjablicense/{id}','printCard')->name('admin.print-punjablicense');
    });


    Route::get('admin/general-settings',[SettingsContrller::class,'generalSettings'])->name('admin.setting.general');
    Route::get('admin/privacy-policy',[SettingsContrller::class,'PrivacyPolicy'])->name('admin.privacy-policy');
    Route::post('admin/privacy-policy/store',[SettingsContrller::class,'storePrivacyPolicy'])->name('admin.privacy_policy.store');
    Route::get('admin/terms-and-conditions',[SettingsContrller::class,'TermsAndConditions'])->name('admin.terms-and-conditions');
    Route::post('admin/terms-and-conditions/store',[SettingsContrller::class,'storeTermsAndConditions'])->name('admin.terms_and_conditions.store');

    Route::post('admin/site-setting/store',[SettingsContrller::class,'storeSiteSettings'])->name('admin.site-setting.store');
    Route::post('admin/smtp-setting/store',[SettingsContrller::class,'storeSmtpSettings'])->name('admin.smtp-setting.store');
});