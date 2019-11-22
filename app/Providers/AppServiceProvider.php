<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \Illuminate\Database\Schema;

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
        $plataform = \Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlataform();
        $plataform->registerDoctrineTypeMapping('enum', 'string');
    }
}
