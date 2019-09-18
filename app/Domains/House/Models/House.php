<?php
namespace App\Domains\House\Models;

use App\Domains\HousePhoto\HousePhoto;
use App\Domains\HouseRooms\Models\HouseRoom;
use App\Support\Log\LogMorphRelation;
use App\Support\Model\ModelBase;
use Illuminate\Database\Eloquent\SoftDeletes;

class House extends ModelBase
{
    use SoftDeletes, LogMorphRelation;

    protected $fillable = [
        'name',
        'address',
    ];

    public function rooms()
    {
        return $this->hasMany(HouseRoom::class);
    }
}
