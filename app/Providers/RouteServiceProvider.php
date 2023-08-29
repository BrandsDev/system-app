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
    public const HOME = '/private/dashboard';

    public const BookHOME = '/private/bookstore/dashboard';
    public const BookCategories = '/private/bookstore/categories/manage-categories';
    public const BookSubCategories = '/private/bookstore/categories/manage-subcategories';
    public const BookSubSubCategories = '/private/bookstore/categories/manage-sub-subcategories';
    public const BookBlog = '/private/bookstore/manage-blog/new-blog';
    public const BookNew = '/private/bookstore/manage-books';
    public const BookPublisher = '/private/bookstore/manage-publishers';
    public const BookAuthor = '/private/bookstore/manage-author/new-author';
    public const BookAudio = '/private/bookstore/manage-audios';
    public const BookAudioPlaylist = '/private/bookstore/manage-audio-playlists';

    public const TemplateHome = '/';
    public const TemplateDashboard = '/private/template-store/dashboard';
    public const TemplateCategories = '/private/template-store/categories/manage-categories';
    public const TemplateSubCategories = '/private/template-store/categories/manage-subcategories';
    public const TemplateSubSubCategories = '/private/template-store/categories/manage-sub-subcategories';
    public const TemplateBlog = '/private/template-store/manage-blogs';
    public const TemplateNew = '/private/template-store/new-template';
    public const TemplateSeller = '/private/template-store/manage-sellers';
    public const TemplateAudio = '/private/template-store/manage-audios';
    public const TemplateAudioPlaylist = '/private/template-store/manage-audio-playlists';
    public const TemplatePage = '/private/template-store/manage-pages';
    public const TemplateSubscription = '/private/template-store/manage-subscriptions';
    public const TemplateContact = '/private/template-store/manage-contacts';
    public const TemplateHire = '/private/template-store/manage-hires';

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
