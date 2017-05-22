<?php

namespace App\Providers;
use View;
use Carbon\Carbon;
use Auth;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $age = Carbon::createFromDate(1977, 12, 6)->age;
        View::share('age',$age);
        View::share('myname','imon');
        View::share('auth',Auth::user());

        View::composer('*', function($view){
            $view->with('auth', Auth::user());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
