<?php


namespace App\Domains\HouseRooms\Controllers;


use App\Domains\HouseRooms\Services\HouseRoomService;
use App\Support\Controller\ControllerBase;

class HouseRoomController extends ControllerBase
{
    /**
     * @var HouseRoomService
     */
    protected $service = HouseRoomService::class;
}
