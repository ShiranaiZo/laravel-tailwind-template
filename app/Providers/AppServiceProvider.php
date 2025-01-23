<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function($view) {
            // url => menu namea
            // Don't add more than 1 dropdown!!!
            $data['menuItems'] = [
                (object) [
                    'type' => 'link',
                    'url' => config('app.url').'/home',
                    'name' => 'Home',
                ],
                (object) [
                    'type' => 'link',
                    'url' => config('app.url').'/about',
                    'name' => 'About',
                ],
                (object) [
                    'type' => 'dropdown',
                    'name' => 'Directory',
                    'items' => [
                        (object) [
                            'type' => 'link',
                            'url' => config('app.url').'/map',
                            'name' => 'Map',
                        ],
                        (object) [
                            'type' => 'link',
                            'url' => config('app.url').'/stores',
                            'name' => 'Stores',
                        ],
                    ],
                ],
                (object) [
                    'type' => 'link',
                    'url' => config('app.url').'/about',
                    'name' => 'About',
                ],
                // 'home' => 'Home',
                // 'about' => 'About',
                // 'directory' => [
                //     'routeName' => 'Directory',
                //     'items' => [
                //         'map' => 'Map',
                //         'stores' => 'Stores',
                //     ],
                // ],
                // 'service' => 'Service',
                // 'contact' => 'Contact',
            ];

            $view->with($data);
        });
    }
}
