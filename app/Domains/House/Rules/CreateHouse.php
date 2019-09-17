<?php


namespace App\Domains\House\Rules;


use App\Support\Validator\RulesBase;

class CreateHouse extends RulesBase
{
    protected $rules = [
        'name' => 'required',
        'address' => 'required',
    ];
}
