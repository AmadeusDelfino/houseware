<?php


namespace App\Domains\Auth\Rules;


use App\Support\Validator\RulesBase;

class CreateUser extends RulesBase
{
    protected $rules = [
        'username' => 'required|unique:users,username',
        'password' => 'required',
    ];
}
