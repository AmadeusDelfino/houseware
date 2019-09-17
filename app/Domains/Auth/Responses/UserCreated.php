<?php


namespace App\Auth\Responses;


use App\Domains\Auth\Models\User;
use App\Support\Response\ResponseBase;

class UserCreated extends ResponseBase
{
    protected $body = [
        'success' => true,
        'message' => null,
    ];

    public function __construct(User $user)
    {
        $this->body['message']['user'] = $user;
    }
}
