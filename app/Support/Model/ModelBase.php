<?php
namespace App\Support\Model;

use App\Support\Log\LogMorphRelation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class ModelBase extends Model
{
    use SoftDeletes, LogMorphRelation;
}
