<?php


namespace App\Support\Log;


trait LogMorphRelation
{
    public function logs()
    {
        return $this->morphMany(\App\Domains\Log\Models\Log::class, 'logable');
    }
}
