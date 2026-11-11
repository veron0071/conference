<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LanguageController;

// Language Switcher Routes (using /locale/ to prevent conflict with physical lang/ directory)
Route::get('/locale/{locale}', [LanguageController::class, 'switch'])->name('lang.switch');
Route::get('/language/{locale}', [LanguageController::class, 'switch']);
Route::get('/set-locale/{locale}', [LanguageController::class, 'switch']);

// Public Conference Routes
Route::get('/', [ConferenceController::class, 'index'])->name('home');
Route::get('/tracks', [ConferenceController::class, 'index'])->name('tracks');
Route::get('/speakers', [ConferenceController::class, 'index'])->name('speakers');
Route::get('/call-for-papers', [ConferenceController::class, 'index'])->name('cfp');
Route::get('/committee', [ConferenceController::class, 'index'])->name('committee');
Route::get('/conference-brochure', [ConferenceController::class, 'brochure'])->name('conference.brochure');

// Participant Registration Routes
Route::get('/register-participant', [RegistrationController::class, 'index'])->name('registration.index');
Route::post('/register-participant', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/registration/confirmation/{reg_number}', [RegistrationController::class, 'confirmation'])->name('registration.confirmation');
Route::get('/registration/check', [RegistrationController::class, 'check'])->name('registration.check');

// Admin Auth Routes
Route::get('/login', fn() => redirect()->route('admin.login'))->name('login');
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Admin Protected Dashboard & CRUD
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

    // Participant Registrations
    Route::get('/registrations', [AdminController::class, 'registrations'])->name('registrations');
    Route::get('/registrations/{id}', [AdminController::class, 'showRegistration'])->name('registrations.show');
    Route::post('/registrations/{id}/status', [AdminController::class, 'updateRegistrationStatus'])->name('registrations.status');
    Route::delete('/registrations/{id}', [AdminController::class, 'deleteRegistration'])->name('registrations.delete');

    // Speakers Management
    Route::get('/speakers', [AdminController::class, 'speakers'])->name('speakers');
    Route::post('/speakers', [AdminController::class, 'storeSpeaker'])->name('speakers.store');
    Route::put('/speakers/{id}', [AdminController::class, 'updateSpeaker'])->name('speakers.update');
    Route::delete('/speakers/{id}', [AdminController::class, 'deleteSpeaker'])->name('speakers.delete');

    // Tracks Management
    Route::get('/tracks', [AdminController::class, 'tracks'])->name('tracks');
    Route::post('/tracks', [AdminController::class, 'storeTrack'])->name('tracks.store');
    Route::put('/tracks/{id}', [AdminController::class, 'updateTrack'])->name('tracks.update');
    Route::delete('/tracks/{id}', [AdminController::class, 'deleteTrack'])->name('tracks.delete');

    // Timelines Management
    Route::get('/timelines', [AdminController::class, 'timelines'])->name('timelines');
    Route::post('/timelines', [AdminController::class, 'storeTimeline'])->name('timelines.store');
    Route::put('/timelines/{id}', [AdminController::class, 'updateTimeline'])->name('timelines.update');
    Route::delete('/timelines/{id}', [AdminController::class, 'deleteTimeline'])->name('timelines.delete');

    // Programme Sessions
    Route::get('/programmes', [AdminController::class, 'programmes'])->name('programmes');
    Route::post('/programmes', [AdminController::class, 'storeProgramme'])->name('programmes.store');
    Route::put('/programmes/{id}', [AdminController::class, 'updateProgramme'])->name('programmes.update');
    Route::delete('/programmes/{id}', [AdminController::class, 'deleteProgramme'])->name('programmes.delete');

    // FAQs Management
    Route::get('/faqs', [AdminController::class, 'faqs'])->name('faqs');
    Route::post('/faqs', [AdminController::class, 'storeFaq'])->name('faqs.store');
    Route::put('/faqs/{id}', [AdminController::class, 'updateFaq'])->name('faqs.update');
    Route::delete('/faqs/{id}', [AdminController::class, 'deleteFaq'])->name('faqs.delete');

    // Partners & Sponsors Management
    Route::get('/partners', [AdminController::class, 'partners'])->name('partners');
    Route::post('/partners', [AdminController::class, 'storePartner'])->name('partners.store');
    Route::put('/partners/{id}', [AdminController::class, 'updatePartner'])->name('partners.update');
    Route::delete('/partners/{id}', [AdminController::class, 'deletePartner'])->name('partners.delete');

    // Registration Fees Management
    Route::get('/fees', [AdminController::class, 'fees'])->name('fees');
    Route::put('/fees/{id}', [AdminController::class, 'updateFee'])->name('fees.update');

    // Organizing Committees Management
    Route::get('/committees', [AdminController::class, 'committees'])->name('committees');
    Route::post('/committees', [AdminController::class, 'storeCommittee'])->name('committees.store');
    Route::put('/committees/{id}', [AdminController::class, 'updateCommittee'])->name('committees.update');
    Route::delete('/committees/{id}', [AdminController::class, 'deleteCommittee'])->name('committees.delete');

    // Conference Settings
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    Route::post('/settings', [AdminController::class, 'updateSettings'])->name('settings.update');
});
