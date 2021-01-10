<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Category;
use App\Region;

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
        view::composer('partials.guest.sidebar', function ($view) {
            $categories = Category::all();
            $regions = Region::all();
            $view->with(['categories' => $categories, 'regions' => $regions]);
        });
    }
}
