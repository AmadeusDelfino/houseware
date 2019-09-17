<?php

namespace App\Domains\Auth\Controllers;

use App\Domains\Auth\Services\AuthService;
use App\Support\Controller\ControllerBase;
use Illuminate\Http\Request;

class AuthController extends ControllerBase
{
    /**
     * @var AuthService
     */
    protected $service = AuthService::class;

    public function login(Request $request)
    {
        return $this->makeResponse(
            $this->service->login($request->post('username'), $request->post('password'))
        );
    }

    public function signUp(Request $request)
    {
        return $this->makeResponse(
            $this->service->signUp($request->all())
        );
    }

    public function logout()
    {
        $this->service->logout();
    }
}
