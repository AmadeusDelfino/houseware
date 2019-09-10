<?php


use App\Domains\Auth\Services\LoginService;
use App\Support\Controller\ControllerBase;
use Illuminate\Http\Request;

class AuthController extends ControllerBase
{
    protected $service = LoginService::class;

    public function login(Request $request)
    {
        return $this->makeResponse(
            $this->service->login($request->post('username', 'password'))
        );
    }
}
