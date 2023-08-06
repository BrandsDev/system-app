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

    public const BookHOME = '/bookstore/dashboard';
    public const BookCategories = '/bookstore/categories/manage-categories';
    public const BookSubCategories = '/bookstore/categories/manage-subcategories';
    public const BookSubSubCategories = '/bookstore/categories/manage-sub-subcategories';
    public const BookBlog = '/bookstore/manage-blog/new-blog';
    public const BookNew = '/bookstore/manage-book/new-book';
    public const BookPublisher = '/bookstore/manage-publisher/new-publisher';
    public const BookAuthor = '/bookstore/manage-author/new-author';
    public const BookAudio = '/bookstore/manage-audio/new-audio';
    public const BookAudioPlaylist = '/bookstore/manage-audio-playlist/new-audio-playlist';

    public const TemplateHOME = '/template-store/dashboard';
    public const TemplateCategories = '/template-store/categories/manage-categories';
    public const TemplateSubCategories = '/template-store/categories/manage-subcategories';
    public const TemplateSubSubCategories = '/template-store/categories/manage-sub-subcategories';
    public const TemplateNew = '/template-store/new-template';
    public const TemplateAudio = '/template-store/manage-audio/new-audio';
    public const TemplateAudioPlaylist = '/template-store/manage-audio-playlist/new-audio-playlist';

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
