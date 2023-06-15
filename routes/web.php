<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
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
// Rotta lista annunci singole catagorie
Route::get('/category/{category}', [PublicController::class, 'categoryShow'])->name('category_show');
// Rotta aggiungi annunci
Route::get('/create/announcement', [AnnouncementController::class, 'create'])->middleware('auth')->name('create_announcement');

// rotta dettaglio annunci
Route::get('/announcement/detail/{announcement}', [AnnouncementController::class, 'show'])->name('announcement_show');
Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements');


// home revisor
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor_index');

// Accetta annuncio
Route::patch('/accept/announcement/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor_accept_announcement');

// Rifiuta annuncio
Route::patch('/reject/announcement/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor_reject_announcement');

// Annulla operazione
Route::patch('/undo/announcement/{announcement}', [RevisorController::class, 'undoAnnouncement'])->middleware('isRevisor')->name('revisor_undo_announcement');


// Rotta per diventare revisore
Route::get('/request/revisor', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become_revisor');

// rotta rendi un utente revisore
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make_revisor');

// Rotta ricerca annuncio
Route::get('/search/announcement', [PublicController::class, 'searchAnnouncements'])->name('search_announcements');
// Rotta per cambio lingua
Route::post('/lingua/{lang}',[PublicController::class,'setLanguage'])->name('set_language_locale');

// Rotta di contattaci
Route::get('/contact-us', [PublicController::class, 'contact_us'])->name('contact_us');

// Rotta per mandare una mail
Route::post('/send', [PublicController::class, 'send'])->name('send');


