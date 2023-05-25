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
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CategoriesController;
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

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------
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

// Template
Route::get('template/detail/{slug}', [TemplateController::class, 'detail'])->name('template.detail');

// QR Code Gennerator
Route::get('qr-code-generator', function () {
    return view('frontend.qr-code-generator');
});

/*
|--------------------------------------------------------------------------
| Backend
|--------------------------------------------------------------------------
*/

// Dashboard
Route::get('/dashboard', function () {
    return view('administration.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Categories
Route::get('/manage-categories', [CategoriesController::class, 'show'])->middleware(['auth', 'verified'])->name('manage-categories');
Route::get('/category/new-category', [CategoriesController::class, 'create'])->middleware(['auth', 'verified'])->name('new-category');
Route::post('/category/new-category/store', [CategoriesController::class, 'store'])->middleware(['auth', 'verified'])->name('new-category.store');
Route::get('/category/edit/{id}', [CategoriesController::class, 'categoryEdit'])->middleware(['auth', 'verified'])->name('category.edit');
Route::put('/category/update/{id}', [CategoriesController::class, 'categoryUpdate'])->middleware(['auth', 'verified'])->name('category.update');
Route::delete('/category/destroy/{id}', [CategoriesController::class, 'categoryDestroy'])->middleware(['auth', 'verified'])->name('category.destroy');

Route::get('/manage-sub-categories', [CategoriesController::class, 'show'])->middleware(['auth', 'verified'])->name('manage-sub-categories');
Route::get('/category/new-sub-category', [CategoriesController::class, 'create'])->middleware(['auth', 'verified'])->name('new-sub-category');
Route::post('/category/new-sub-category/store', [CategoriesController::class, 'store'])->middleware(['auth', 'verified'])->name('new-sub-category.store');
Route::get('/category/sub-edit/{id}', [CategoriesController::class, 'subCategoryEdit'])->middleware(['auth', 'verified'])->name('sub-category.edit');
Route::put('/category/sub-update/{id}', [CategoriesController::class, 'subCategoryUpdate'])->middleware(['auth', 'verified'])->name('sub-update-category');
Route::delete('/category/sub-destroy/{id}', [CategoriesController::class, 'subCategoryDestroy'])->middleware(['auth', 'verified'])->name('sub-destroy-category');

Route::get('/manage-sub-sub-categories', [CategoriesController::class, 'show'])->middleware(['auth', 'verified'])->name('manage-sub-sub-categories');
Route::get('/category/new-sub-sub-category', [CategoriesController::class, 'create'])->middleware(['auth', 'verified'])->name('new-sub-sub-category');
Route::post('/category/new-sub-sub-category/store', [CategoriesController::class, 'store'])->middleware(['auth', 'verified'])->name('new-sub-sub-category.store');
Route::get('/category/sub-sub-edit/{id}', [CategoriesController::class, 'subSubCategoryEdit'])->middleware(['auth', 'verified'])->name('sub-sub-category.edit');
Route::put('/category/sub-sub-update/{id}', [CategoriesController::class, 'subSubCategoryUpdate'])->middleware(['auth', 'verified'])->name('sub-sub-update-category');
Route::delete('/category/sub-sub-destroy/{id}', [CategoriesController::class, 'subSubCategoryDestroy'])->middleware(['auth', 'verified'])->name('sub-sub-destroy-category');

// Templates
Route::get('/templates', [TemplateController::class, 'show'])->middleware(['auth', 'verified'])->name('templates');
Route::get('/templates/new-template', [TemplateController::class, 'create'])->middleware(['auth', 'verified'])->name('new-template');
Route::post('/templates/new-template/store', [TemplateController::class, 'store'])->middleware(['auth', 'verified'])->name('new-template.store');
Route::get('/templates/edit/{id}', [TemplateController::class, 'edit'])->middleware(['auth', 'verified'])->name('templates.edit');
Route::put('/templates/update/{id}', [TemplateController::class, 'update'])->middleware(['auth', 'verified'])->name('update-template');
Route::delete('/templates/destroy/{id}', [TemplateController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy-template');

// Blogs
Route::get('/manage-blogs', [BlogController::class, 'show'])->middleware(['auth', 'verified'])->name('manage-blogs');
Route::get('/blog/new-blog', [BlogController::class, 'create'])->middleware(['auth', 'verified'])->name('new-blog');
Route::post('/blog/new-blog/store', [BlogController::class, 'store'])->middleware(['auth', 'verified'])->name('new-blog.store');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->middleware(['auth', 'verified'])->name('blog.edit');
Route::put('/blog/update/{id}', [BlogController::class, 'update'])->middleware(['auth', 'verified'])->name('update-blog');
Route::delete('/blog/destroy/{id}', [BlogController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy-blog');

// Route::get('/templates/edit-template', function () {
//     return view('administration.templates.edit-template');
// })->middleware(['auth', 'verified'])->name('edit-template');

// Route::get('/templates/delete-template', function () {
//     return view('administration.templates.delete-template');
// })->middleware(['auth', 'verified'])->name('delete-template');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
