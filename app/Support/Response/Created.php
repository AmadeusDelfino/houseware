<?php


namespace App\Support\Response;


class Created extends ResponseBase
{
    protected $statusCode = 201;
    protected $body = [
        'success' => true,
        'message' => null,
    ];

    public function __construct($item)
    {
        $this->body['message'] = $item;
    }
}
