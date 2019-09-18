<?php


namespace App\Domains\HouseRooms\Services;


use App\Domains\HouseRooms\Models\HouseRoom;
use App\Domains\HouseRooms\Rules\CreateRoom;
use App\Support\Service\ServiceBase;

class HouseRoomService extends ServiceBase
{
    protected $createRules = CreateRoom::class;
    protected $model = HouseRoom::class;
}
