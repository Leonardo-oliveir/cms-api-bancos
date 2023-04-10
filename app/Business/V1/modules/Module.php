<?php

namespace App\Business\V1\modules;

use App\Business\V1\Business;
use App\Repository\V1\modules\Module as ModulesModule;
use Illuminate\Support\Facades\Artisan;

class Module
{
    use Business;

    private int $idMetod;
    private int $idFuncionality;
    private string $namePage;
    private  $repository;

    public function __construct(int $idMetod, int $idFuncionality, string $namePage)
    {

        $this->idMetod = $idMetod;
        $this->idFuncionality = $idFuncionality;
        $this->namePage = $namePage;
        $this->repository = new ModulesModule();


    }

    public function createModule()
    {
        return $this->repository->createModule();   
    }

    private function getTypeModule()
    {

    }

    private function createModuleByType()
    {

    }
    
}
