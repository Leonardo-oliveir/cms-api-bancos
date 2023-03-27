<?php

namespace App\Business\V1\modules\moduleConfig;

use App\Business\V1\Business;

class moduleConfigNoticia
{
    use Business;

    public function moduleConfigNoticia()
    {
        return $this->repository->moduleConfigNoticia();
    }
    
}
