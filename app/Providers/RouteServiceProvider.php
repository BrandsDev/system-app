<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/dashboard';

    public const BlogHome = '/blog/dashboard';

    public const BookHOME = '/bookstore/dashboard';
    public const BookCategories = '/bookstore/categories/manage-categories';
    public const BookSubCategories = '/bookstore/categories/manage-subcategories';
    public const BookSubSubCategories = '/bookstore/categories/manage-sub-subcategories';
    public const BookBlog = '/bookstore/manage-blog/new-blog';
    public const BookNew = '/bookstore/manage-books';
    public const BookPublisher = '/bookstore/manage-publishers';
    public const BookAuthor = '/bookstore/manage-author/new-author';
    public const BookAudio = '/bookstore/manage-audios';
    public const BookAudioPlaylist = '/bookstore/manage-audio-playlists';

    public const TemplateHome = '/';
    public const TemplateDashboard = '/template-store/dashboard';
    public const TemplateCategories = '/template-store/categories/manage-categories';
    public const TemplateSubCategories = '/template-store/categories/manage-subcategories';
    public const TemplateSubSubCategories = '/template-store/categories/manage-sub-subcategories';
    public const TemplateBlog = '/template-store/blog/manage-blog';
    public const TemplateBlogCategories = '/template-store/blog/categories';
    public const TemplateBlogSubCategories = '/template-store/blog/subcategories';
    public const TemplateBlogSubSubCategories = '/template-store/blog/sub-subcategories';
    public const TemplateBlogTag = '/template-store/blog/tags';
    public const TemplateNew = '/template-store/new-template';
    public const TemplateSeller = '/template-store/manage-sellers';
    public const TemplateAudio = '/template-store/manage-audios';
    public const TemplateAudioPlaylist = '/template-store/manage-audio-playlists';
    public const TemplatePage = '/template-store/manage-pages';
    public const TemplateSubscription = '/template-store/manage-subscriptions';
    public const TemplateContact = '/template-store/manage-contacts';
    public const TemplateHire = '/template-store/manage-hires';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     */
    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
