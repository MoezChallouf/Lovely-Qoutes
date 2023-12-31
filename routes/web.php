<?php

use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
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


Route::get('/terms', function () {
    return view('terms');
});

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/ideas', [IdeaController::class, 'store'])->name('ideas.store');
Route::get('/ideas/{idea}', [IdeaController::class, 'show'])->name('ideas.show');
Route::get('/ideas/{idea}/edit', [IdeaController::class, 'edit'])->name('ideas.edit');
Route::put('/ideas/{idea}', [IdeaController::class, 'update'])->name('ideas.update');
Route::delete('/ideas/{id}', [IdeaController::class, 'destroy'])->name('ideas.destroy');
