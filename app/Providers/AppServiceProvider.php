<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \App\Models\ra_pages;
use \App\Models\ra_class;
use \App\Models\ra_content;
use Illuminate\Support\Facades\View;

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
        $pages = ra_pages::where('publish', 1)->get();
        View::share('pages', $pages);
        $subpages = ra_class::where('publish', 1)->get();
        View::share('subpages', $subpages);

        $moreViewrs = ra_content::orderBy('view', 'DESC')->where('publish', 1)->take(5)->get();
        View::share('moreViewrs', $moreViewrs);


        $randomBlogs = ra_content::inRandomOrder()->where('publish', 1)->take(5)->get();
        View::share('randomBlogs', $randomBlogs);


        $ShaarBlogs = ra_content::where('class_id', 29)->where('publish', 1)->orWhere('class_id', 30)->orWhere('class_id', 34)->orWhere('class_id', 37)->inRandomOrder()->first();
        View::share('ShaarBlogs', $ShaarBlogs);
    }
}
