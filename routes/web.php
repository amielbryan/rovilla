<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\PersonnelController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/payroll', [PayrollController::class, 'index'])->name('payroll');

Route::resource("/personnel", PersonnelController::class);
Route::get('/personnel', [PersonnelController::class, 'index'])->name('personnel');
Route::post('/personnel/addpersonnel', [PersonnelController::class, 'create'])->name('addpersonnel');
Route::get('/personnel/addpersonnel', [PersonnelController::class, 'store']);
Route::get('/personnel/editpersonnel/{id}', [PersonnelController::class, 'edit'])->name('editpersonnel');
Route::post('/personnel/editpersonnel/{id}', [PersonnelController::class, 'update']);


Route::resource("/position", PositionController::class);
Route::get('/position', [PositionController::class, 'index'])->name('position');
Route::post('/position/addposition', [PositionController::class, 'store']);
Route::get('/position/addposition', [PositionController::class, 'create'])->name('addposition');
Route::get('/position/editposition/{id}', [PositionController::class, 'edit'])->name('editposition');
Route::post('/position/editposition/{id}', [PositionController::class, 'update']);



Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/posts', function () {
    return view('posts.index');
});
