<?php

namespace App\Domains\Auth\Services;


use App\Auth\Responses\UserNotFound;
use App\Auth\Responses\UserSuccessfullyLoggedIn;
use App\Domains\Auth\Models\User;

class LoginService
{
    public function login($username, $password)
    {
        $user = User::byUsername($username)->byPassword($password)->first();
        if(is_null($username)) {
            return (new UserNotFound());
        }

        return (new UserSuccessfullyLoggedIn(
            (new TokenService())->generateToken($user->id)
        ));
    }
}
