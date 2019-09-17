<?php


namespace App\Auth\Responses;


use App\Domains\Auth\Models\User;
use App\Support\Response\ResponseBase;

class UserDetail extends ResponseBase
{
    protected $body = [
        'success' => true,
        'message' => null,
    ];

    public function __construct($user)
    {
        $this->body['message']['user'] = $user;
    }
}
