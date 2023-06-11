<?php

use App\Models\cv;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [JobController::class, 'index'])->name('home');
Route::prefix('dashboard')->middleware(['auth'])->group(function(){
    Route::view('/','dashboard')->name('dashboard');
    Route::view('/create-job','create-job')->name('dashboard.create-job');
    Route::get('/jobs',[JobController::class,'jobs'])->name('dashboard.jobs');
    $cvs=cv::latest()->get();
    Route::view('/cvs','Cvs-table',['cvs'=>$cvs])->name('dashboard.cvs');
});

Route::resource('/jobs', JobController::class)->except('index');
Route::resource('/apply', CvController::class);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
