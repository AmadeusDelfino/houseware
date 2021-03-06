<?php


namespace App\Auth\Responses;


use App\Support\Response\ResponseBase;

class UserSuccessfullyLoggedIn extends ResponseBase
{
    protected $body = [
        'success' => true,
        'message' => null,
    ];

    public function __construct(string $token)
    {
        $this->body['message']['token'] = $token;
    }
}
