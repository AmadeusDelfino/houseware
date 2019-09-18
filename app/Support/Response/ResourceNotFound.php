<?php


namespace App\Support\Response;


class ResourceNotFound extends ResponseBase
{
    protected $statusCode = 404;
    protected $body = [
        'success' => false,
        'message' => [
            'Recurso não encontrado para o ID informado',
        ]
    ];
}
