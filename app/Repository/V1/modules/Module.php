<?php

namespace App\Repository\V1\modules;
use App\Repository\V1\BaseRepository;

use App\Repository\Interfaces\modules\Module as moduleInterface;
// use App\Repository\Interfaces\modules\moduleConfig;
use Illuminate\Database\Eloquent\Collection;

class Module extends BaseRepository implements moduleInterface
{
    public function createModule(): Collection
    {   
        return $this->model::all();
    }
}
