<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Client\Request;
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

Route::get('/', [JobController::class, 'index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/create-job', function () {
    return view('create-job');
})->middleware(['auth', 'verified'])->name('dashboard.create-job');
Route::get('/dashboard/jobs', function () {
    $jobs=Job::where('user_id',auth()->id())->get();
    return view('Jobs-table')->with('jobs',$jobs);
})->middleware(['auth', 'verified'])->name('dashboard.jobs');

Route::middleware('auth')->group(function () {
    Route::resource('/jobs', JobController::class)->except('index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('users/{id}', function ($id) {
    return $id;
});
Route::get('admin/jobs', function () {
    $jobs=User::with('Jobs')->get();
    return $jobs;
});

require __DIR__.'/auth.php';
