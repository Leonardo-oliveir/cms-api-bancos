<?php

namespace App\Repository\V1\modules\moduleConfig;
use App\Repository\V1\BaseRepository;

use App\Repository\Interfaces\modules\moduleConfig\ModuleConfigNoticia as configNoticia;
// use App\Repository\Interfaces\modules\moduleConfig;
use Illuminate\Database\Eloquent\Collection;

class ModuleConfigNoticia extends BaseRepository implements configNoticia
{
    public function ModuleConfigNoticia(): Collection
    {   
        return $this->model::all();
    }
}
