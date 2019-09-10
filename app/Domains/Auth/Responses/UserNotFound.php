<?php

namespace App\Auth\Responses;

use App\Support\Response\ResponseBase;

class UserNotFound extends ResponseBase
{
    protected $statusCode = '401';

    protected $body = [
        'success' => false,
        'message' => 'Usuário ou senha incorretos',
    ];
}
