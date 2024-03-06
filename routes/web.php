<?php

use App\Livewire\ShowBookAppointment;
use App\Livewire\ShowConsultation;
use App\Livewire\ShowHome;
use App\Livewire\ShowPrivacyPolicy;
use App\Livewire\ShowTermOfUse;
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

Route::get('/', ShowHome::class);
Route::get('/privacy-policy', ShowPrivacyPolicy::class);
Route::get('/term-of-use', ShowTermOfUse::class);
Route::get('/book-appointment', ShowBookAppointment::class);
Route::get('/consultation', ShowConsultation::class);
