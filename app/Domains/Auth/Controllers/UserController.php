<?php


namespace App\Domains\Auth\Controllers;


use App\Domains\Auth\Services\UserService;
use App\Support\Controller\ControllerBase;

class UserController extends ControllerBase
{
    /**
     * @var UserService
     */
    protected $service = UserService::class;

    public function user()
    {
        return $this->makeResponse(
            $this->service->user()
        );
    }
}
