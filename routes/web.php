<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index']);
Route::get('/case.html', [MainController::class, 'case']);
Route::get('/case2.html', [MainController::class, 'case2']);
Route::get('/about.html', [MainController::class, 'about']);
Route::get('/contact.html', [MainController::class, 'contact']);
Route::get('/empower.html', [MainController::class, 'empower']);
Route::get('/team.html', [MainController::class, 'team']);
Route::get('/news.html', [MainController::class, 'news']);
Route::get('/news_detail_{id}.html', [MainController::class, 'detail']);
