<?php

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

use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'index'])->name('contact_form');
Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact_confirm');
Route::post('/store', [ContactController::class, 'store'])->name('contact_store');
Route::get('/complete', [ContactController::class, 'complete'])->name('contact_complete');
