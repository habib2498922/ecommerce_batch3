<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use PHPUnit\Framework\Constraint\Count;
use View;
use Cart;

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
    public function boot()
    {
//        View::share('name', 'BITM');

        View::composer('*', function ($view){
            $view->with('categories', Category::all());
            $view->with('totalCartProduct', count(Cart::getContent()));
            $view->with('CartProduct', Cart::getContent());

        });
    }
}
