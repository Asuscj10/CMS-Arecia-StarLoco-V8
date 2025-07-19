<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
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
        Validator::extend('check_password', function ($attribute, $value, $parameters, $validator) {
            return hash('sha512', md5($value)) == $parameters[0];
        });

        Validator::extend('recaptcha', function ($attribute, $value, $parameters, $validator) {
            $uri = 'https://www.google.com/recaptcha/api/siteverify?secret='.config('config.recaptcha.private').'&response='.$value;
            $response = json_decode(file_get_contents($uri));

            if ($response->success)
            {
                return true;
            }
            
            return false;
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
