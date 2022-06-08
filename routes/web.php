<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/',[PublicController::class, 'homepage'])->name('homepage');
Route::get('/contacts',[PublicController::class, 'contacts'])->name('contacts');
Route::get('/services',[PublicController::class, 'services'])->name('services');