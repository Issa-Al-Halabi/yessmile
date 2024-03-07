<?php

use App\Livewire\ShowArticle;
use App\Livewire\ShowBookAppointment;
use App\Livewire\ShowBranches;
use App\Livewire\ShowConsultation;
use App\Livewire\ShowHome;
use App\Livewire\ShowNews;
use App\Livewire\ShowOurClinic;
use App\Livewire\ShowOurTeam;
use App\Livewire\ShowOurWorld;
use App\Livewire\ShowPrivacyPolicy;
use App\Livewire\Showservice;
use App\Livewire\ShowTermOfUse;
use App\Livewire\ShowWhoWeAre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


Route::group([
    "middleware" => "localization"
], function () {

    // ================= Home ================= //
    Route::get('/', ShowHome::class);

    // ================= Our Clinic ================= //
    Route::get('/our-clinic', ShowOurClinic::class);

    // ================= Services ================= //
    Route::get('/service/{id}', Showservice::class)->name('service');

    // ================= About ================= //
    Route::get('/who-we-are', ShowWhoWeAre::class);
    Route::get('/our-team', ShowOurTeam::class);
    Route::get('/our_branches', ShowBranches::class);


    // ================= Our World ================= //
    Route::get('/our-world', ShowOurWorld::class);
    Route::get('/article/{id}', ShowArticle::class)->name('article');
    Route::get('/news/{id}', ShowNews::class)->name('news');

    // ================= Forms ================= //
    Route::get('/book-appointment', ShowBookAppointment::class);
    Route::get('/consultation', ShowConsultation::class);

    // ================= Privacy & Terms ================= //
    Route::get('/privacy-policy', ShowPrivacyPolicy::class);
    Route::get('/term-of-use', ShowTermOfUse::class);

    Route::get('/ar', function (Request $request) {

        Session::put("locale", "ar");
        App::setLocale("ar");

        return redirect()->back();
    });

    Route::get('/en', function () {

        Session::put("locale", "en");
        App::setLocale("en");

        return redirect()->back();
    });
});
