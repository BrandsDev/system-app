<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WhyOurThemesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HireController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermsOfServiceController;
use App\Http\Controllers\SiteTemplatesController;
use App\Http\Controllers\TemplateDetailController;
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
    
// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');
    
// Why Our Themes
Route::get('why-our-themes', [WhyOurThemesController::class, 'index']);

// Blog
Route::get('blog', [BlogController::class, 'index']);

// About
Route::get('about/overview', [AboutController::class, 'overview']);
Route::get('about/brand', [AboutController::class, 'brand']);
Route::get('about/license', [AboutController::class, 'license']);

// Hire Us
Route::get('hire-us', [HireController::class, 'index']);

// Contact Us
Route::get('contact-us', [ContactController::class, 'index']);

// Privacy Policy
Route::get('privacy-policy', [PrivacyPolicyController::class, 'index']);

// Terms of Service
Route::get('terms-of-service', [TermsOfServiceController::class, 'index']);

// Site Templates
Route::get('site-templates', [SiteTemplatesController::class, 'index']);

// Template Detail
Route::get('template-detail', [TemplateDetailController::class, 'index']);

// Administration
Route::get('/dashboard', function () {
    return view('administration/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Templates
Route::get('/templates', function () {
    return view('administration/templates');
})->middleware(['auth', 'verified'])->name('templates');

Route::get('/templates/add-template', function () {
    return view('administration/templates/add-template');
})->middleware(['auth', 'verified'])->name('add-template');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
