<?php

namespace App\Domains\Auth\Services;


use App\Auth\Responses\UserCreated;
use App\Auth\Responses\UserNotFound;
use App\Auth\Responses\UserSuccessfullyLoggedIn;
use App\Domains\Auth\Models\User;
use App\Domains\Auth\Rules\CreateUser;
use App\Support\Service\ServiceBase;
use Illuminate\Support\Facades\Auth;

class AuthService extends ServiceBase
{
    /**
     * @param string $username
     * @param string $password
     * @return UserNotFound|UserSuccessfullyLoggedIn
     */
    public function login(string $username, string $password)
    {
        if(!Auth::attempt([
            'username' => $username,
            'password' => $password,
        ], true)) {
            return (new UserNotFound());
        }

        $user = Auth::user();


        return (new UserSuccessfullyLoggedIn(
            (new TokenService())->generateToken($user->id)
        ));
    }

    /**
     * @param array $data
     * @return UserCreated
     * @throws \App\Exceptions\InvalidParamsException
     */
    public function signUp(array $data)
    {
        $this->validate($data, new CreateUser());
        $data['password'] = \Hash::make($data['password']);

        return new UserCreated(User::create($data));
    }

    public function logout()
    {
        Auth::user()->token()->revoke();
    }
}
