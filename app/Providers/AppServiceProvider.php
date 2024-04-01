<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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

        view()->composer("layouts.site", function ($view) {
            $categories = \App\Models\Category::all();
            $view->with(compact('categories'));           
        });
        

        view()->composer("sections.popularPosts", function ($view) {
            $popularPosts = \App\Models\Post::limit(4)->orderBy('view', 'desc')->get();
           
            $view->with(compact('popularPosts'));           
        });
    } 
}
