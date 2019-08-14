<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Auth;
use App\User;
use App\Category;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    function boot()
    {
        view()->composer('layouts.app',function($view){
            $categories = Category::all();            
            $view->with('categories',$categories);
        });

        Schema::defaultStringLength(191);
    }
}
