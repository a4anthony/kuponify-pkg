<?php

namespace A4anthony\Kuponify;


use Illuminate\Support\ServiceProvider;


class KuponifyServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'kuponify',
            function () {
                return new Kuponify();
            }
        );
        //dd(__DIR__.'/config/kuponify_types.php');
        $this->mergeConfigFrom(__DIR__ . '/config/kuponify_types.php', 'kuponify_types');

    }

    public function boot()
    {
        //dd(__DIR__ . '/Routes.php');
        $this->loadRoutesFrom(__DIR__ . '/Routes.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'kuponify');
    }


    public function provides()
    {
        return ['kuponify'];
    }
}