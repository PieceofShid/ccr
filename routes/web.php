<?php

use App\Http\Controllers\AssyController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\CamController;
use App\Http\Controllers\CrankController;
use App\Http\Controllers\HeadController;
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

Route::get('/', function () {return view('dashboard');})->name('dashboard');

Route::prefix('block')->group(function(){
    Route::get('/create', [BlockController::class, 'add'])->name('block.add');
    Route::get('/{date}/check/{shift}', [BlockController::class, 'check'])->name('block.check');
    Route::post('/create', [BlockController::class, 'create'])->name('block.create');
});

Route::prefix('crank')->group(function(){
    Route::get('/create', [CrankController::class, 'add'])->name('crank.add');
    Route::get('/{date}/check/{shift}', [CrankController::class, 'check'])->name('crank.check');
    Route::post('/create', [CrankController::class, 'create'])->name('crank.create');
});

Route::prefix('head')->group(function(){
    Route::get('/create', [HeadController::class, 'add'])->name('head.add');
    Route::get('/{date}/check/{shift}', [HeadController::class, 'check'])->name('head.check');
    Route::post('/create', [HeadController::class, 'create'])->name('head.create');
});

Route::prefix('cam')->group(function(){
    Route::get('/create', [CamController::class, 'add'])->name('cam.add');
    Route::get('/{date}/check/{shift}', [CamController::class, 'check'])->name('cam.check');
    Route::post('/create', [CamController::class, 'create'])->name('cam.create');
});

Route::prefix('assy')->group(function(){
    Route::get('/create', [AssyController::class, 'add'])->name('assy.add');
    Route::get('/{date}/check/{shift}', [AssyController::class, 'check'])->name('assy.check');
    Route::post('/create', [AssyController::class, 'create'])->name('assy.create');
});