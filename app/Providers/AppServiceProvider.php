<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \Illuminate\Database\Schema;
use Code\Validator\Cpf;
use Code\Validator\Cnpj;

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
        /** @var TYPE_NAME $platform */
        $platform = \Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform();
        $platform->registerDoctrineTypeMapping('enum', 'string');

        \Validator::extend('document_number', function($attribute, $value, $parameters, $validator){
            $documentValidator = $parameters[0] == 'cpf' ? new Cpf() : new Cnpj();
            return $documentValidator->isValid($value);
        });
    }
}
