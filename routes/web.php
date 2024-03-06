<?php

use App\Livewire\ShowArticle;
use App\Livewire\ShowBookAppointment;
use App\Livewire\ShowConsultation;
use App\Livewire\ShowHome;
use App\Livewire\ShowNews;
use App\Livewire\ShowOurTeam;
use App\Livewire\ShowOurWorld;
use App\Livewire\ShowPrivacyPolicy;
use App\Livewire\Showservice;
use App\Livewire\ShowTermOfUse;
use App\Livewire\ShowWhoWeAre;
use Illuminate\Support\Facades\Route;


// ================= Home ================= //
Route::get('/', ShowHome::class);

// ================= Services ================= //
Route::get('/service/{id}', Showservice::class)->name('service');

// ================= Our World ================= //
Route::get('/our-world', ShowOurWorld::class);
Route::get('/article/{id}', ShowArticle::class)->name('article');
Route::get('/news/{id}', ShowNews::class)->name('news');

// ================= Privacy & Terms ================= //
Route::get('/privacy-policy', ShowPrivacyPolicy::class);
Route::get('/term-of-use', ShowTermOfUse::class);

// ================= Forms ================= //
Route::get('/book-appointment', ShowBookAppointment::class);
Route::get('/consultation', ShowConsultation::class);

// ================= About ================= //
Route::get('/who-we-are', ShowWhoWeAre::class);
Route::get('/our-team', ShowOurTeam::class);
