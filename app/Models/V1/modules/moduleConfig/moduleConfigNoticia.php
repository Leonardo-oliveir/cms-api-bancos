<?php

namespace App\Models\V1\modules\modulesConfig;

use App\Models\V1\IsClientDataBase;

use Illuminate\Database\Eloquent\Model;



class moduleConfigNoticia extends Model
{
    use IsClientDataBase;

    protected $table = "config_site";
}
