<?php


namespace App\Domains\House\Controllers;


use App\Domains\House\Services\HouseService;
use App\Support\Controller\ControllerBase;

class HouseController extends ControllerBase
{
    protected $service = HouseService::class;
}
