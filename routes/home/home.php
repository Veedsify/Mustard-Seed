<?php

use App\Livewire\AboutComponent;
use App\Livewire\BlogComponent;
use App\Livewire\BlogDetailsComponent;
use App\Livewire\ContactComponent;
use App\Livewire\HomeComponent;
use App\Livewire\LoginComponent;
use App\Livewire\RegisterComponent;
use Illuminate\Support\Facades\Route;

// Home Page Routes
Route::get('/', HomeComponent::class)->name('home');
Route::get('/about', AboutComponent::class)->name('about');
Route::get('/blog/{slug}', BlogDetailsComponent::class)->name('blog.details');
Route::get('/blogs', BlogComponent::class)->name('blogs');
Route::get('/login', LoginComponent::class)->name('login');
Route::get('/register', RegisterComponent::class)->name('register');
// Route::get('/logout', [LoginComponent::class, 'logout'])->name('logout');
Route::get('/contact', ContactComponent::class)->name('contact');
