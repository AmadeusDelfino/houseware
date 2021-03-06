<?php

namespace App\Exceptions;

use App\Support\Response\ResourceNotFound;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        InvalidParamsException::class,
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if($exception instanceof InvalidParamsException) {
            $response = $exception->getResponse();
            return response()
                ->json($response->getBody())
                ->withHeaders($response->getHeaders())
                ->setStatusCode($response->getStatusCode());
        }

        if($exception instanceof ModelNotFoundException) {
            $response = new ResourceNotFound();
            return response()
                ->json($response->getBody())
                ->withHeaders($response->getHeaders())
                ->setStatusCode($response->getStatusCode());
        }

        return parent::render($request, $exception);
    }
}
