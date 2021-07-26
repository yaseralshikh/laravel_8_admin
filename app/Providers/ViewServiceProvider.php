<?php

namespace App\Providers;

use App\Models\Permission;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (Str::contains(request()->path(), 'admin')) {
            view()->composer('*', function($view){

                if (!Cache::has('admin_side_menu')) {
                    Cache::forever('admin_side_menu', Permission::tree());
                }

                $admin_side_menu = Cache::get('admin_side_menu');

                $view->with([
                    'admin_side_menu' => $admin_side_menu
                ]);
            });
        }
    }
}
