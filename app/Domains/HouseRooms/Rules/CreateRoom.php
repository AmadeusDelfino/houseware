<?php


namespace App\Domains\HouseRooms\Rules;


use App\Support\Validator\RulesBase;

class CreateRoom extends RulesBase
{
    protected $rules = [
        'house_id' => 'required|exists:houses,id',
    ];
}
