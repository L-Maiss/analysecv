<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\CVAnalyserController;

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });



    // Route::prefix('/dashboard')->group(function () {

    // Route::prefix('/')->middleware([Authenticate::class])->group(function () {

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/how-it-works', function() {
    return view('howItWorks');
})->name('how-it-works');

Route::get('/blog', function() {
    return view('blog');
})->name('blog');

Route::get('/cookie-policy', function() {
    return view('policies.cookie-policy');
})->name('cookie-policy');

Route::get('/privacy-policy', function() {
    return view('policies.privacy-policy');
})->name('privacy-policy');

Route::get('/terms-of-service', function() {
    return view('policies.terms-of-service');
})->name('terms-of-service');

Route::prefix('/analyze')->group(function () {
    Route::get('/CVAnalyzerResponse', function () {
        return view('CVAnalyzerResponse');
    })->name('CVAnalyzer.response');

    Route::post('/resume-analyzer', [CVAnalyserController::class, 'analyze'])->name('resume.analyzer');
});

Route::prefix('/comparison')->group(function () {
    Route::get('/response', function () {
        return view('response');
    })->name('comparison.response');

    Route::post('/comparison', [ResumeController::class, 'comparison'])->name('resume.comparison');
});


