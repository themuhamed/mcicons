<?php

namespace Themuhamed\Mcicons;

use Illuminate\Support\ServiceProvider;

class McIconsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/css/mcicons.css' => public_path('vendor/mcicons/mcicons.css'),
            __DIR__.'/../public/icons' => public_path('vendor/mcicons/icons'),
        ], 'mcicons-assets');
    }

    public function register()
    {
        //
    }
}
