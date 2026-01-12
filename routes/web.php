<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'homePage'])->name('home');


//  about
Route::get('about', [HomeController::class, 'about'])->name('about');

// other routes...
Route::get('/why', [HomeController::class, 'why'])->name('why');

// principal message
Route::get('/principal', [HomeController::class, 'principal'])->name('principalmessage');

// vice principal message
Route::get('/vice-principal', [HomeController::class, 'vicePrincipal'])->name('viceprincipalmessage');

// missiom and vision
Route::get('/mission-vision', [HomeController::class, 'missionVision'])->name('missionvision');

// CSR page
Route::get('/csr', function () {
    return view('pages.csr');
})->name('csr');

// Procedures page
Route::get('/procedures', [HomeController::class, 'procedures'])->name('procedures');

// Annual Fee Structure page
Route::get('/annual-fee-structure', [HomeController::class, 'annualFeeStructure'])->name('annualfeestructure');

// transfer certificate page
Route::get('/transfer-certificate', [HomeController::class, 'transferCertificate'])->name('transfercertificate');

// student life
Route::get('/studentslife', [HomeController::class, 'studentslife'])->name('studentslife');

// parents
Route::get('/parents', [HomeController::class, 'parents'])->name('parents');

// teaching staff
Route::get('/teaching-staff', [HomeController::class, 'teachingStaff'])->name('teachingstaff');

// admin team
Route::get('/administrative', [HomeController::class, 'administrative'])->name('administrative');

// infra
Route::get('/infrastructure', [HomeController::class, 'infrastructure'])->name('infrastructure');

// mandatory disclosure
Route::get('/mandatory-disclosure', [HomeController::class, 'mandatoryDisclosure'])->name('mandatorydisclosure');

// gallery
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');

// contact
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
