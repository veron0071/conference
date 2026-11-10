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
    Route::delete('/tracks/{id}', [AdminController::class, 'deleteTrack'])->name('tracks.delete');

    // Timelines Management
    Route::get('/timelines', [AdminController::class, 'timelines'])->name('timelines');
    Route::post('/timelines', [AdminController::class, 'storeTimeline'])->name('timelines.store');
    Route::delete('/timelines/{id}', [AdminController::class, 'deleteTimeline'])->name('timelines.delete');

    // Conference Settings
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    Route::post('/settings', [AdminController::class, 'updateSettings'])->name('settings.update');
});
