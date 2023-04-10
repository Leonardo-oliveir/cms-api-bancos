<?php

namespace App\Repository\Interfaces\modules;

use Illuminate\Database\Eloquent\Collection;

interface Module
{
    public function createModule(): Collection;
}
