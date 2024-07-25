<?php

namespace Adan;

use Illuminate\Support\ServiceProvider;


class FormServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'adan');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        // $this->publishes([
        //     __DIR__ . '/../resources/views' => resource_path('views/adan/form'),
        // ]);

        // $this->publishesMigrations([
        //     __DIR__.'/../database/migrations' => database_path('migrations'),
        // ]);


        $this->mergeConfigFrom(
            __DIR__ . '/config/adan-contact.php',
            'adan'
        );
        $this->publishes([
            __DIR__ . '/config/adan-contact.php' => config_path('adan-contact.php'),
        ]);
    }

    public function register()
    {
    }
}
