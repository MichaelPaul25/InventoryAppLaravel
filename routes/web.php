<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\LoginComponent;
use App\Http\Livewire\LogoutComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\DashboardComponent;
use App\Http\Livewire\InventoryComponent;


Route::get('/', HomeComponent::class)->name('home');
Route::get('/logout', LogoutComponent::class)->name('logout');

Route::middleware('guest')->group(function () {
    Route::get('/login', LoginComponent::class)->name('login');
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/dashboard', DashboardComponent::class)->name('dashboard');
    Route::get('/inventory', InventoryComponent::class)->name('inventory');
});