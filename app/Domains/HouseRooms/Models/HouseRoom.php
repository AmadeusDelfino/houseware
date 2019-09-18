<?php


namespace App\Domains\HouseRooms\Models;


use App\Domains\House\Models\House;
use App\Support\Model\ModelBase;

class HouseRoom extends ModelBase
{
    protected $fillable = [
        'name',
        'description',
        'house_id',
    ];

    public function house()
    {
        return $this->belongsTo(House::class);
    }
}
