<?php

namespace App\Business\V1\modules\moduleConfig;

use App\Business\V1\Business;

class ModuleConfigNoticia
{
    use Business;

    public function ModuleConfigNoticia()
    {
        return $this->repository->ModuleConfigNoticia();
    }
    
}
