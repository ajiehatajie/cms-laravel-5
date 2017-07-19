<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use File;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $menus = [];
        if (File::exists(base_path('resources/laravel-admin/member.json'))) {
            $menus = json_decode(File::get(base_path('resources/laravel-admin/member.json')));
            view()->share('MemberMenus', $menus);
        }

        //
       view()->composer('layouts.partials.slide',function($view)
       {
         $view->with('pages',\App\Page::all());
       });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('mailgun.client', function() {
            return \Http\Adapter\Guzzle6\Client::createWithConfig([
                // your Guzzle6 configuration

            ]);
        });

    }
}
