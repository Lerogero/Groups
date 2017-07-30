<?php

namespace Lerogero\Groups;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class GroupsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }

    /**
     * Register the application services.
     * @return void
     */
    public function register()
    {
        App::make('Lerogero\Groups\GroupsController');
        $this->loadViewsFrom(__DIR__ . '/views', 'groups');
    }
}