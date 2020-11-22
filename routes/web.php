<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\Master\JobController;
use App\Http\Controllers\Admin\Master\MajorController;
use App\Http\Controllers\Admin\Master\AmanahController;
use App\Http\Controllers\Admin\Master\DivisionController;
use App\Http\Controllers\Admin\Master\GraduateController;
use App\Http\Controllers\Admin\Master\SosmedController;
use App\Http\Controllers\Admin\Master\SpecializationController;

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
Route::get('/', function() {
return view('landing-page-old');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');    

    Route::resource('/members', MemberController::class);
    Route::prefix('members')->name('members.')->group(function () {
        Route::get('/show/trashed', [MemberController::class, 'viewTrashed'])->name('view-trashed');
        Route::get('/{id}/restore', [MemberController::class, 'restore'])->name('restore');
        Route::delete('/{id}/force-delete', [MemberController::class, 'forceDelete'])->name('force-delete');

        Route::put('/profile/photo/{id}/update', [MemberController::class, 'profilePhotoUpdate'])->name('profile-photo-update');
        Route::get('/profile/photo/{id}/download', [MemberController::class, 'profilePhotoDownload'])->name('profile-photo-download');
        Route::get('/profile/photo/{id}/delete', [MemberController::class, 'profilePhotoDelete'])->name('profile-photo-delete');
    });
    
    Route::prefix('masters')->name('masters.')->group(function () {
        Route::resource('/specializations', SpecializationController::class);
        Route::get('/specializations/{id}/restore', [SpecializationController::class, 'restore'])->name('specializations.restore');
        Route::delete('/specializations/{id}/force-delete', [SpecializationController::class, 'forceDelete'])->name('specializations.force-delete');
        
        Route::resource('/graduates', GraduateController::class);
        Route::get('/graduates/{id}/restore', [GraduateController::class, 'restore'])->name('graduates.restore');
        Route::delete('/graduates/{id}/force-delete', [GraduateController::class, 'forceDelete'])->name('graduates.force-delete');
        
        Route::resource('/majors', MajorController::class);
        Route::get('/majors/{id}/restore', [MajorController::class, 'restore'])->name('majors.restore');
        Route::delete('/majors/{id}/force-delete', [MajorController::class, 'forceDelete'])->name('majors.force-delete');
        
        Route::resource('/jobs', JobController::class);
        Route::get('/jobs/{id}/restore', [JobController::class, 'restore'])->name('jobs.restore');
        Route::delete('/jobs/{id}/force-delete', [JobController::class, 'forceDelete'])->name('jobs.force-delete');
        
        Route::resource('/amanah', AmanahController::class);
        Route::get('/amanah/{id}/restore', [AmanahController::class, 'restore'])->name('amanah.restore');
        Route::delete('/amanah/{id}/force-delete', [AmanahController::class, 'forceDelete'])->name('amanah.force-delete');
        
        Route::resource('/divisions', DivisionController::class);
        Route::get('/divisions/{id}/restore', [DivisionController::class, 'restore'])->name('divisions.restore');
        Route::delete('/divisions/{id}/force-delete', [DivisionController::class, 'forceDelete'])->name('divisions.force-delete');
        
        Route::resource('/sosmeds', SosmedController::class);
        Route::get('/sosmeds/{id}/restore', [SosmedController::class, 'restore'])->name('sosmeds.restore');
        Route::delete('/sosmeds/{id}/force-delete', [SosmedController::class, 'forceDelete'])->name('sosmeds.force-delete');
    });   
});
