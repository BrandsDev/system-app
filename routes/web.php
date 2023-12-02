<?php

// Auth
use App\Http\Controllers\ProfileController;

// Blog
use App\Http\Controllers\Blog\BlogController;

// Book
use App\Http\Controllers\Book\BookController;
use App\Http\Controllers\Book\BookAboutController;
use App\Http\Controllers\Book\BookProfileController;
use App\Http\Controllers\Book\BookHomeController;
use App\Http\Controllers\Book\BookCategoryController;
use App\Http\Controllers\Book\BookBlogController;
use App\Http\Controllers\Book\BookContactController;
use App\Http\Controllers\Book\BookPrivacyController;
use App\Http\Controllers\Book\BookTermController;
use App\Http\Controllers\Book\BookAudioController;

// Template
use App\Http\Controllers\Template\TemplateController;
use App\Http\Controllers\Template\TemplatePageController;
use App\Http\Controllers\Template\TemplateSellerController;
use App\Http\Controllers\Template\TemplateSiteController;
use App\Http\Controllers\Template\TemplateAboutController;
use App\Http\Controllers\Template\TemplateThemeController;
use App\Http\Controllers\Template\TemplateHireController;
use App\Http\Controllers\Template\TemplateProfileController;
use App\Http\Controllers\Template\TemplateHomeController;
use App\Http\Controllers\Template\TemplateCategoryController;
use App\Http\Controllers\Template\TemplateBlogController;
use App\Http\Controllers\Template\TemplateBlogCategoryController;
use App\Http\Controllers\Template\TemplateBlogTagController;
use App\Http\Controllers\Template\TemplateContactController;
use App\Http\Controllers\Template\TemplatePrivacyController;
use App\Http\Controllers\Template\TemplateTermController;
use App\Http\Controllers\Template\TemplateAudioController;
use App\Http\Controllers\Template\TemplateSubscriptionController;
use App\Http\Controllers\Template\TemplateSitemapController;

// Default
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
| Frontend -> Template
|--------------------------------------------------------------------------
*/

// Template
Route::get('template-store', [TemplateHomeController::class, 'index'])->name('template.home');
Route::get('template-store/templates', [TemplateController::class, 'index'])->name('template.store');
Route::get('template-store/detail/{slug}', [TemplateController::class, 'detail'])->name('template.detail');

// Template Pages
// Route::get('template-store/{slug}', [TemplatePageController::class, 'index'])->name('template.page');

// Menu
Route::get('template-store/template/{category:slug}', [TemplateController::class, 'showByCategory'])->name('category.show');
Route::get('template-store/template/{category:slug}/{subcategory:slug}', [TemplateController::class, 'showBySubcategory'])->name('subcategory.show');
Route::get('template-store/template/{category:slug}/{subcategory:slug}/{subSubcategory:slug}', [TemplateController::class, 'showBySubSubcategory'])->name('subSubcategory.show');

// Template -> Blog
Route::get('template-store/blog', [TemplateBlogController::class, 'index'])->name('template.blog');
Route::get('template-store/blog-detail/{slug}', [TemplateBlogController::class, 'detail'])->name('template.blog.detail');

// Template -> About
Route::get('template-store/about/overview', [TemplateAboutController::class, 'overview'])->name('template.overview');
Route::get('template-store/about/brand', [TemplateAboutController::class, 'brand'])->name('template.brand');
Route::get('template-store/about/license', [TemplateAboutController::class, 'license'])->name('template.license');

// Template -> Hire Us
Route::get('template-store/hire-us', [TemplateHireController::class, 'index'])->name('template.hire-us');
Route::post('template-store/hire-us/new-hire', [TemplateHireController::class, 'newHire'])->name('template.front.newHire');

// Template -> Contact Us
Route::get('template-store/contact-us', [TemplateContactController::class, 'index'])->name('template.contact-us');
Route::post('template-store/contact-us/new-contact', [TemplateContactController::class, 'newContact'])->name('template.front.new-contact');

// Template -> Privacy Policy
Route::get('template-store/privacy-policy', [TemplatePrivacyController::class, 'index'])->name('template.privacy-policy');

// Template -> Terms of Service
Route::get('template-store/terms-of-service', [TemplateTermController::class, 'index'])->name('template.terms-of-service');
    
// Template -> Why Our Solutions
Route::get('template-store/why-our-solutions', [TemplateThemeController::class, 'index'])->name('template.why-our-solutions');
    
// Template -> Why Our solutions
Route::get('template-store/why-our-themes', [TemplateThemeController::class, 'index'])->name('template.why-our-themes');

