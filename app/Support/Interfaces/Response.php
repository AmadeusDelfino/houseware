<?php


namespace App\Support\Inferfaces;


interface Response
{
    public function getBody() : array;

    public function setBody(array $body) : Response;

    public function getStatusCode(): int;

    public function setStatusCode(int $statusCode): Response;

    public function getHeaders(): array;

    public function setHeaders(array $headers): Response;
}
