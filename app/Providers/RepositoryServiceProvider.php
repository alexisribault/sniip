<?php

namespace App\Providers;

use App\Repositories\TextRepository;
use App\Repositories\TextRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            TextRepositoryInterface::class,
            TextRepository::class
        );
    }
}

