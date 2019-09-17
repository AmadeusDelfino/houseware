<?php


namespace App\Support\Validator\Responses;


use App\Support\Response\ResponseBase;

class ValidateFail extends ResponseBase
{
    protected $body = [
        'success' => false,
        'message' => []
    ];

    public function __construct($errors)
    {
        $this->body['message'] = $errors->messages()->toArray();
    }
}
