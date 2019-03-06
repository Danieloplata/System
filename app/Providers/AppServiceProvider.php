<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Project;
use App\Panel;
use App\Observers\ProjectObserver;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {
        Schema::defaultStringLength(191);
        Project::observe(ProjectObserver::class);
        Panel::observe(PanelObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
