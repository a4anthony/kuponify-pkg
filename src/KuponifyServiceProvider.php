<?php

namespace A4anthony\Kuponify;


use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;


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
        $this->loadHelpers();
        $this->mergeConfigFrom(__DIR__ . '/config/kuponify_types.php', 'kuponify_types');
        $this->_registerPublishableResources();

        //dd(request()->is('kuponify*'));
        if (request()->is('kuponify*')) {
            Inertia::setRootView('vendor.kuponify.app');
        }
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/Routes.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'kuponify');
    }

    protected function loadHelpers()
    {
        foreach (glob(__DIR__ . '/../helpers/*.php') as $filename) {
            include_once $filename;
        }
    }

    public function provides()
    {
        return ['kuponify'];
    }


    private function _registerPublishableResources()
    {
        $publishablePath = dirname(__DIR__) . '/';

        $publishable = [
            //'seeds' => [
            //    "{$publishablePath}/src/DummyDatabase/seeds/" => database_path('seeds'),
            //    "{$publishablePath}/src/DummyDatabase/dummy_seeds/" => database_path('seeds'),
            //],
            //'config' => [
            //    "{$publishablePath}/src/config/coupon.php" => config_path('coupon.php'),
            //],
            'middleware' => [
                //"{$publishablePath}src/Http/Middleware/HandleInertiaRequests.php" => base_path('app/Http/Middleware/HandleInertiaRequests.php'),
            ],
            'view' => [
                "{$publishablePath}resources/views/app.blade.php" => base_path('/resources/views/vendor/kuponify/app.blade.php'),
            ],
        ];

        foreach ($publishable as $group => $paths) {
            $this->publishes($paths, $group);
        }
    }
}