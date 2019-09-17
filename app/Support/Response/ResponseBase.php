<?php

namespace App\Support\Response;

use App\Support\Inferfaces\Response;

class ResponseBase implements Response
{
    protected $body = [
        'success' => true,
        'message' => null
    ];
    protected $statusCode = 200;
    protected $headers = [];

    public function __construct($item = [])
    {
        $this->body['message'] = $item;
    }

    public function getBody() : array
    {
        return $this->body;
    }

    public function setBody(array $body) : Response
    {
        $this->body = $body;

        return $this;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function setStatusCode(int $statusCode): Response
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function setHeaders(array $headers): Response
    {
        $this->headers = $headers;
        return $this;
    }
}
