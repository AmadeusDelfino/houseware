<?php


namespace App\Domains\Log\Models;


use App\Support\Model\ModelBase;

class Log extends ModelBase
{
    protected $fillable = [
        'body',
        'user_id',
        'logable_id',
        'logable_type',
    ];

    public function logable()
    {
        return $this->morphTo();
    }
}