// Template -> QR Code Gennerator
Route::get('/template-store/qr-code-generator', [TemplatePageController::class, 'qrCodeGen'])->name('template.qr-code-generator');

// Template -> Subscriber
Route::post('/template-store/new-subscriber', [TemplateSubscriptionController::class, 'subscriber'])->name('template.new-subscriber');

// Template -> 404
Route::get('/template-store/404', [TemplatePageController::class, 'error404'])->name('template.404');

// Template -> Sitemap
Route::get('/template-store/sitemap.xml', [TemplateSitemapController::class, 'index'])->name('template.sitemap');

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
| Backend -> Template
|--------------------------------------------------------------------------
*/

// Dashboard
Route::get('/template-store/dashboard', function () {
    return view('administration.template.dashboard');
})->middleware(['auth', 'verified'])->name('template.dashboard');

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

// Template Seller
Route::get('/template-store/manage-sellers', [TemplateSellerController::class, 'show'])->middleware(['auth', 'verified'])->name('template.manage-sellers');
Route::get('/template-store/manage-seller/new-seller', [TemplateSellerController::class, 'create'])->middleware(['auth', 'verified'])->name('template.new-seller');
Route::post('/template-store/manage-seller/new-seller/store', [TemplateSellerController::class, 'store'])->middleware(['auth', 'verified'])->name('template.new-seller.store');
Route::get('/template-store/manage-seller/edit/{id}', [TemplateSellerController::class, 'edit'])->middleware(['auth', 'verified'])->name('template.seller.edit');
Route::put('/template-store/manage-seller/update/{id}', [TemplateSellerController::class, 'update'])->middleware(['auth', 'verified'])->name('template.seller.update');
Route::delete('/template-store/manage-seller/destroy/{id}', [TemplateSellerController::class, 'destroy'])->middleware(['auth', 'verified'])->name('template.seller.destroy');

// Template
Route::get('/template-store/manage-templates', [TemplateController::class, 'show'])->middleware(['auth', 'verified'])->name('template.manage-templates');
Route::get('/template-store/new-template', [TemplateController::class, 'create'])->middleware(['auth', 'verified'])->name('template.new-template');
Route::post('/template-store/new-template/store', [TemplateController::class, 'store'])->middleware(['auth', 'verified'])->name('template.new-template.store');
Route::get('/template-store/edit/{id}', [TemplateController::class, 'edit'])->middleware(['auth', 'verified'])->name('template.edit');
Route::put('/template-store/update/{id}', [TemplateController::class, 'update'])->middleware(['auth', 'verified'])->name('template.update-template');
Route::delete('/template-store/destroy/{id}', [TemplateController::class, 'destroy'])->middleware(['auth', 'verified'])->name('template.destroy-template');

// Blog -> Manage Blog
Route::get('/template-store/blog/manage-blog', [TemplateBlogController::class, 'show'])->middleware(['auth', 'verified'])->name('template.blog.manage-blog');
Route::get('/template-store/blog/new-blog', [TemplateBlogController::class, 'create'])->middleware(['auth', 'verified'])->name('template.blog.new-blog');
Route::post('/template-store/blog/new-blog/store', [TemplateBlogController::class, 'store'])->middleware(['auth', 'verified'])->name('template.blog.store');
Route::get('/template-store/blog/edit/{id}', [TemplateBlogController::class, 'edit'])->middleware(['auth', 'verified'])->name('template.blog.edit');
Route::put('/template-store/blog/update/{id}', [TemplateBlogController::class, 'update'])->middleware(['auth', 'verified'])->name('template.blog.update');
Route::delete('/template-store/blog/destroy/{id}', [TemplateBlogController::class, 'destroy'])->middleware(['auth', 'verified'])->name('template.blog.destroy');

// Blog -> Categories
Route::get('/template-store/blog/categories', [TemplateBlogCategoryController::class, 'show'])->middleware(['auth', 'verified'])->name('template.blog.categories');
Route::get('/template-store/blog/new-category', [TemplateBlogCategoryController::class, 'create'])->middleware(['auth', 'verified'])->name('template.blog.new-category');
Route::post('/template-store/blog/new-category/store', [TemplateBlogCategoryController::class, 'store'])->middleware(['auth', 'verified'])->name('template.blog.new-category.store');
Route::get('/template-store/blog/edit-category/{id}', [TemplateBlogCategoryController::class, 'edit'])->middleware(['auth', 'verified'])->name('template.blog.category.edit');
Route::put('/template-store/blog/update-category/{id}', [TemplateBlogCategoryController::class, 'update'])->middleware(['auth', 'verified'])->name('template.blog.category.update');
Route::delete('/blog/destroy-category/{id}', [TemplateBlogCategoryController::class, 'destroy'])->middleware(['auth', 'verified'])->name('template.blog.category.destroy');

