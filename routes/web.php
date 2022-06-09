<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', [ContactController::class, 'index'])->name('phonebook.index');
Route::get('/create', [ContactController::class, 'create'])->name('phonebook.create');
Route::post('/create', [ContactController::class, 'store'])->name('phonebook.store');
Route::get('/edit/{id}', [ContactController::class, 'edit'])->name('phonebook.edit');
Route::post('/edit/{id}', [ContactController::class, 'update'])->name('phonebook.update');
Route::post('/destroy/{id}', [ContactController::class, 'destroy'])->name('phonebook.destroy');
