<?php

namespace App\Models\V1\modules\moduleConfig;

use App\Models\V1\IsClientDataBase;

use Illuminate\Database\Eloquent\Model;



class ModuleConfigNoticia extends Model
{
    use IsClientDataBase;

    protected $table = "config_site";
}
