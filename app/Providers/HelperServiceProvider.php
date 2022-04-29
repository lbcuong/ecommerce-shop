<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * 
     * Upload file's path
     * @var string
     */
    public const ITEM = 'public/avatar';

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $file = app_path('Helpers/Helper.php');
        if (file_exists($file)) {
            require_once($file);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
