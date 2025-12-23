<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use App\Models\OtherPages;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        View::composer('*', function ($view) {
        $footerPages = Cache::remember('footer_pages', 1440, function () {
            return OtherPages::where('iStatus', 1)
                ->where('isDelete', 0)
                ->get(['pagename', 'slugname']);
        });

        $view->with('footerPages', $footerPages);
    });
    }
}
