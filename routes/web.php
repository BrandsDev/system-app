<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WhyOurThemesController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HireController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermsOfServiceController;
use App\Http\Controllers\SiteTemplatesController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\BookPublishersController;
use App\Http\Controllers\BookAuthorsController;
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
Route::get('book/detail/{slug}', [BooksController::class, 'detail'])->name('book.detail');
    
// Why Our Themes
Route::get('why-our-themes', [WhyOurThemesController::class, 'index']);

// Blog
Route::get('blog', [BlogsController::class, 'index']);

// About
Route::get('about/overview', [AboutController::class, 'overview']);
Route::get('about/brand', [AboutController::class, 'brand']);
Route::get('about/license', [AboutController::class, 'license']);

// Hire Us
Route::get('hire-us', [HireController::class, 'index']);

// Contact Us
Route::get('contact-us', [ContactController::class, 'index'])->name('book-contact-us');

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
Route::get('/categories/manage-categories', [CategoriesController::class, 'show'])->middleware(['auth', 'verified'])->name('manage-categories');
Route::get('/categories/new-category', [CategoriesController::class, 'create'])->middleware(['auth', 'verified'])->name('new-category');
Route::post('/categories/new-category/store', [CategoriesController::class, 'store'])->middleware(['auth', 'verified'])->name('new-category.store');
Route::get('/categories/edit-category/{id}', [CategoriesController::class, 'edit'])->middleware(['auth', 'verified'])->name('category.edit');
Route::put('/categories/update-category/{id}', [CategoriesController::class, 'update'])->middleware(['auth', 'verified'])->name('category.update');
Route::delete('/categories/destroy-category/{id}', [CategoriesController::class, 'destroy'])->middleware(['auth', 'verified'])->name('category.destroy');

Route::get('/categories/manage-subcategories', [CategoriesController::class, 'show'])->middleware(['auth', 'verified'])->name('manage-subcategories');
Route::get('/categories/subcategories/new-subcategory', [CategoriesController::class, 'create'])->middleware(['auth', 'verified'])->name('new-subcategory');
Route::post('/categories/subcategories/new-subcategory/store', [CategoriesController::class, 'store'])->middleware(['auth', 'verified'])->name('new-subcategory.store');
Route::get('/categories/subcategories/subcategory/edit/{id}', [CategoriesController::class, 'edit'])->middleware(['auth', 'verified'])->name('subcategory.edit');
Route::put('/categories/subcategories/subcategory/update/{id}', [CategoriesController::class, 'update'])->middleware(['auth', 'verified'])->name('subcategory.update');
Route::delete('/categories/subcategories/subcategory/destroy/{id}', [CategoriesController::class, 'destroy'])->middleware(['auth', 'verified'])->name('subcategory.destroy');

Route::get('/categories/manage-sub-subcategories', [CategoriesController::class, 'show'])->middleware(['auth', 'verified'])->name('manage-sub-subcategories');
Route::get('/categories/sub-subcategories/new-subsubcategory', [CategoriesController::class, 'create'])->middleware(['auth', 'verified'])->name('new-sub-subcategory');
Route::post('/categories/sub-subcategories/new-subsubcategory/store', [CategoriesController::class, 'store'])->middleware(['auth', 'verified'])->name('new-sub-subcategory.store');
Route::get('/categories/sub-subcategories/sub-subcategory/edit/{id}', [CategoriesController::class, 'edit'])->middleware(['auth', 'verified'])->name('sub-subcategory.edit');
Route::put('/categories/sub-subcategories/sub-subcategory/update/{id}', [CategoriesController::class, 'update'])->middleware(['auth', 'verified'])->name('sub-subcategory.update');
Route::delete('/categories/sub-subcategories/sub-subcategory/destroy/{id}', [CategoriesController::class, 'destroy'])->middleware(['auth', 'verified'])->name('sub-subcategory.destroy');

