<?php

use App\Livewire\ShowArticle;
use App\Livewire\ShowBookAppointment;
use App\Livewire\ShowConsultation;
use App\Livewire\ShowHome;
use App\Livewire\ShowOurTeam;
use App\Livewire\ShowPrivacyPolicy;
use App\Livewire\Showservice;
use App\Livewire\ShowTermOfUse;
use App\Livewire\ShowWhoWeAre;
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
Route::get('/service/{id}', Showservice::class)->name('service');
Route::get('/article/{id}', ShowArticle::class)->name('article');
Route::get('/privacy-policy', ShowPrivacyPolicy::class);
Route::get('/term-of-use', ShowTermOfUse::class);
Route::get('/book-appointment', ShowBookAppointment::class);
Route::get('/consultation', ShowConsultation::class);
Route::get('/our-team', ShowOurTeam::class);
Route::get('/who-we-are', ShowWhoWeAre::class);
