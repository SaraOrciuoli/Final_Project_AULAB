<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'home'])->name('homepage');
Route::get('/category/{category}', [PublicController::class, 'categoryShow'])->name('category_show');

Route::get('/create/announcement', [AnnouncementController::class, 'create'])->middleware('auth')->name('create_announcement');

// rotta dettaglio
Route::get('/announcement/detail/{announcement}', [AnnouncementController::class, 'show'])->name('announcement_show');
Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements');
