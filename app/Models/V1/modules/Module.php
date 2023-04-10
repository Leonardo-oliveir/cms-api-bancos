<?php

namespace App\Models\V1\modules;

use App\Models\V1\IsClientDataBase;

use Illuminate\Database\Eloquent\Model;



class Module extends Model
{
    use IsClientDataBase;

    protected $table = "cores";
}
