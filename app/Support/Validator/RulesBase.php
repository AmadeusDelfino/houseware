<?php


namespace App\Support\Validator;


use App\Support\Inferfaces\Rules;

class RulesBase implements Rules
{
    protected $rules = [];

    public function getRules(): array
    {
        return $this->rules;
    }
}
