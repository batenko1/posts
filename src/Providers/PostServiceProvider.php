<?php

namespace Batenko1\Posts\Providers;

use Batenko1\Posts\Console\Commands\PostCommand;
use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'posts');

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');


        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/posts'),
        ]);

        if($this->app->runningInConsole()) {
            $this->commands([
                PostCommand::class
            ]);
        }

    }
}
