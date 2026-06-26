<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Routes pour les pages statiques
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/rgpd', [PageController::class, 'rgpd'])->name('rgpd');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Route pour la soumission du formulaire de contact
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');