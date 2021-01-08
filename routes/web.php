<?php

use App\Http\Controllers\BackendPartnerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactPartnerController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;

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
//visuallizzazione
Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/category/{name}/{id}/announcements', [PublicController::class, 'indexByCategory'])->name('public.announcements.category');
Route::get('/annuncio/{announcement}', [PublicController::class, 'show'])->name('announcements.show');




//salvare l'email
Route::post('/contact_save', [ContactPartnerController::class, 'contactSave'])->name('contact_save');

Auth::routes();


//revisore
Route::get('/revisor', [RevisorController::class, 'index'])->middleware('auth.revisor')->name('revisor.home');
Route::post('/revisor/annunci/{id}/accettato', [RevisorController::class, 'accept'])->name('revisor.accept');
Route::post('/revisor/annunci/{id}/rigettato', [RevisorController::class, 'reject'])->name('revisor.reject');



//backend Partner
Route::get('/partner', [BackendPartnerController::class, 'index'])->name('partners.index');


Route::get('/partner/nuovo-annuncio', [BackendPartnerController::class, 'create'])->name('partners.create');
Route::post('/partner/nuovo-annuncio/store', [BackendPartnerController::class, 'store'])->name('partners.store');
// Route::get('/partner/edit/{announcement}', [BackendPartnerController::class , 'edit'])->name('partners.edit');
// Route::put('/partner/update/{post}', [BackendPartnerController::class , 'update'])->name('partners.update');

//ricerca
Route::get('/search', [PublicController::class, 'search'])->name('search');
