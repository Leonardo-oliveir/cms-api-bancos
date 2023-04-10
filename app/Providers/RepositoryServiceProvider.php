<?php

namespace App\Providers;

use App\Repository\V1\Test;
use Illuminate\Support\ServiceProvider;
use App\Repository\Interfaces\Test as TestContract;
use App\Repository\Interfaces\modules\moduleConfig\ModuleConfigNoticia as ConfigContract;
use App\Repository\Interfaces\modules\Module as ModuleContract;

use App\Repository\V1\modules\moduleConfig\ModuleConfigNoticia;
use App\Repository\V1\modules\Module;

class RepositoryServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(TestContract::class, function ($app) {
            return new Test();
        });   
    $this->app->bind(ConfigContract::class, function ($app) {
        return new ModuleConfigNoticia();
    });
    $this->app->bind(ModuleContract::class, function ($app) {
        return new Module();
    });
    }



    public function boot()
    {
        //
    }
}
