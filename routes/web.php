<?php

use Illuminate\Support\Facades\Route;
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

// Home
Route::get('/', [HomeController::class, 'index']);

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