Route::get('/template-store/blog/subcategories', [TemplateBlogCategoryController::class, 'show'])->middleware(['auth', 'verified'])->name('template.blog.subcategories');
Route::get('/template-store/blog/subcategories/new-subcategory', [TemplateBlogCategoryController::class, 'create'])->middleware(['auth', 'verified'])->name('template.blog.new-subcategory');
Route::post('/template-store/blog/subcategories/new-subcategory/store', [TemplateBlogCategoryController::class, 'store'])->middleware(['auth', 'verified'])->name('template.blog.new-subcategory.store');
Route::get('/template-store/blog/subcategories/subcategory/edit/{id}', [TemplateBlogCategoryController::class, 'edit'])->middleware(['auth', 'verified'])->name('template.blog.subcategory.edit');
Route::put('/template-store/blog/subcategories/subcategory/update/{id}', [TemplateBlogCategoryController::class, 'update'])->middleware(['auth', 'verified'])->name('template.blog.subcategory.update');
Route::delete('/template-store/blog/subcategories/subcategory/destroy/{id}', [TemplateBlogCategoryController::class, 'destroy'])->middleware(['auth', 'verified'])->name('template.blog.subcategory.destroy');

Route::get('/template-store/blog/sub-subcategories', [TemplateBlogCategoryController::class, 'show'])->middleware(['auth', 'verified'])->name('template.blog.sub-subcategories');
Route::get('/template-store/blog/sub-subcategories/new-subsubcategory', [TemplateBlogCategoryController::class, 'create'])->middleware(['auth', 'verified'])->name('template.blog.new-sub-subcategory');
Route::post('/template-store/blog/sub-subcategories/new-subsubcategory/store', [TemplateBlogCategoryController::class, 'store'])->middleware(['auth', 'verified'])->name('template.blog.new-sub-subcategory.store');
Route::get('/template-store/blog/sub-subcategories/sub-subcategory/edit/{id}', [TemplateBlogCategoryController::class, 'edit'])->middleware(['auth', 'verified'])->name('template.blog.sub-subcategory.edit');
Route::put('/template-store/blog/sub-subcategories/sub-subcategory/update/{id}', [TemplateBlogCategoryController::class, 'update'])->middleware(['auth', 'verified'])->name('template.blog.sub-subcategory.update');
Route::delete('/template-store/blog/sub-subcategories/sub-subcategory/destroy/{id}', [TemplateBlogCategoryController::class, 'destroy'])->middleware(['auth', 'verified'])->name('template.blog.sub-subcategory.destroy');

// Blog -> Tag
Route::get('/template-store/blog/tags', [TemplateBlogTagController::class, 'show'])->middleware(['auth', 'verified'])->name('template.blog.tags');
Route::get('/template-store/blog/new-tag', [TemplateBlogTagController::class, 'create'])->middleware(['auth', 'verified'])->name('template.blog.new-tag');
Route::post('/template-store/blog/new-tag/store', [TemplateBlogTagController::class, 'store'])->middleware(['auth', 'verified'])->name('template.blog.new-tag.store');
Route::get('/template-store/blog/edit-tag/{id}', [TemplateBlogTagController::class, 'edit'])->middleware(['auth', 'verified'])->name('template.blog.tag.edit');
Route::put('/template-store/blog/update-tag/{id}', [TemplateBlogTagController::class, 'update'])->middleware(['auth', 'verified'])->name('template.blog.tag.update');
Route::delete('/template-store/blog/destroy-tag/{id}', [TemplateBlogTagController::class, 'destroy'])->middleware(['auth', 'verified'])->name('template.blog.tag.destroy');

// Blog -> Comments
Route::get('/template-store/blog/comments', [TemplateBlogTagController::class, 'show'])->middleware(['auth', 'verified'])->name('template.blog.comments');


// Streaming Audio
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

