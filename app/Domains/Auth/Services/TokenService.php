<?php


namespace App\Domains\Auth\Services;


use App\Domains\Auth\Models\Token;

class TokenService
{
    public function generateToken($userId)
    {
        return Token::create([
            'token' => uniqid(rand(1, 10), true),
            'user_id' => $userId,
        ]);
    }
}
