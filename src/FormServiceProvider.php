<?php

namespace Adan;

use Illuminate\Support\ServiceProvider;


class FormServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'adan');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/adan/form'),
        ]);
    }

    public function register()
    {
    }
}