// Templates
Route::get('/manage-templates', [TemplateController::class, 'show'])->middleware(['auth', 'verified'])->name('manage-templates');
Route::get('/templates/new-template', [TemplateController::class, 'create'])->middleware(['auth', 'verified'])->name('new-template');
Route::post('/templates/new-template/store', [TemplateController::class, 'store'])->middleware(['auth', 'verified'])->name('new-template.store');
Route::get('/templates/edit/{id}', [TemplateController::class, 'edit'])->middleware(['auth', 'verified'])->name('templates.edit');
Route::put('/templates/update/{id}', [TemplateController::class, 'update'])->middleware(['auth', 'verified'])->name('update-template');
Route::delete('/templates/destroy/{id}', [TemplateController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy-template');

// Books
Route::get('/manage-books', [BooksController::class, 'show'])->middleware(['auth', 'verified'])->name('manage-books');
Route::get('/manage-book/new-book', [BooksController::class, 'create'])->middleware(['auth', 'verified'])->name('new-book');
Route::post('/manage-book/new-book/store', [BooksController::class, 'store'])->middleware(['auth', 'verified'])->name('new-book.store');
Route::get('/manage-book/edit/{id}', [BooksController::class, 'edit'])->middleware(['auth', 'verified'])->name('book.edit');
Route::put('/manage-book/update/{id}', [BooksController::class, 'update'])->middleware(['auth', 'verified'])->name('book.update');
Route::delete('/manage-book/destroy/{id}', [BooksController::class, 'destroy'])->middleware(['auth', 'verified'])->name('book.destroy');

// Book Publishers
Route::get('/manage-publishers', [BookPublishersController::class, 'show'])->middleware(['auth', 'verified'])->name('manage-publishers');
Route::get('/manage-publisher/new-publisher', [BookPublishersController::class, 'create'])->middleware(['auth', 'verified'])->name('new-publisher');
Route::post('/manage-publisher/new-publisher/store', [BookPublishersController::class, 'store'])->middleware(['auth', 'verified'])->name('new-publisher.store');
Route::get('/manage-publisher/edit/{id}', [BookPublishersController::class, 'edit'])->middleware(['auth', 'verified'])->name('publisher.edit');
Route::put('/manage-publisher/update/{id}', [BookPublishersController::class, 'update'])->middleware(['auth', 'verified'])->name('publisher.update');
Route::delete('/manage-publisher/destroy/{id}', [BookPublishersController::class, 'destroy'])->middleware(['auth', 'verified'])->name('publisher.destroy');

// Book Authors
Route::get('/manage-authors', [BookAuthorsController::class, 'show'])->middleware(['auth', 'verified'])->name('manage-authors');
Route::get('/manage-author/new-author', [BookAuthorsController::class, 'create'])->middleware(['auth', 'verified'])->name('new-author');
Route::post('/manage-author/new-author/store', [BookAuthorsController::class, 'store'])->middleware(['auth', 'verified'])->name('new-author.store');
Route::get('/manage-author/edit/{id}', [BookAuthorsController::class, 'edit'])->middleware(['auth', 'verified'])->name('author.edit');
Route::put('/manage-author/update/{id}', [BookAuthorsController::class, 'update'])->middleware(['auth', 'verified'])->name('author.update');
Route::delete('/manage-author/destroy/{id}', [BookAuthorsController::class, 'destroy'])->middleware(['auth', 'verified'])->name('author.destroy');

// Blogs
Route::get('/manage-blogs', [BlogsController::class, 'show'])->middleware(['auth', 'verified'])->name('manage-blogs');
Route::get('/manage-blog/new-blog', [BlogsController::class, 'create'])->middleware(['auth', 'verified'])->name('new-blog');
Route::post('/manage-blog/new-blog/store', [BlogsController::class, 'store'])->middleware(['auth', 'verified'])->name('new-blog.store');
Route::get('/manage-blog/edit/{id}', [BlogsController::class, 'edit'])->middleware(['auth', 'verified'])->name('blog.edit');
Route::put('/manage-blog/update/{id}', [BlogsController::class, 'update'])->middleware(['auth', 'verified'])->name('blog.update');
Route::delete('/manage-blog/destroy/{id}', [BlogsController::class, 'destroy'])->middleware(['auth', 'verified'])->name('blog.destroy');

// Streaming Audios
Route::get('/manage-audios', [BlogsController::class, 'show'])->middleware(['auth', 'verified'])->name('manage-audios');
Route::get('/manage-audio/new-audio', [BlogsController::class, 'create'])->middleware(['auth', 'verified'])->name('new-audio');
Route::post('/manage-audio/new-audio/store', [BlogsController::class, 'store'])->middleware(['auth', 'verified'])->name('new-audio.store');
Route::get('/manage-audio/edit/{id}', [BlogsController::class, 'edit'])->middleware(['auth', 'verified'])->name('audio.edit');
Route::put('/manage-audio/update/{id}', [BlogsController::class, 'update'])->middleware(['auth', 'verified'])->name('audio.update');
Route::delete('/manage-audio/destroy/{id}', [BlogsController::class, 'destroy'])->middleware(['auth', 'verified'])->name('audio.destroy');

Route::get('/manage-audio-playlists', [BlogsController::class, 'show'])->middleware(['auth', 'verified'])->name('manage-audio-playlists');
Route::get('/manage-audio-playlist/new-audio-playlist', [BlogsController::class, 'create'])->middleware(['auth', 'verified'])->name('new-audio-playlist');
Route::post('/manage-audio-playlist/new-audio-playlist/store', [BlogsController::class, 'store'])->middleware(['auth', 'verified'])->name('new-audio-playlist.store');
Route::get('/manage-audio-playlist/edit/{id}', [BlogsController::class, 'edit'])->middleware(['auth', 'verified'])->name('audio-playlist.edit');
Route::put('/manage-audio-playlist/update/{id}', [BlogsController::class, 'update'])->middleware(['auth', 'verified'])->name('audio-playlist.update');
Route::delete('/manage-audio-playlist/destroy/{id}', [BlogsController::class, 'destroy'])->middleware(['auth', 'verified'])->name('audio-playlist.destroy');

// Blog Categories
// Route::get('/blog-categories/manage-blog-categories', [CategoriesController::class, 'show'])->middleware(['auth', 'verified'])->name('manage-blog-categories');
// Route::get('/blog-categories/new-blog-category', [CategoriesController::class, 'create'])->middleware(['auth', 'verified'])->name('new-blog-category');
// Route::post('/blog-categories/new-blog-category/store', [CategoriesController::class, 'store'])->middleware(['auth', 'verified'])->name('new-blog-category.store');
// Route::get('/blog-categories/edit-blog-category/{id}', [CategoriesController::class, 'edit'])->middleware(['auth', 'verified'])->name('blog-category.edit');
// Route::put('/blog-categories/update-blog-category/{id}', [CategoriesController::class, 'update'])->middleware(['auth', 'verified'])->name('blog-category.update');
// Route::delete('/blog-categories/destroy-blog-category/{id}', [CategoriesController::class, 'destroy'])->middleware(['auth', 'verified'])->name('blog-category.destroy');

// Route::get('/blog-categories/manage-blog-subcategories', [CategoriesController::class, 'show'])->middleware(['auth', 'verified'])->name('manage-blog-subcategories');
// Route::get('/blog-categories/blog-subcategories/new-blog-subcategory', [CategoriesController::class, 'create'])->middleware(['auth', 'verified'])->name('new-blog-subcategory');
// Route::post('/blog-categories/blog-subcategories/new-blog-subcategory/store', [CategoriesController::class, 'store'])->middleware(['auth', 'verified'])->name('new-blog-subcategory.store');
// Route::get('/blog-categories/blog-subcategories/blog-subcategory/edit/{id}', [CategoriesController::class, 'edit'])->middleware(['auth', 'verified'])->name('blog-subcategory.edit');
// Route::put('/blog-categories/blog-subcategories/blog-subcategory/update/{id}', [CategoriesController::class, 'update'])->middleware(['auth', 'verified'])->name('blog-subcategory.update');
// Route::delete('/blog-categories/blog-subcategories/blog-subcategory/destroy/{id}', [CategoriesController::class, 'destroy'])->middleware(['auth', 'verified'])->name('blog-subcategory.destroy');

// Route::get('/blog-categories/manage-blog-sub-subcategories', [CategoriesController::class, 'show'])->middleware(['auth', 'verified'])->name('manage-blog-sub-subcategories');
// Route::get('/blog-categories/blog-sub-subcategories/new-blog-subsubcategory', [CategoriesController::class, 'create'])->middleware(['auth', 'verified'])->name('new-blog-sub-subcategory');
// Route::post('/blog-categories/blog-sub-subcategories/new-blog-subsubcategory/store', [CategoriesController::class, 'store'])->middleware(['auth', 'verified'])->name('new-blog-sub-subcategory.store');
// Route::get('/blog-categories/blog-sub-subcategories/blog-sub-subcategory/edit/{id}', [CategoriesController::class, 'edit'])->middleware(['auth', 'verified'])->name('blog-sub-subcategory.edit');
// Route::put('/blog-categories/blog-sub-subcategories/blog-sub-subcategory/update/{id}', [CategoriesController::class, 'update'])->middleware(['auth', 'verified'])->name('blog-sub-subcategory.update');
// Route::delete('/blog-categories/blog-sub-subcategories/blog-sub-subcategory/destroy/{id}', [CategoriesController::class, 'destroy'])->middleware(['auth', 'verified'])->name('blog-sub-subcategory.destroy');

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
