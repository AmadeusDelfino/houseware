<?php
namespace App\Domains\House\Models;

use App\Domains\HousePhoto\HousePhoto;
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

    public function photos()
    {
        #TODO adicionar rooms para relacionamento
        return $this->hasManyThrough(HousePhoto::class);
    }

    public function rooms()
    {
        #TODO definir relação com os cômodos da casa
    }
}
