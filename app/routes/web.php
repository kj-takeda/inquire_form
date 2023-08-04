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

Route::get('/', [ContactController::class, 'index'])->name('contact.form');
Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact_confirm');
Route::post('/complete', [ContactController::class, 'complete'])->name('contact_complete');