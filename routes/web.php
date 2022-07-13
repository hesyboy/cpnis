<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DocumentTypeController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\NotifyController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TaskController;
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

Route::prefix('/')->middleware(['auth'])->group(function(){

    Route::get('/',[SiteController::class,'index'])->name('index');

    Route::prefix('documents')->group(function(){

        Route::get('/',[DocumentController::class,'index'])->name('documents.index');
        Route::get('/create',[DocumentController::class,'create'])->name('documents.create');
        Route::post('/store',[DocumentController::class,'store'])->name('documents.store');
        Route::get('/edit/{id}',[DocumentController::class,'edit'])->name('documents.edit');
        Route::put('/update/{id}',[DocumentController::class,'update'])->name('documents.update');
        Route::delete('/delete/{id}',[DocumentController::class,'destroy'])->name('documents.delete');

        Route::prefix('types')->group(function(){
            Route::get('/',[DocumentTypeController::class,'index'])->name('documents.types.index');
            Route::get('/create',[DocumentTypeController::class,'create'])->name('documents.types.create');
            Route::post('/store',[DocumentTypeController::class,'store'])->name('documents.types.store');
            Route::get('/edit/{id}',[DocumentTypeController::class,'edit'])->name('documents.types.edit');
            Route::put('/update/{id}',[DocumentTypeController::class,'update'])->name('documents.types.update');
            Route::delete('/delete/{id}',[DocumentTypeController::class,'destroy'])->name('documents.types.delete');
        });

    });
    

    Route::prefix('tasks')->group(function(){

        Route::get('/',[TaskController::class,'index'])->name('tasks.index');
        Route::get('/create',[TaskController::class,'create'])->name('tasks.create');
        Route::post('/store',[TaskController::class,'store'])->name('tasks.store');
        Route::get('/edit/{id}',[TaskController::class,'edit'])->name('tasks.edit');
        Route::put('/update/{id}',[TaskController::class,'update'])->name('tasks.update');
        Route::delete('/delete/{id}',[TaskController::class,'destroy'])->name('tasks.delete');

    });






    Route::prefix('activities')->group(function(){

        Route::get('/',[ActivityController::class,'index'])->name('activities.index');
        Route::get('/create',[ActivityController::class,'create'])->name('activities.create');
        Route::post('/store',[ActivityController::class,'store'])->name('activities.store');
        Route::get('/edit/{id}',[ActivityController::class,'edit'])->name('activities.edit');
        Route::put('/update/{id}',[ActivityController::class,'update'])->name('activities.update');
        Route::delete('/delete/{id}',[ActivityController::class,'destroy'])->name('activities.delete');

    });

});







Route::get('/notify/{id}',[NotifyController::class,'manualnotify'])->name('manualnotify');

Route::get('/notifications',[NotifyController::class,'index'])->name('notifications.index');

Route::get('/email/edit',[EmailController::class,'edit'])->name('email.edit');

Route::put('/email/update',[EmailController::class,'update'])->name('email.update');

Route::get('/search',[DocumentController::class,'search'])->name('search');


Route::get('/setting/edit',[SiteController::class,'edit'])->name('setting.edit');

Route::put('/setting/update',[SiteController::class,'update'])->name('setting.update');







// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
