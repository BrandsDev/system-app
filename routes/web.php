<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermsOfServiceController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\BookPublishersController;
use App\Http\Controllers\BookAuthorsController;
use App\Http\Controllers\AudiosController;

// Book
use App\Http\Controllers\Books\BookController;
use App\Http\Controllers\Books\BookAboutController;
use App\Http\Controllers\Books\BookProfileController;
use App\Http\Controllers\Books\BookHomeController;
use App\Http\Controllers\Books\BookCategoryController;
use App\Http\Controllers\Books\BookBlogController;
use App\Http\Controllers\Books\BookContactController;
use App\Http\Controllers\Books\BookPrivacyController;
use App\Http\Controllers\Books\BookTermController;
use App\Http\Controllers\Books\BookAudioController;

// Template
use App\Http\Controllers\Templates\TemplateController;
use App\Http\Controllers\Templates\SiteTemplateController;
use App\Http\Controllers\Templates\TemplateAboutController;
use App\Http\Controllers\Templates\TemplateThemeController;
use App\Http\Controllers\Templates\TemplateHireController;
use App\Http\Controllers\Templates\TemplateProfileController;
use App\Http\Controllers\Templates\TemplateHomeController;
use App\Http\Controllers\Templates\TemplateCategoryController;
use App\Http\Controllers\Templates\TemplateBlogController;
use App\Http\Controllers\Templates\TemplateContactController;
use App\Http\Controllers\Templates\TemplatePrivacyController;
use App\Http\Controllers\Templates\TemplateTermController;
use App\Http\Controllers\Templates\TemplateAudioController;

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
| Frontend -> Bookstore
|--------------------------------------------------------------------------
*/

// Book Store
Route::get('bookstore', [BookController::class, 'index'])->name('book.home');
Route::get('book/shop', [BookController::class, 'bookshop'])->name('bookshop');
Route::get('book-detail/{slug}', [BookController::class, 'detail'])->name('book.detail');

// Book Store -> Blog
Route::get('book/blog', [BookBlogController::class, 'index'])->name('book.blog');
Route::get('book/blog-detail/{slug}', [BookBlogController::class, 'detail'])->name('book.blog.detail');

// Book Store -> About
Route::get('book/about/overview', [BookAboutController::class, 'overview'])->name('book.overview');
Route::get('book/about/brand', [BookAboutController::class, 'brand'])->name('book.brand');
Route::get('book/about/license', [BookAboutController::class, 'license'])->name('book.license');

// Book Store -> Contact Us
Route::get('book/contact-us', [BookContactController::class, 'index'])->name('book.contact-us');

// Book Store -> Privacy Policy
Route::get('book/privacy-policy', [BookPrivacyController::class, 'index'])->name('book.privacy-policy');

// Book Store -> Terms of Service
Route::get('book/terms-of-service', [BookTermController::class, 'index'])->name('book.terms-of-service');

/*
|--------------------------------------------------------------------------
| Frontend -> Template
|--------------------------------------------------------------------------
*/

// Template
Route::get('template-store', [TemplateController::class, 'index'])->name('template.home');
Route::get('template-store/site-template', [TemplateController::class, 'siteTemplate'])->name('template.site');

Route::get('template-store/detail/{slug}', [TemplateController::class, 'detail'])->name('template.detail');

// Template -> Blog
Route::get('template-store/blog', [TemplateBlogController::class, 'index'])->name('template.blog');
Route::get('template-store/blog-detail/{slug}', [TemplateBlogController::class, 'detail'])->name('template.blog.detail');

// Template -> About
Route::get('template-store/about/overview', [TemplateAboutController::class, 'overview'])->name('template.overview');
Route::get('template-store/about/brand', [TemplateAboutController::class, 'brand'])->name('template.brand');
Route::get('template-store/about/license', [TemplateAboutController::class, 'license'])->name('template.license');

// Template -> Hire Us
Route::get('template-store/hire-us', [TemplateHireController::class, 'index'])->name('template.hire-us');

// Template -> Contact Us
Route::get('template-store/contact-us', [TemplateContactController::class, 'index'])->name('template.contact-us');

// Template -> Privacy Policy
Route::get('template-store/privacy-policy', [TemplatePrivacyController::class, 'index'])->name('template.privacy-policy');

// Template -> Terms of Service
Route::get('template-store/terms-of-service', [TemplateTermController::class, 'index'])->name('template.terms-of-service');
    
