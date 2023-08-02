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

// Templates
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
| Book Store
|--------------------------------------------------------------------------
*/

// Homepage
// Route::get('/', [HomeController::class, 'index'])->name('home');

// Book
// Route::get('books', [BooksController::class, 'books'])->name('books');
// Route::get('book-detail/{slug}', [BooksController::class, 'detail'])->name('book.detail');

// Blog
// Route::get('blogs', [BlogsController::class, 'blogs'])->name('blogs');
// Route::get('blog-detail/{slug}', [BlogsController::class, 'detail'])->name('blog.detail');


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
| Template
|--------------------------------------------------------------------------
*/

// Template
Route::get('template-store', [TemplateController::class, 'index'])->name('template.home');
Route::get('site-template', [TemplateController::class, 'siteTemplate'])->name('template.site');

Route::get('template/detail/{slug}', [TemplateController::class, 'detail'])->name('template.detail');

// Template -> Blog
Route::get('template/blog', [TemplateBlogController::class, 'index'])->name('template.blog');
Route::get('template/blog-detail/{slug}', [TemplateBlogController::class, 'detail'])->name('template.blog.detail');

// Template -> About
Route::get('template/about/overview', [TemplateAboutController::class, 'overview'])->name('template.overview');
Route::get('template/about/brand', [TemplateAboutController::class, 'brand'])->name('template.brand');
Route::get('template/about/license', [TemplateAboutController::class, 'license'])->name('template.license');

// Template -> Hire Us
Route::get('template/hire-us', [TemplateHireController::class, 'index'])->name('template.hire-us');

// Template -> Contact Us
Route::get('template/contact-us', [TemplateContactController::class, 'index'])->name('template.contact-us');

// Template -> Privacy Policy
Route::get('template/privacy-policy', [TemplatePrivacyController::class, 'index'])->name('template.privacy-policy');

// Template -> Terms of Service
Route::get('template/terms-of-service', [TemplateTermController::class, 'index'])->name('template.terms-of-service');
    
// Template -> Why Our Themes
Route::get('template/why-our-themes', [TemplateThemeController::class, 'index'])->name('template.why-our-themes');

// Template -> QR Code Gennerator
Route::get('template/qr-code-generator', function () {
    return view('frontend.template.qr-code-generator');
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
Route::get('/template-store/manage-templates', [TemplateController::class, 'show'])->middleware(['auth', 'verified'])->name('manage-templates');
Route::get('/template-store/new-template', [TemplateController::class, 'create'])->middleware(['auth', 'verified'])->name('new-template');
Route::post('/template-store/new-template/store', [TemplateController::class, 'store'])->middleware(['auth', 'verified'])->name('new-template.store');
Route::get('/template-store/edit/{id}', [TemplateController::class, 'edit'])->middleware(['auth', 'verified'])->name('templates.edit');
Route::put('/template-store/update/{id}', [TemplateController::class, 'update'])->middleware(['auth', 'verified'])->name('update-template');
Route::delete('/template-store/destroy/{id}', [TemplateController::class, 'destroy'])->middleware(['auth', 'verified'])->name('destroy-template');

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
Route::get('/manage-audios', [AudiosController::class, 'show'])->middleware(['auth', 'verified'])->name('manage-audios');
Route::get('/manage-audio/new-audio', [AudiosController::class, 'create'])->middleware(['auth', 'verified'])->name('new-audio');
Route::post('/manage-audio/new-audio/store', [AudiosController::class, 'store'])->middleware(['auth', 'verified'])->name('new-audio.store');
Route::get('/manage-audio/edit/{id}', [AudiosController::class, 'edit'])->middleware(['auth', 'verified'])->name('audio.edit');
Route::put('/manage-audio/update/{id}', [AudiosController::class, 'update'])->middleware(['auth', 'verified'])->name('audio.update');
Route::delete('/manage-audio/destroy/{id}', [AudiosController::class, 'destroy'])->middleware(['auth', 'verified'])->name('audio.destroy');

Route::get('/manage-audio-playlists', [AudiosController::class, 'show'])->middleware(['auth', 'verified'])->name('manage-audio-playlists');
Route::get('/manage-audio-playlist/new-audio-playlist', [AudiosController::class, 'create'])->middleware(['auth', 'verified'])->name('new-audio-playlist');
Route::post('/manage-audio-playlist/new-audio-playlist/store', [AudiosController::class, 'store'])->middleware(['auth', 'verified'])->name('new-audio-playlist.store');
Route::get('/manage-audio-playlist/edit/{id}', [AudiosController::class, 'edit'])->middleware(['auth', 'verified'])->name('audio-playlist.edit');
Route::put('/manage-audio-playlist/update/{id}', [AudiosController::class, 'update'])->middleware(['auth', 'verified'])->name('audio-playlist.update');
Route::delete('/manage-audio-playlist/destroy/{id}', [AudiosController::class, 'destroy'])->middleware(['auth', 'verified'])->name('audio-playlist.destroy');

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