// Pages
Route::get('/template-store/manage-pages', [TemplatePageController::class, 'show'])->middleware(['auth', 'verified'])->name('template.manage-pages');
Route::get('/template-store/manage-pages/new-page', [TemplatePageController::class, 'create'])->middleware(['auth', 'verified'])->name('template.new-page');
Route::post('/template-store/manage-pages/new-page/store', [TemplatePageController::class, 'store'])->middleware(['auth', 'verified'])->name('template.new-page.store');
Route::get('/template-store/manage-pages/view/{id}', [TemplatePageController::class, 'view'])->middleware(['auth', 'verified'])->name('template.page.view');
Route::get('/template-store/manage-pages/edit/{id}', [TemplatePageController::class, 'edit'])->middleware(['auth', 'verified'])->name('template.page.edit');
Route::put('/template-store/manage-pages/update/{id}', [TemplatePageController::class, 'update'])->middleware(['auth', 'verified'])->name('template.page.update');
Route::delete('/template-store/manage-pages/destroy/{id}', [TemplatePageController::class, 'destroy'])->middleware(['auth', 'verified'])->name('template.page.destroy');

// Subscription
Route::get('/template-store/manage-subscriptions', [TemplateSubscriptionController::class, 'show'])->middleware(['auth', 'verified'])->name('template.manage-subscriptions');
Route::get('/template-store/manage-subscriptions/new-subscription', [TemplateSubscriptionController::class, 'create'])->middleware(['auth', 'verified'])->name('template.new-subscription');
Route::post('/template-store/manage-subscriptions/new-subscription/store', [TemplateSubscriptionController::class, 'store'])->middleware(['auth', 'verified'])->name('template.new-subscription.store');
Route::get('/template-store/manage-subscriptions/edit/{id}', [TemplateSubscriptionController::class, 'edit'])->middleware(['auth', 'verified'])->name('template.subscription.edit');
Route::put('/template-store/manage-subscriptions/update/{id}', [TemplateSubscriptionController::class, 'update'])->middleware(['auth', 'verified'])->name('template.subscription.update');
Route::delete('/template-store/manage-subscriptions/destroy/{id}', [TemplateSubscriptionController::class, 'destroy'])->middleware(['auth', 'verified'])->name('template.subscription.destroy');

// Contact
Route::get('/template-store/manage-contacts', [TemplateContactController::class, 'show'])->middleware(['auth', 'verified'])->name('template.manage-contacts');
Route::get('/template-store/manage-contacts/new-contact', [TemplateContactController::class, 'create'])->middleware(['auth', 'verified'])->name('template.new-contact');
Route::post('/template-store/manage-contacts/new-contact/store', [TemplateContactController::class, 'store'])->middleware(['auth', 'verified'])->name('template.new-contact.store');
Route::get('/template-store/manage-contacts/edit/{id}', [TemplateContactController::class, 'edit'])->middleware(['auth', 'verified'])->name('template.contact.edit');
Route::get('/template-store/manage-contacts/view/{id}', [TemplateContactController::class, 'view'])->middleware(['auth', 'verified'])->name('template.contact.view');
Route::put('/template-store/manage-contacts/update/{id}', [TemplateContactController::class, 'update'])->middleware(['auth', 'verified'])->name('template.contact.update');
Route::delete('/template-store/manage-contacts/destroy/{id}', [TemplateContactController::class, 'destroy'])->middleware(['auth', 'verified'])->name('template.contact.destroy');

// Hire
Route::get('/template-store/manage-hires', [TemplateHireController::class, 'show'])->middleware(['auth', 'verified'])->name('template.manage-hires');
Route::get('/template-store/manage-hires/new-hire', [TemplateHireController::class, 'create'])->middleware(['auth', 'verified'])->name('template.new-hire');
Route::post('/template-store/manage-hires/new-hire/store', [TemplateHireController::class, 'store'])->middleware(['auth', 'verified'])->name('template.new-hire.store');
Route::get('/template-store/manage-hires/edit/{id}', [TemplateHireController::class, 'edit'])->middleware(['auth', 'verified'])->name('template.hire.edit');
Route::get('/template-store/manage-hires/view/{id}', [TemplateHireController::class, 'view'])->middleware(['auth', 'verified'])->name('template.hire.view');
Route::put('/template-store/manage-hires/update/{id}', [TemplateHireController::class, 'update'])->middleware(['auth', 'verified'])->name('template.hire.update');
Route::delete('/manage-hires/destroy/{id}', [TemplateHireController::class, 'destroy'])->middleware(['auth', 'verified'])->name('template.hire.destroy');

/*
|--------------------------------------------------------------------------
| Backend -> Blog
|--------------------------------------------------------------------------
*/

// Backend -> Blog -> Dashboard
Route::get('/blog/dashboard', [BlogController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('blog.dashboard');

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
| Backend -> Book
|--------------------------------------------------------------------------
*/

// Dashboard
Route::get('/bookstore/dashboard', function () {
    return view('administration.book.dashboard');
})->middleware(['auth', 'verified'])->name('book.dashboard');

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