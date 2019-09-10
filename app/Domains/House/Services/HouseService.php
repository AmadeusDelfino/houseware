<?php

namespace App\Domains\House\Services;

use App\Domains\House\Models\House;
use App\Support\Service\ServiceBase;

class HouseService extends ServiceBase
{
    protected $model = House::class;
}
