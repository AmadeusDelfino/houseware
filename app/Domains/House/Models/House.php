<?php
namespace App\Domains\House\Models;

use App\Domains\HousePhoto\HousePhoto;
use App\Support\Model\ModelBase;

class House extends ModelBase
{
    protected $fillable = [
        'name',
        'address',
    ];

    public function photos()
    {
        return $this->hasMany(HousePhoto::class);
    }
}
