<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

//*******************************************************************************//

//*** Home Page ***//
Route::get('/', function () {
    return view('home');
});

//*** Country Pages ***//

// Country List
Route::get('/country-pages/countries', function () {
    return view('country-pages.countries');
});

//*** University Pages ***//

// University List
Route::get('/university-pages/universities', function () {
    return view('university-pages.universities');
});

//*** Course Pages ***//

// Course list
Route::get('/course-pages/courses', function () {
    return view('course-pages.courses');
});


//*** Contact Us Page ***//
Route::get('/contact-us', function () {
    return view('contact-us');
});

//*** What We Do Pages ***//

// Accomodation Arrangement
Route::get('/what-we-do-pages/accomodation', function () {
    return view('what-we-do-pages.accomodation');
});

// Application Services
Route::get('/what-we-do-pages/application-services', function () {
    return view('what-we-do-pages.application-services');
});

// Counseling
Route::get('/what-we-do-pages/counseling', function () {
    return view('what-we-do-pages.counseling');
});

// Trusted Partner
Route::get('/what-we-do-pages/trusted-partner', function () {
    return view('what-we-do-pages.trusted-partner');
});

// Workshop
Route::get('/what-we-do-pages/workshop', function () {
    return view('what-we-do-pages.workshop');
});
