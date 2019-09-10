<?php


namespace App\Auth\Responses;


use App\Domains\Auth\Models\Token;
use App\Support\Response\ResponseBase;

class UserSuccessfullyLoggedIn extends ResponseBase
{
    protected $body = [
        'success' => true,
        'message' => [
            'token',
        ]
    ];

    public function __construct(Token $token)
    {
        $this->body['message']['token'] = $token->token;
    }
}
