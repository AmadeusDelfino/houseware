<?php

namespace App\Support\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

abstract class ControllerBase extends Controller
{
    use AuthorizesRequests;

    protected $service;

    public function __construct()
    {
        $this->service = new $this->service;
    }

    protected function getSelectsFromRequest(Request $request)
    {
        return (new ParseSelectFromQueryString())($request->get('select'));
    }

    protected function getRelationsFromRequest(Request $request)
    {
        return (new ParseRelationsFromQueryString())($request->get('relations'));
    }

    protected function makeResponse($response)
    {
        return response()
            ->json($response->getBody())
            ->withHeaders($response->getHeaders())
            ->setStatusCode($response->getStatusCode());
    }

    public function all(Request $request)
    {
        $response = $this->service->all(
            $this->getSelectsFromRequest($request),
            $this->getRelationsFromRequest($request)
        );

        return $this->makeResponse($response);
    }

    public function find($id, Request $request)
    {
        return $this->makeResponse($this
            ->service
            ->find(
                $id,
                $this->getSelectsFromRequest($request),
                $this->getRelationsFromRequest($request)
            )
        );
    }

    public function create(Request $request)
    {
        return $this->makeResponse($this
            ->service
            ->create($request->all())
        );
    }

    public function delete($id)
    {
        return $this->makeResponse($this
            ->service
            ->delete($id)
        );
    }

    public function update($id, Request $request)
    {
        return $this->makeResponse($this
            ->service
            ->update($id, $request->except('_method'))
        );
    }

    public function getLogedUser($token)
    {
        return (new UserService())
            ->loginByToken($token);
    }

}
