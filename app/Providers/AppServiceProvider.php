<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


use App\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\PassportServiceProvider;
//use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

       
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
