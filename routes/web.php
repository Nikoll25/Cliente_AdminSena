<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\TeacherController;
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

Route::get('area/list', [AreaController::class, 'index'])->name('area.index');
Route::get('area/create',[AreaController::class,'create'])->name('area.create');
Route::post('area', [AreaController::class, 'store'])->name('area.store');
Route::get('area/{area}', [AreaController::class, 'show'])->name('area.show');
Route::get('area/{area}/editar',[AreaController::class,'edit'])->name('area.edit');
Route::put('area/{area}', [AreaController::class, 'update'])->name('area.update');
Route::delete('area/{area}', [AreaController::class, 'destroy'])->name('area.destroy');

Route::get('computer/list', [ComputerController::class, 'index'])->name('computer.index');
Route::get('computer/create',[ComputerController::class,'create'])->name('computer.create');
Route::post('computer', [ComputerController::class, 'store'])->name('computer.store');
Route::get('computer/{computer}', [ComputerController::class, 'show'])->name('computer.show');
Route::get('computer/{computer}/editar',[ComputerController::class,'edit'])->name('computer.edit');
Route::put('computer/{computer}', [ComputerController::class, 'update'])->name('computer.update');
Route::delete('computer/{computer}', [ComputerController::class, 'destroy'])->name('computer.destroy');

Route::get('trainingcenter/list', [TrainingCenterController::class, 'index'])->name('trainingcenter.index');
Route::get('trainingcenter/create',[TrainingCenterController::class,'create'])->name('trainingcenter.create');
Route::post('trainingcenter', [TrainingCenterController::class, 'store'])->name('trainingcenter.store');
Route::get('trainingcenter/{trainingCenter}', [TrainingCenterController::class, 'show'])->name('trainingcenter.show');
Route::get('trainingcenter/{trainingCenter}/editar',[TrainingCenterController::class,'edit'])->name('trainingcenter.edit');
Route::put('trainingcenter/{trainingCenter}', [TrainingCenterController::class, 'update'])->name('trainingcenter.update');
Route::delete('trainingcenter/{trainingCenter}', [TrainingCenterController::class, 'destroy'])->name('trainingcenter.destroy');

