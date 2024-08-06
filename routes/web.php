<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'index'])->name('contact');


Route::get('/', [HomeController::class, 'index'])->name('home');
// Routes pour les produits
Route::resource('products', ProductController::class);

// Routes pour les messages
Route::resource('messages', MessageController::class);

// Routes pour le panier
Route::resource('cart', CartController::class);

// Routes pour les commandes
Route::resource('orders', OrderController::class);
