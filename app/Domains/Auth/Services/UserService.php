<?php


namespace App\Domains\Auth\Services;


use App\Auth\Responses\UserDetail;
use App\Support\Service\ServiceBase;
use Illuminate\Support\Facades\Auth;

class UserService extends ServiceBase
{
    public function user()
    {
        return new UserDetail(Auth::user());
    }
}
