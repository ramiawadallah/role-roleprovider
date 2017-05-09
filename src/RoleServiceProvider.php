<?php

namespace Role\RoleProvider;

use Illuminate\Support\ServiceProvider;

class RoleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {   
        
        if(!file_exists(base_path('app/Http/Middleware').'/Roles')){
            $this->publishes([__Dir__.'/Middleware'=>base_path('app/Http/Middleware')]);
        }

        if(!file_exists(base_path('resources/views/admin').'/index.blade.php')){
            $this->publishes([__Dir__.'/resources/views/admin'=>base_path('resources/views/admin')]);
        }

        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
