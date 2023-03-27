<?php

namespace App\Providers;

use App\Repository\V1\Test;
use Illuminate\Support\ServiceProvider;
use App\Repository\Interfaces\Test as TestContract;
use App\Repository\Interfaces\modules\moduleConfig\moduleConfigNoticia as ConfigContract;

use App\Repository\V1\modules\moduleConfig\moduleConfigNoticia;

class RepositoryServiceProvider extends ServiceProvider
{

    // public function register()
    // {
    //     $this->app->bind(TestContract::class, function ($app) {
    //         return new Test();
    //     });   
    // }


    public function register()
  {
        $this->app->bind(ConfigContract::class, function ($app) {
            return new moduleConfigNoticia();
        });   
    }
    
    public function boot()
    {
        //
    }
}