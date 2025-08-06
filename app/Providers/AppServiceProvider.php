<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Ecommerce;
use App\Models\About;
use App\Models\Contact;
use App\Models\Shop;
use App\Models\Team;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('ecommerce', Ecommerce::first());
        View::share('about1', About::first());
        View::share('contact', Contact::all());
        View::share('shop', Shop::all());
        View::share('team', Team::all());
    }
}
