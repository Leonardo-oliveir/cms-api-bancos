<?php

namespace App\Repository\V1\modules\moduleConfig;
use App\Repository\V1\BaseRepository;

use App\Repository\Interfaces\modules\moduleConfig\moduleConfigNoticia as configNoticia;
// use App\Repository\Interfaces\modules\moduleConfig;
use Illuminate\Database\Eloquent\Collection;

class moduleConfigNoticia extends BaseRepository implements configNoticia
{
    public function moduleConfigNoticia(): Collection
    {
        return $this->model::all();
    }
}
