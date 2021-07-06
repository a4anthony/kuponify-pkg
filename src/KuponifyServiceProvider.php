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
    }

    public function boot()
    {

    }


    public function provides()
    {
        return ['kuponify'];
    }
}