<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\LoginComponent;

use App\Http\Livewire\HomeComponent;

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

//  Route::get('/', function () {
//      return view('welcome');
//  });

Route::get('/', LoginComponent::class)->name('login');

Route::get('/home', HomeComponent::class)->name('home');