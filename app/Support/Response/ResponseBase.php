<?php

namespace App\Support\Response;

class ResponseBase
{
    protected $body;
    protected $statusCode = 200;
    protected $headers = [];

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function setStatusCode(int $statusCode): ResponseBase
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function setHeaders(array $headers): ResponseBase
    {
        $this->headers = $headers;
        return $this;
    }
}
