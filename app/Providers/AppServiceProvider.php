<?php

namespace App\Providers;

use App\Models\Contact;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
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

    public function boot(): void
    {
        Schema::defaultStringLength(191);

        // Partager le nombre de messages avec toutes les vues utilisant l'en-tête
        View::composer('header', function ($view) {
            $messageCount = Contact::count();
            $view->with('messageCount', $messageCount);
        });
    }
}
