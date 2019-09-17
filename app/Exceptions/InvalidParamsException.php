<?php


namespace App\Exceptions;


use App\Support\Inferfaces\Response;

class InvalidParamsException extends \Exception
{
    protected $response;

    public function __construct($response)
    {
        parent::__construct();
        $this->response = $response;
    }

    public function getResponse() : Response
    {
        return $this->response;
    }
}