// Template -> Why Our Themes
Route::get('template-store/why-our-themes', [TemplateThemeController::class, 'index'])->name('template.why-our-themes');

// Template -> QR Code Gennerator
Route::get('template-store/qr-code-generator', function () {
    return view('frontend.template.qr-code-generator');
});

/*
|--------------------------------------------------------------------------
| Backend -> Auth
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Backend -> Book
|--------------------------------------------------------------------------
*/

// Dashboard
Route::get('/bookstore/dashboard', function () {
    return view('administration.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Categories
Route::get('/bookstore/categories/manage-categories', [BookCategoryController::class, 'show'])->middleware(['auth', 'verified'])->name('book.manage-categories');
Route::get('/bookstore/categories/new-category', [BookCategoryController::class, 'create'])->middleware(['auth', 'verified'])->name('book.new-category');
Route::post('/bookstore/categories/new-category/store', [BookCategoryController::class, 'store'])->middleware(['auth', 'verified'])->name('book.new-category.store');
Route::get('/bookstore/categories/edit-category/{id}', [BookCategoryController::class, 'edit'])->middleware(['auth', 'verified'])->name('book.category.edit');
Route::put('/bookstore/categories/update-category/{id}', [BookCategoryController::class, 'update'])->middleware(['auth', 'verified'])->name('book.category.update');
Route::delete('/bookstore/categories/destroy-category/{id}', [BookCategoryController::class, 'destroy'])->middleware(['auth', 'verified'])->name('book.category.destroy');

Route::get('/bookstore/categories/manage-subcategories', [BookCategoryController::class, 'show'])->middleware(['auth', 'verified'])->name('book.manage-subcategories');
Route::get('/bookstore/categories/subcategories/new-subcategory', [BookCategoryController::class, 'create'])->middleware(['auth', 'verified'])->name('book.new-subcategory');
Route::post('/bookstore/categories/subcategories/new-subcategory/store', [BookCategoryController::class, 'store'])->middleware(['auth', 'verified'])->name('book.new-subcategory.store');
Route::get('/bookstore/categories/subcategories/subcategory/edit/{id}', [BookCategoryController::class, 'edit'])->middleware(['auth', 'verified'])->name('book.subcategory.edit');
Route::put('/bookstore/categories/subcategories/subcategory/update/{id}', [BookCategoryController::class, 'update'])->middleware(['auth', 'verified'])->name('book.subcategory.update');
Route::delete('/bookstore/categories/subcategories/subcategory/destroy/{id}', [BookCategoryController::class, 'destroy'])->middleware(['auth', 'verified'])->name('book.subcategory.destroy');

Route::get('/bookstore/categories/manage-sub-subcategories', [BookCategoryController::class, 'show'])->middleware(['auth', 'verified'])->name('book.manage-sub-subcategories');
Route::get('/bookstore/categories/sub-subcategories/new-subsubcategory', [BookCategoryController::class, 'create'])->middleware(['auth', 'verified'])->name('book.new-sub-subcategory');
Route::post('/bookstore/categories/sub-subcategories/new-subsubcategory/store', [BookCategoryController::class, 'store'])->middleware(['auth', 'verified'])->name('book.new-sub-subcategory.store');
Route::get('/bookstore/categories/sub-subcategories/sub-subcategory/edit/{id}', [BookCategoryController::class, 'edit'])->middleware(['auth', 'verified'])->name('book.sub-subcategory.edit');
Route::put('/bookstore/categories/sub-subcategories/sub-subcategory/update/{id}', [BookCategoryController::class, 'update'])->middleware(['auth', 'verified'])->name('book.sub-subcategory.update');
Route::delete('/bookstore/categories/sub-subcategories/sub-subcategory/destroy/{id}', [BookCategoryController::class, 'destroy'])->middleware(['auth', 'verified'])->name('book.sub-subcategory.destroy');

// Books
Route::get('/bookstore/manage-books', [BookController::class, 'show'])->middleware(['auth', 'verified'])->name('book.manage-books');
Route::get('/bookstore/manage-book/new-book', [BookController::class, 'create'])->middleware(['auth', 'verified'])->name('book.new-book');
Route::post('/bookstore/manage-book/new-book/store', [BookController::class, 'store'])->middleware(['auth', 'verified'])->name('book.new-book.store');
Route::get('/bookstore/manage-book/edit/{id}', [BookController::class, 'edit'])->middleware(['auth', 'verified'])->name('book.edit');
Route::put('/bookstore/manage-book/update/{id}', [BookController::class, 'update'])->middleware(['auth', 'verified'])->name('book.update');
Route::delete('/bookstore/manage-book/destroy/{id}', [BookController::class, 'destroy'])->middleware(['auth', 'verified'])->name('book.destroy');

// Book Publishers
Route::get('/bookstore/manage-publishers', [BookPublisherController::class, 'show'])->middleware(['auth', 'verified'])->name('book.manage-publishers');
Route::get('/bookstore/manage-publisher/new-publisher', [BookPublisherController::class, 'create'])->middleware(['auth', 'verified'])->name('book.new-publisher');
Route::post('/bookstore/manage-publisher/new-publisher/store', [BookPublisherController::class, 'store'])->middleware(['auth', 'verified'])->name('book.new-publisher.store');
Route::get('/bookstore/manage-publisher/edit/{id}', [BookPublisherController::class, 'edit'])->middleware(['auth', 'verified'])->name('book.publisher.edit');
Route::put('/bookstore/manage-publisher/update/{id}', [BookPublisherController::class, 'update'])->middleware(['auth', 'verified'])->name('book.publisher.update');
Route::delete('/bookstore/manage-publisher/destroy/{id}', [BookPublisherController::class, 'destroy'])->middleware(['auth', 'verified'])->name('book.publisher.destroy');

// Book Authors
Route::get('/bookstore/manage-authors', [BookAuthorController::class, 'show'])->middleware(['auth', 'verified'])->name('book.manage-authors');
Route::get('/bookstore/manage-author/new-author', [BookAuthorController::class, 'create'])->middleware(['auth', 'verified'])->name('book.new-author');
Route::post('/bookstore/manage-author/new-author/store', [BookAuthorController::class, 'store'])->middleware(['auth', 'verified'])->name('book.new-author.store');
Route::get('/bookstore/manage-author/edit/{id}', [BookAuthorController::class, 'edit'])->middleware(['auth', 'verified'])->name('book.author.edit');
Route::put('/bookstore/manage-author/update/{id}', [BookAuthorController::class, 'update'])->middleware(['auth', 'verified'])->name('book.author.update');
Route::delete('/bookstore/manage-author/destroy/{id}', [BookAuthorController::class, 'destroy'])->middleware(['auth', 'verified'])->name('book.author.destroy');

// Blogs
Route::get('/bookstore/manage-blogs', [BookBlogController::class, 'show'])->middleware(['auth', 'verified'])->name('book.manage-blogs');
Route::get('/bookstore/manage-blog/new-blog', [BookBlogController::class, 'create'])->middleware(['auth', 'verified'])->name('book.new-blog');
Route::post('/bookstore/manage-blog/new-blog/store', [BookBlogController::class, 'store'])->middleware(['auth', 'verified'])->name('book.new-blog.store');
Route::get('/bookstore/manage-blog/edit/{id}', [BookBlogController::class, 'edit'])->middleware(['auth', 'verified'])->name('book.blog.edit');
Route::put('/bookstore/manage-blog/update/{id}', [BookBlogController::class, 'update'])->middleware(['auth', 'verified'])->name('book.blog.update');
Route::delete('/bookstore/manage-blog/destroy/{id}', [BookBlogController::class, 'destroy'])->middleware(['auth', 'verified'])->name('book.blog.destroy');

// Streaming Audios
Route::get('/bookstore/manage-audios', [BookAudioController::class, 'show'])->middleware(['auth', 'verified'])->name('book.manage-audios');
Route::get('/bookstore/manage-audio/new-audio', [BookAudioController::class, 'create'])->middleware(['auth', 'verified'])->name('book.new-audio');
Route::post('/bookstore/manage-audio/new-audio/store', [BookAudioController::class, 'store'])->middleware(['auth', 'verified'])->name('book.new-audio.store');
Route::get('/bookstore/manage-audio/edit/{id}', [BookAudioController::class, 'edit'])->middleware(['auth', 'verified'])->name('book.audio.edit');
Route::put('/bookstore/manage-audio/update/{id}', [BookAudioController::class, 'update'])->middleware(['auth', 'verified'])->name('book.audio.update');
Route::delete('/bookstore/manage-audio/destroy/{id}', [BookAudioController::class, 'destroy'])->middleware(['auth', 'verified'])->name('book.audio.destroy');

Route::get('/bookstore/manage-audio-playlists', [BookAudioController::class, 'show'])->middleware(['auth', 'verified'])->name('book.manage-audio-playlists');
Route::get('/bookstore/manage-audio-playlist/new-audio-playlist', [BookAudioController::class, 'create'])->middleware(['auth', 'verified'])->name('book.new-audio-playlist');
Route::post('/bookstore/manage-audio-playlist/new-audio-playlist/store', [BookAudioController::class, 'store'])->middleware(['auth', 'verified'])->name('book.new-audio-playlist.store');
Route::get('/bookstore/manage-audio-playlist/edit/{id}', [BookAudioController::class, 'edit'])->middleware(['auth', 'verified'])->name('book.audio-playlist.edit');
Route::put('/bookstore/manage-audio-playlist/update/{id}', [BookAudioController::class, 'update'])->middleware(['auth', 'verified'])->name('book.audio-playlist.update');
Route::delete('/bookstore/manage-audio-playlist/destroy/{id}', [BookAudioController::class, 'destroy'])->middleware(['auth', 'verified'])->name('book.audio-playlist.destroy');

/*
|--------------------------------------------------------------------------
| Backend -> Template
|--------------------------------------------------------------------------
*/

// Dashboard
Route::get('template-store/dashboard', function () {
    return view('administration.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Categories
Route::get('/template-store/categories/manage-categories', [TemplateCategoryController::class, 'show'])->middleware(['auth', 'verified'])->name('template.manage-categories');
Route::get('/template-store/categories/new-category', [TemplateCategoryController::class, 'create'])->middleware(['auth', 'verified'])->name('template.new-category');
Route::post('/template-store/categories/new-category/store', [TemplateCategoryController::class, 'store'])->middleware(['auth', 'verified'])->name('template.new-category.store');
Route::get('/template-store/categories/edit-category/{id}', [TemplateCategoryController::class, 'edit'])->middleware(['auth', 'verified'])->name('template.category.edit');
Route::put('/template-store/categories/update-category/{id}', [TemplateCategoryController::class, 'update'])->middleware(['auth', 'verified'])->name('template.category.update');
Route::delete('/categories/destroy-category/{id}', [TemplateCategoryController::class, 'destroy'])->middleware(['auth', 'verified'])->name('template.category.destroy');

Route::get('/template-store/categories/manage-subcategories', [TemplateCategoryController::class, 'show'])->middleware(['auth', 'verified'])->name('template.manage-subcategories');
Route::get('/template-store/categories/subcategories/new-subcategory', [TemplateCategoryController::class, 'create'])->middleware(['auth', 'verified'])->name('template.new-subcategory');
Route::post('/template-store/categories/subcategories/new-subcategory/store', [TemplateCategoryController::class, 'store'])->middleware(['auth', 'verified'])->name('template.new-subcategory.store');
Route::get('/template-store/categories/subcategories/subcategory/edit/{id}', [TemplateCategoryController::class, 'edit'])->middleware(['auth', 'verified'])->name('template.subcategory.edit');
Route::put('/template-store/categories/subcategories/subcategory/update/{id}', [TemplateCategoryController::class, 'update'])->middleware(['auth', 'verified'])->name('template.subcategory.update');
Route::delete('/template-store/categories/subcategories/subcategory/destroy/{id}', [TemplateCategoryController::class, 'destroy'])->middleware(['auth', 'verified'])->name('template.subcategory.destroy');

Route::get('/template-store/categories/manage-sub-subcategories', [TemplateCategoryController::class, 'show'])->middleware(['auth', 'verified'])->name('template.manage-sub-subcategories');
Route::get('/template-store/categories/sub-subcategories/new-subsubcategory', [TemplateCategoryController::class, 'create'])->middleware(['auth', 'verified'])->name('template.new-sub-subcategory');
Route::post('/template-store/categories/sub-subcategories/new-subsubcategory/store', [TemplateCategoryController::class, 'store'])->middleware(['auth', 'verified'])->name('template.new-sub-subcategory.store');
Route::get('/template-store/categories/sub-subcategories/sub-subcategory/edit/{id}', [TemplateCategoryController::class, 'edit'])->middleware(['auth', 'verified'])->name('template.sub-subcategory.edit');
Route::put('/template-store/categories/sub-subcategories/sub-subcategory/update/{id}', [TemplateCategoryController::class, 'update'])->middleware(['auth', 'verified'])->name('template.sub-subcategory.update');
Route::delete('/template-store/categories/sub-subcategories/sub-subcategory/destroy/{id}', [TemplateCategoryController::class, 'destroy'])->middleware(['auth', 'verified'])->name('template.sub-subcategory.destroy');

// Templates
Route::get('/template-store/manage-templates', [TemplateController::class, 'show'])->middleware(['auth', 'verified'])->name('template.manage-templates');
Route::get('/template-store/new-template', [TemplateController::class, 'create'])->middleware(['auth', 'verified'])->name('template.new-template');
Route::post('/template-store/new-template/store', [TemplateController::class, 'store'])->middleware(['auth', 'verified'])->name('template.new-template.store');
Route::get('/template-store/edit/{id}', [TemplateController::class, 'edit'])->middleware(['auth', 'verified'])->name('template.edit');
Route::put('/template-store/update/{id}', [TemplateController::class, 'update'])->middleware(['auth', 'verified'])->name('template.update-template');
Route::delete('/template-store/destroy/{id}', [TemplateController::class, 'destroy'])->middleware(['auth', 'verified'])->name('template.destroy-template');

// Blogs
Route::get('/template-store/manage-blogs', [TemplateBlogController::class, 'show'])->middleware(['auth', 'verified'])->name('template.manage-blogs');
Route::get('/template-store/manage-blog/new-blog', [TemplateBlogController::class, 'create'])->middleware(['auth', 'verified'])->name('template.new-blog');
Route::post('/template-store/manage-blog/new-blog/store', [TemplateBlogController::class, 'store'])->middleware(['auth', 'verified'])->name('template.new-blog.store');
Route::get('/template-store/manage-blog/edit/{id}', [TemplateBlogController::class, 'edit'])->middleware(['auth', 'verified'])->name('template.blog.edit');
Route::put('/template-store/manage-blog/update/{id}', [TemplateBlogController::class, 'update'])->middleware(['auth', 'verified'])->name('template.blog.update');
Route::delete('/manage-blog/destroy/{id}', [TemplateBlogController::class, 'destroy'])->middleware(['auth', 'verified'])->name('template.blog.destroy');

// Streaming Audios
Route::get('/template-store/manage-audios', [TemplateAudioController::class, 'show'])->middleware(['auth', 'verified'])->name('template.manage-audios');
Route::get('/template-store/manage-audio/new-audio', [TemplateAudioController::class, 'create'])->middleware(['auth', 'verified'])->name('template.new-audio');
Route::post('/template-store/manage-audio/new-audio/store', [TemplateAudioController::class, 'store'])->middleware(['auth', 'verified'])->name('template.new-audio.store');
Route::get('/template-store/manage-audio/edit/{id}', [TemplateAudioController::class, 'edit'])->middleware(['auth', 'verified'])->name('template.audio.edit');
Route::put('/template-store/manage-audio/update/{id}', [TemplateAudioController::class, 'update'])->middleware(['auth', 'verified'])->name('template.audio.update');
Route::delete('/template-store/manage-audio/destroy/{id}', [TemplateAudioController::class, 'destroy'])->middleware(['auth', 'verified'])->name('template.audio.destroy');

Route::get('/template-store/manage-audio-playlists', [TemplateAudioController::class, 'show'])->middleware(['auth', 'verified'])->name('template.manage-audio-playlists');
Route::get('/template-store/manage-audio-playlist/new-audio-playlist', [TemplateAudioController::class, 'create'])->middleware(['auth', 'verified'])->name('template.new-audio-playlist');
Route::post('/template-store/manage-audio-playlist/new-audio-playlist/store', [TemplateAudioController::class, 'store'])->middleware(['auth', 'verified'])->name('template.new-audio-playlist.store');
Route::get('/template-store/manage-audio-playlist/edit/{id}', [TemplateAudioController::class, 'edit'])->middleware(['auth', 'verified'])->name('template.audio-playlist.edit');
Route::put('/template-store/manage-audio-playlist/update/{id}', [TemplateAudioController::class, 'update'])->middleware(['auth', 'verified'])->name('template.audio-playlist.update');
Route::delete('/template-store/manage-audio-playlist/destroy/{id}', [TemplateAudioController::class, 'destroy'])->middleware(['auth', 'verified'])->name('template.audio-playlist.destroy');
